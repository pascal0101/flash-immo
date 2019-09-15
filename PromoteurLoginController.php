<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;
use Illuminate\Support\Facades\Hash;
use App\Models\Pack;
use App\Models\Souscrire;
use App\Models\Promoteur;
use App\Models\Modepayement;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class PromoteurLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:promoteur', ['except' => ['logout']]);
      $this->middleware('guest:client', ['except' => ['logout']]);
    }
    
    public function username(){
    	return 'login';
    }

    public function showLoginForm()
    {
      return view('auth.promoteur_login');
    }

    public function showPaymentForm()
    {

      $packs = Pack::all();
      $modes = Modepayement::all();
      return view('promoteur.paymentForm',compact('packs','modes'));
    }

    public function sabonner(Request $request)
    {
        $this->validate($request,
            [
                'num'=>'numeric|required'
            ],[
                'numeric'=>'Ce champs ne doit contenir que des nombres!',
                'required'=>'veuillez remplir ce champs'
            ]);
        $amount = Pack::where('codePack',$request->amount)->select('prix')->first();
        $amount = $amount->prix;
        session(['pack'=>$request->amount]);
        session(['mode'=>$request->moyen]);
        session(['amount'=>$amount]);
        $tel=$request->num;
        try {
            $client = new Client();
            $response = $client->post('https://paygateglobal.com/api/v1/pay',
                ['json'=>[
                    'auth_token'=>'3307d799-d8fd-47ba-9b92-87e7917c2a23',
                    'phone_number'=>$tel,
                    'amount'=>$amount,
                    'identifier'=>session('id'),
                    '_token'=>csrf_token()
                ]
                ]);
            $response = json_decode($response->getBody());
            $tx_reference = $response->tx_reference;
            session(['tx_reference'=>$tx_reference]);
            if ($response->status == 0)
            {
                sleep(5);
                return redirect(route('abonnement.verif'));
            }else{
                flash('Un problème s\'est produit. Veuillez recommencez svp!\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
                return redirect(route('promoteur.payement'));
            }
        }catch (RequestException $e){
            $e->getMessage();
            flash('Oups, Désolé Easy-Immobilier n\'a pas pu se connecter a Flooz. Vérifier votre connexion internet et recommencez!\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
            return redirect()->back();
        }
    }

    public function sabonner1(Request $request)
    {
      
        $this->validate($request,
            [
                'num'=>'numeric|required'
            ],[
                'numeric'=>'Ce champs ne doit contenir que des nombres!',
                'required'=>'veuillez remplir ce champs'
            ]);
        $amount = Pack::where('codePack',$request->amount)->select('prix')->first();
        $amount = $amount->prix;
        session(['pack'=>$request->amount]);
        session(['mode'=>$request->moyen]);
        session(['amount'=>$amount]);
        $tel=$request->num;
        try {
            $client = new Client();
            $response = $client->post('https://paygateglobal.com/api/v1/pay',
                ['json'=>[
                    'auth_token'=>'3307d799-d8fd-47ba-9b92-87e7917c2a23',
                    'phone_number'=>$tel,
                    'amount'=>$amount,
                    'identifier'=>session('id'),
                    '_token'=>csrf_token()
                ]
                ]);
            $response = json_decode($response->getBody());
            $tx_reference = $response->tx_reference;
            session(['tx_reference'=>$tx_reference]);
            if ($response->status == 0)
            {
                sleep(5);
                return redirect(route('abonnement.verif1'));
            }else{
                flash('Un problème s\'est produit. Veuillez recommencez svp!\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
                return redirect(route('promoteur.payement'));
            }
        }catch (RequestException $e){
            $e->getMessage();
            flash('Oups, Désolé Easy-Immobilier n\'a pas pu se connecter a Flooz. Vérifier votre connexion internet et recommencez!\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
            return redirect()->back();
        }
    }

    public function sabonnerVerif()
    {
        $test = 0;
        //while ($test == 0) {
        try{
            $client = new Client();
            $response = $client->post('https://paygateglobal.com/api/v1/status',
                ['json'=>[
                    'auth_token'=>'3307d799-d8fd-47ba-9b92-87e7917c2a23',
                    'tx_reference'=>session('tx_reference'),
                ]
                ]);
            $response = json_decode($response->getBody());
            if ($response->status == 0)
            {

                //abonnement
                Promoteur::where('codePromoteur',session('id'))->update([
                    'active'=>true
                ]);  

                //enregistrement dans la table souscriptions
                $date = now();
                $int=$date->year.'-'.$date->month.'-'.$date->day;
                Souscrire::create([
                    'codePromoteur'=>session('id'),
                    'codePack'=>session('pack'),
                    'codeMode'=>session('mode'),
                    'dateSous'=>$int,
                    
                ]);
                session()->flush();

                //$test = 1;
                flash('Abonnement éffectué avec succes!Veuillez vous connecter à votre compte!');
                return redirect(route('homeG'));
            }elseif ($response->status == 6)
            {
                //$test = 1;
                flash('Votre inscription à échoué veuillez rééssayer svp!\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
                return redirect(route('promoteur.payement'));
            }elseif ($response->status == 4)
            {
                //$test = 1;
                flash('Le délais est expiré. Nous n\'avons pas pu vérifier votre payement.');
                return redirect(route('promoteur.payement'));
            }else{
                sleep(5);
                return redirect(route('abonnement.verif'));
            }
        }catch (RequestException $e){
            flash('Oups, Désolé nous n\'avons pas pu vérifié votre payement. Vérifier votre compte flooz et connectez vous\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
            return redirect(route('promoteur.payement'));
        }
      //   sleep(15);
      // }
    }

    public function sabonnerVerif1()
    {
        $test = 0;
        //while ($test == 0) {
        try{
            $client = new Client();
            $response = $client->post('https://paygateglobal.com/api/v1/status',
                ['json'=>[
                    'auth_token'=>'3307d799-d8fd-47ba-9b92-87e7917c2a23',
                    'tx_reference'=>session('tx_reference'),
                ]
                ]);
            $response = json_decode($response->getBody());
            if ($response->status == 0)
            {
                
              return redirect(route('enreg.client'));
            }elseif ($response->status == 6)
            {
                //$test = 1;
                flash('Votre inscription à échoué veuillez rééssayer svp!\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
                return redirect(route('promoteur.payement'));
            }elseif ($response->status == 4)
            {
                //$test = 1;
                flash('Le délais est expiré. Nous n\'avons pas pu vérifier votre payement.');
                return redirect(route('promoteur.payement'));
            }else{
                sleep(5);
                return redirect(route('abonnement.verif1'));
            }
        }catch (RequestException $e){
            flash('Oups, Désolé nous n\'avons pas pu vérifié votre payement. Vérifier votre compte flooz et connectez vous!\n
                    Ou contacter l\'administrateur sur le 90 26 61 11/98 13 54 31');
            return redirect(route('promoteur.payement'));
        }
      //   sleep(15);
      // }
    }

    public function login(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'user'   => 'required',
        'pass' => 'required|min:6'
      ]);
      
      //dd("here");
      // Attempt to log the user in
      if (Auth::guard('promoteur')->attempt(['login' => $request->user, 'password' =>$request->pass ],false)) {

        $user = null;
        if ( Auth::guard('promoteur')->check() )
        {
            $user = Auth::guard('promoteur')->user();
        }
        if($user->active == 0 || $user->activeAdmin == 1){
          // if unsuccessful, then redirect back to the login with the form data
          if($user->active == 0){
            $id = $user->codePromoteur;
            session(['id'=>$id]);
            if (isset($user->societeimmo->codePromoteur)) {  
                session(['tuser'=>"societe"]);
            }
            if (isset($user->societeimmo->codePromoteur)) { 
                session(['tuser'=>"agent"]);
            }

            Auth::guard('promoteur')->logout();
            flash('Veuillez vous abonner pour avoir accès à votre compte!');
            return redirect()->intended(route('promoteur.payement'));
          }elseif ($user->activeAdminive == 1) {
            Auth::guard('promoteur')->logout();
            flash('Vous avez ete desactive par l\'administrateur! veuillez nous contacter pour plus de renseignement.');
          }
          Auth::guard('promoteur')->logout();
          return redirect()->back()->withInput($request->only('user', 'pass'));
        }elseif ($user->active == 1 && $user->activeAdmin == 0) {
          //if successful, then redirect to their intended location
            return redirect()->intended(route('promoteur.dashboard'));
        }
        
      } 
      session(['visa'=>0]);
      if (Auth::guard('client')->attempt(['login' => $request->user, 'password' =>$request->pass ],false)) {
        session(['visa'=>1]);
        // if successful, then redirect to their intended location
          return redirect()->intended(route('client.dashboard'));
      } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('user', 'pass'));
    }
    
    public function logout()
    {
        session()->flush();
        Auth::guard('promoteur')->logout();
        return redirect('/');
    }
}

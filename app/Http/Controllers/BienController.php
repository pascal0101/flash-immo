<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Bien;
use App\Offre;
use App\TypeBien;
use App\Image;
use App\Utilisateur;
use App\Ville;
use App\Message;
use App\User;
use App\Agence;
use PDF;
use Charts;
use Illuminate\Http\Request;
use Alert;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function offres()
    {
        $offres = offre::latest()->get();
        $typebien = typebien::all();
        return view('Admin/offres', compact('offres', 'typebien'));
    }

    public function offrespdf()
    {
        $offres = offre::all();
        $typebien = typebien::all();


        $pdf = PDF::loadView('Admin.offres', compact('offres', 'typebien'))->setPaper('a4', 'portrait');
        return $pdf->download('admintest.pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function active()
    {
        $offres = offre::all();
        //$offres = DB::table('offres')->join('type_biens', 'offres.IdtypeBien', '=', 'type_biens.id')->where('Publier', '=', 1)->get();
        $typebien = typebien::all();
        return view('Admin/active', compact('offres', 'typebien'));
    }

    public function desactive()
    {
        $offres = offre::all();
        //$offres = DB::table('offres')->join('type_biens', 'offres.IdtypeBien', '=', 'type_biens.id')->where('Publier', '=', 1)->get();
        $typebien = typebien::all();
        return view('Admin/desactive', compact('offres', 'typebien'));
    }

    public function client()
    {
        $utilisateurs = Utilisateur::all();
        return view('Admin/clients', compact('utilisateurs'));
    }

    //impression
    public function impclient()
    {
        $utilisateurs = Utilisateur::all();
        return view('Admin/imprime/impclients', compact('utilisateurs'));
    }
    public function impagence()
    {
        $agences = Agence::all();
        return view('Admin/imprime/impagences', compact('agences'));
    }
    public function impoffre()
    {
        $offres = Offre::all();

        return view('Admin/imprime/impoffres', compact('offres'));
    }
    public function impoffresactive()
    {

        $offres = Offre::all();

        return view('Admin/imprime/impoffresactive', compact('offres'));
    }
    public function impoffresnonactive()
    {
        $offres = Offre::all();

        return view('Admin/imprime/impoffresnonactive', compact('offres'));
    }
    public function impmessages()
    {
        $messages = Message::all();

        return view('Admin/imprime/impmessages', compact('messages'));
    }
    //

    public function agence()
    {
        $agences = Agence::all();
        return view('Admin/agences', compact('agences'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //dd("toto");
        //$offres = offre::all()->where('id', $id);
        $offres = offre::all();
        $images = image::all()->where('offre_id', $id);
        $ville = Ville::all();

        $offre =  Offre::findOrFail($id);
        //$offre = DB::table('offres')->join('villes', 'offres.id', '=', 'villes.id')->first();

        return view('user.voir', compact('offre', 'images', 'offres'));
    }

    public function sesoffres($id)
    {

        $offre =  Offre::findOrFail($id);
        //$offres = offre::all();
        //$images = image::all()->where('offre_id', $id);
        $user =  User::all();

        $offres = Offre::where('user_id', '=',  $offre->user->id)->get();
        //$utilisateurs = DB::table('utilisateurs')->where('user_id', 'Auth::user()->id')->first();
        //$offres = DB::table('offres')->where('user_id', '=', 'Auth::user()->id')->get();
        //$offres = $offre->user->offres;


        return view('user.useroffre', compact('offres', 'offre'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function edit(Bien $bien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bien $bien)
    {
        //
    }
    public function delete($id)
    {
        $offre = offre::findOrFail($id);
        $offre->delete($id);
        session()->flash('message', 'Offre Supprimé avec succes!!!');

        return redirect('/offres');
    }

    public function deleteuser($id)
    {
        $utilisateur = Utilisateur::findOrFail($id);
        $utilisateur->delete($id);
        session()->flash('message1', 'Utilisateur Supprimé avec succes!!!');

        return redirect('/clients');
    }

    public function update($id)
    {
        //dd("toto");
        $offres = DB::table('offres')->where('id', $id)->update(array('Publier' => 1));
        Alert::success('', 'Offre activé avec succès!')->persistent("Ok");
        session()->flash('message', 'Offre activé avec succès!');
        return redirect('/offres');
    }

    public function message()
    {
        $messages = message::all();

        return view('Admin/messages', compact('messages'));
    }

    public function deletemsg($id)
    {
        $message = message::findOrFail($id);
        $message->delete($id);
        session()->flash('message2', 'Message Supprimé avec succes!!!');
        return redirect('/messages');
    }

    public function statistique()
    {
        $offres = Offre::where('Publier', '=', 0)->count();
        $offre = Offre::where('Publier', '=', 1)->count();

        $test1 = Offre::where('IdTypeBien', '=', 1)->count();
        $test2 = Offre::where('IdTypeBien', '=', 2)->count();
        $test3 = Offre::where('IdTypeBien', '=', 3)->count();
        //dd($offres);
        $pie_chart = Charts::create('pie', 'highcharts')
            ->title('Pie Chart Demo')
            ->labels(['Offres non activées', 'Offres activées'])
            ->values([$offres, $offre])
            ->dimensions(1000, 500)
            ->responsive(true);
        return view('Admin/statistique', compact('pie_chart', 'offres', 'offre', 'test1', 'test2', 'test3'));
    }
    public function statistique1()
    {

        $offres = Offre::where('Publier', '=', 0)->count();
        $offre = Offre::where('Publier', '=', 1)->count();

        return view('Admin/statistique1', compact('offres', 'offre'));
    }
    public function statistique2()
    {
        $test1 = Offre::where('IdTypeOffre', '=', 1)->count();
        $test2 = Offre::where('IdTypeOffre', '=', 2)->count();

        return view('Admin/statistique2', compact('test1', 'test2'));
    }


    public function rechercher(Request $request)
    {
        dd("toto");
        if ($request->isMethod('post')) {
            dd($request->all());
            $typeoffre = $request->input('typeoffre');
            $typebien = $request->input('typebien');
            //print_r(explode("-", $typebien));
            /*$nbrechambre = $request->input('nbrechambre');
            $toilette = $request->input('toilette');
            $ville = $request->input('ville');
            $prix1 = $request->input('prix1');
            $prix2 = $request->input('prix2');

            dd($request->all());
            */
            $offres = Offre::paginate(6);

            $images = Image::get();


            $offres = DB::table('offres')
                ->join('type_offres', 'type_offres.id', 'offres.IdTypeOffre')
                ->where('offres.IdTypeOffre', $typeoffre)
                ->where('offres.IdTypeBien', $typebien)
                ->get();

            return view('/', compact('offres', 'images'));
        }
    }
}

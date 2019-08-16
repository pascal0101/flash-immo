<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Controllers;
use App\Http\Requests;
use App\Offre;
use App\Ville;
use App\TypeBien;
use App\TypeOffre;
use App\User;
use App\Image;
use App\Quartier;
use App\Utilisateur;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ville = ville::all(['id', 'NomVille']);
        $typebien = typebien::all(['id', 'LibelleTypeBien']);
        $typeoffre = TypeOffre::all(['id', 'LibelleTypeOffre']);
        //return View('pages.Inscription', compact(['pay', $pay], ['nationalite', $nationalite], ['cycle', $cycle], ['filiere', $filiere]));
        return view('User/offre', compact(['ville', $ville], ['typeoffre', $typeoffre], ['typebien', $typebien]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offres()
    {
        //$offre =  Offre::findOrFail($id);

        $offres = Offre::get();
        //$images = image::all();
        //$images = image::all();
        $images = Image::get();
        //$images = DB::table('images')->join('offres', 'images.offre_id', '=', 'offres.id')->where('offre_id', '=', 'offres.id')->get();

        return view('user/acceuil', compact('offres', 'images'));
    }

    public function acceuil()
    {
        $offres = Offre::get();

        $images = Image::get();

        return view('/welcome', compact('offres', 'images'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->isMethod('post')) {

            $offre = new offre();

            $offre->titre = $request->input('titre');
            $offre->IdTypeOffre = $request->input('typeoffre');
            $offre->IdTypeBien = $request->input('typebien');
            $offre->prix = $request->input('prix');
            $offre->surface = $request->input('surface');
            $offre->NombreChambre = $request->input('nbrechambre');
            $offre->adresse = $request->input('adresse');
            $offre->IdVille = $request->input('ville');
            $offre->description = $request->input('description');
            $offre->salon = $request->input('salon');
            $offre->balcon = $request->input('balcon');
            $offre->Longitude = $request->input('Longitude');
            $offre->Latitude = $request->input('Latitude');
            $offre->wcdouche = $request->input('wcdouche');
            $offre->garage = $request->input('garage');
            $offre->meuble = $request->input('meuble');
            $offre->cuisine = $request->input('cuisine');
            $offre->email = $request->input('email');
            $offre->Numero1 = $request->input('num1');
            $offre->Numero2 = $request->input('num2');
            $offre->user_id = Auth::user()->id;

            //dd($offre);

            $offre->save();

            if ($request->hasFile('file')) {
                foreach ($request->file as $file) {
                    $filename = $file->getClientOriginalName();
                    //print_r($filename);
                    //$filesize = $file->getClientSize();
                    $file->move('images', $filename);

                    $image = new image();

                    $image->image_path = "/images/$filename";

                    $image->offre_id = $offre->id;

                    // dd($request->file);

                    $image->save();
                }

                // return "ok";
            }
        }
        $notification = array(
            'message' => 'Offre crée avec succès!',
            'alert-type' => 'success'
        );
        //session()->flash('message', 'Offre crée avec succès!!!');
        return redirect('/offre')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$offres = offre::all()->where('id', $id);
        $images = image::all()->where('offre_id', $id);
        $ville = Ville::all();

        $offre =  Offre::findOrFail($id);
        //$offre = DB::table('offres')->join('villes', 'offres.id', '=', 'villes.id')->first();

        return view('user.detail', compact('offre', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function edit(Offres $offres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offres $offres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offres $offres)
    {
        //
    }

    public function mesoffres()
    {
        $utilisateurs = Utilisateur::all();
        //$images = image::all()->where('offre_id', $id);
        //$user =  User::findOrFail($id);
        //$utilisateurs = DB::table('utilisateurs')->where('user_id', 'Auth::user()->id')->first();
        //$offres = DB::table('offres')->where('user_id', '=', 'Auth::user()->id')->get();
        $offres = Auth::user()->offres;

        return view('user.mesoffres', compact('offres', 'utilisateurs'));
    }

    public function delete($id)
    {
        $offre = offre::findOrFail($id);
        $offre->delete($id);
        //session()->flash('message', 'Offre Supprimé avec succes!!!');
        $notification = array(
            'message' => 'Offre Supprimé avec succes!',
            'alert-type' => 'info'
        );
        return redirect('/mesoffres')->with($notification);
    }
}

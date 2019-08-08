<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Controllers;
use App\Http\Requests;
use App\Offre;
use App\Ville;
use App\TypeBien;
use App\TypeOffre;
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
    public function create()
    {
        //
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
            $offre->CordGPS = $request->input('longitude');
            $offre->wcdouche = $request->input('wcdouche');
            $offre->garage = $request->input('garage');
            $offre->meuble = $request->input('meuble');
            $offre->cuisine = $request->input('cuisine');
            $offre->email = $request->input('email');
            $offre->Numero1 = $request->input('num1');
            $offre->Numero2 = $request->input('num2');

            $offre->save();

            if ($request->hasFile('file')) {
                foreach ($request->file as $file) {
                    $filename = $file->getClientOriginalName();
                    //print_r($filename);
                    //$filesize = $file->getClientSize();
                    $file->storeAs('public/upload', $filename);

                    $image = new image();

                    $image->image_path = $filename;

                    $image->offre_id = $offre->id;

                    // dd($request->file);

                    $image->save();
                }

                // return "ok";
            }
        }
        session()->flash('message', 'Offre crée avec succès!!!');
        return redirect('/offre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function show(Offres $offres)
    {
        //
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

    function upload(Request $request)
    {
        $image_code = '';
        $images = $request->file('file');
        foreach ($images as $image) {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $image_code .= '<div class="col-md-3" style="margin-bottom:24px;"><img src="/images/' . $new_name . '" class="img-thumbnail" /></div>';
        }

        $output = array(
            'success'  => 'Images uploaded successfully',
            'image'   => $image_code
        );

        return response()->json($output);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Http\UploadedFile;
use View;
use Illuminate\Http\Controllers;
use App\Offre;
use App\Ville;
use App\TypeBien;
use App\TypeOffre;
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
            $offre->typeoffre = $request->input('typeoffre');
            $offre->typebien = $request->input('typebien');
            $offre->prix = $request->input('prix');
            $offre->surface = $request->input('surface');
            $offre->nbrechambre = $request->input('nbrechambre');
            $offre->adresse = $request->input('adresse');
            $offre->ville = $request->input('ville');
            $offre->description = $request->input('description');
            $offre->salon = $request->input('salon');
            $offre->balcon = $request->input('balcon');
            $offre->longitude = $request->input('longitude');
            $offre->latitude = $request->input('latitude');
            $offre->wcdouche = $request->input('wcdouche');
            $offre->garage = $request->input('garage');
            $offre->meuble = $request->input('meuble');
            $offre->cuisine = $request->input('cuisine');
            $offre->email = $request->input('email');
            $offre->num1 = $request->input('num1');
            $offre->num2 = $request->input('num2');


            dd($offre);

            $offre->save();
        }
        //flash('bien ajouté')->success();
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

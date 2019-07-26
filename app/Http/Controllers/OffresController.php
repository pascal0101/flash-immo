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
        //
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

        if($request->isMethod('post')){

        $offre = new offre();

        $offre ->titre =$request->input('titre');
        $offre->typeoffre=$request->input('typeoffre');
        $offre ->typebien = $request->input('typebien');
        $offre ->prix = $request->input('prix');
        $offre ->surface = $request->input('surface');
        $offre ->nombrepiece =$request->input('nombrepiece');
        $offre->etage=$request->input('etage');
        $offre ->image = $request->input('image');
        $offre ->adresse = $request->input('adresse');
        $offre ->ville = $request->input('ville');
        $offre ->quartier =$request->input('quartier');
        $offre->description=$request->input('description');
        $offre ->etat = $request->input('etat');
        $offre ->agence =$request->input('agence');
        $offre->wcdouche=$request->input('wcdouche');
        $offre ->garage = $request->input('garage');
        $offre ->meuble = $request->input('meuble');
        $offre ->cuisine = $request->input('cuisine');
        $offre ->nom = $request->input('nom');
        $offre ->email = $request->input('email');
        $offre ->numtelephone = $request->input('numtelephone');

         dd($offre);

         $offre->save();
        }
       //flash('bien ajouté')->success();
       return redirect('/');
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
}

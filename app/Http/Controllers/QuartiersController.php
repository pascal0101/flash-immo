<?php

namespace App\Http\Controllers;

use App\Quartier;
use App\Ville;
use Illuminate\Http\Request;
use App\Http\Requests\VilleRequest;


class QuartiersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = ville::all();

        $quartiers = quartier::all();

        return view('admin.quartier')->withQuartiers($quartiers);
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

            $quartier = new quartier();
            $quartier->NomQuartier = $request->input('nomquartier');
            $quartier->IdVille = $request->input('nomville');
            dd($quartier);
            $quartier->save();
        }
        session()->flash('message', 'Quartier enregistré avec succès!!!');
        return redirect('/Quartier');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quartiers  $quartiers
     * @return \Illuminate\Http\Response
     */
    public function show(Quartiers $quartiers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quartiers  $quartiers
     * @return \Illuminate\Http\Response
     */
    public function edit(Quartiers $quartiers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quartiers  $quartiers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quartiers $quartiers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quartiers  $quartiers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quartiers $quartiers)
    {
        //
    }
    public function delete($id)
    {
        $quartier = quartier::findOrFail($id);
        $quartier->delete($id);
        session()->flash('message1', 'Quartier Supprimé avec succes!!!');
        return redirect('/quartier');
    }
}

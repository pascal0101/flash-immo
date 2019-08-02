<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Ville;

class VillesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = ville::all();

        return view('admin.ville')->withVilles($villes);
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

            $ville = new ville();

            $ville->NomVille = $request->input('nomville');

            $ville->save();
        }
        session()->flash('message', 'Ville enregistré avec succès!!!');
        return redirect('/ville');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function show(Villes $villes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function edit(Villes $villes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Villes $villes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Villes  $villes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Villes $villes)
    {
        //
    }

    public function delete($id)
    {

        $ville = ville::findOrFail($id);
        $ville->delete($id);
        session()->flash('message1', 'Ville Supprimé avec succes!!!');
        return redirect('/ville');
    }
}

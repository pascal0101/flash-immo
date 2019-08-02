<?php

namespace App\Http\Controllers;

use App\TypeOffre;
use Illuminate\Http\Request;

class TypeOffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeoffres = typeoffre::all();

        return view('admin.typeoffre')->withTypeoffres($typeoffres);
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

            $typeoffre = new typeoffre();

            $typeoffre->LibelleTypeOffre = $request->input('typeoffre');

            $typeoffre->save();
        }
        session()->flash('message', 'Type offre enregistré avec succès!!!');
        return redirect('/typeoffre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeOffre  $typeOffre
     * @return \Illuminate\Http\Response
     */
    public function show(TypeOffre $typeOffre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeOffre  $typeOffre
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeOffre $typeOffre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeOffre  $typeOffre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeOffre $typeOffre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeOffre  $typeOffre
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeOffre $typeOffre)
    {
        //
    }
    public function delete($id)
    {
        $typeoffre = typeoffre::findOrFail($id);
        $typeoffre->delete($id);
        session()->flash('message1', 'Type offre Supprimé avec succes!!!');
        return redirect('/typeoffre');
    }
}

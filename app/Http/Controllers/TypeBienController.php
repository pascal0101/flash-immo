<?php

namespace App\Http\Controllers;

use App\TypeBien;
use Illuminate\Http\Request;

class TypeBienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typebiens = TypeBien::all();

        return view('admin.typebien')->withTypebiens($typebiens);
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

            $typebien = new typebien();

            $typebien->LibelleTypeBien = $request->input('typebien');

            $typebien->save();
        }
        session()->flash('message', 'Type de Bien enregistré avec succès!!!');
        return redirect('/typebien');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeBien  $typeBien
     * @return \Illuminate\Http\Response
     */
    public function show(TypeBien $typeBien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeBien  $typeBien
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeBien $typeBien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeBien  $typeBien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeBien $typeBien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeBien  $typeBien
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeBien $typeBien)
    {
        //
    }
    public function delete($id)
    {
        $typebien = typebien::findOrFail($id);
        $typebien->delete($id);
        session()->flash('message1', 'Type de Bien Supprimé avec succes!!!');
        return redirect('/typebien');
    }
}

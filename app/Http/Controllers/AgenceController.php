<?php

namespace App\Http\Controllers;

use App\Agence;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User/agence');
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

            $agence = new agence();

            $agence->NomAgence = $request->input('nomagence');
            $agence->NIF = $request->input('nif');
            $agence->Description = $request->input('description');
            $agence->Contact = $request->input('contact');
            $agence->Email = $request->input('email');

            if ($request->hasFile('logo')) {
                $image = $request->file('logo');
                $image_ext = $image->getClientOriginalExtension();
                $new_image_name = rand(123456, 999999) . "." . $image_ext;
                $destination_path = public_path('/logo');
                $image->move($destination_path, $new_image_name);
                $agence->Logo =  $new_image_name;
            }

            //dd($agence);

            $agence->save();
        }
        session()->flash('message', 'Agence crée avec succès!!!');
        return redirect('/agence');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AgenceImmobiliere  $agenceImmobiliere
     * @return \Illuminate\Http\Response
     */
    public function show(AgenceImmobiliere $agenceImmobiliere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AgenceImmobiliere  $agenceImmobiliere
     * @return \Illuminate\Http\Response
     */
    public function edit(AgenceImmobiliere $agenceImmobiliere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AgenceImmobiliere  $agenceImmobiliere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AgenceImmobiliere $agenceImmobiliere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AgenceImmobiliere  $agenceImmobiliere
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgenceImmobiliere $agenceImmobiliere)
    {
        //
    }
}

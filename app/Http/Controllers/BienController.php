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
use Illuminate\Http\Request;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offres()
    {
        $offres = offre::all();
        $typebien = typebien::all();
        return view('Admin/offres', compact('offres', 'typebien'));
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
        $images = image::all()->where('offre_id', $id);
        $ville = Ville::all();

        $offre =  Offre::findOrFail($id);
        //$offre = DB::table('offres')->join('villes', 'offres.id', '=', 'villes.id')->first();

        return view('user.voir', compact('offre', 'images'));
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
        session()->flash('message', 'Offre activé avec succès!!!');
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

        return view('Admin/statistique');
    }
}

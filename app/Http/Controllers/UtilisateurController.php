<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Session;
use attempt;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User/Utilisateur');
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

            $utilisateur = new utilisateur();

            $utilisateur->Nom = $request->input('nom');
            $utilisateur->Prenom = $request->input('prenom');
            $utilisateur->Sexe = $request->input('sexe');
            $utilisateur->NumeroTel = $request->input('numtel');
            $utilisateur->Email = $request->input('email');
            $utilisateur->NumCIN = $request->input('numerocin');
            $utilisateur->Login = $request->input('login');
            $utilisateur->Password = $request->input('password');

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $image_ext = $image->getClientOriginalExtension();
                $new_image_name = rand(123456, 999999) . "." . $image_ext;
                $destination_path = public_path('/profil');
                $image->move($destination_path, $new_image_name);

                $utilisateur->Photo =  $new_image_name;
            }

            if ($request->hasFile('photocin')) {
                $imagecin = $request->file('photocin');
                $image_ext = $imagecin->getClientOriginalExtension();
                $image_name = rand(123456, 999999) . "." . $image_ext;
                $destination_path = public_path('/CIN');
                $imagecin->move($destination_path, $image_name);

                $utilisateur->PhotoCIN =  $image_name;
            }


            $user = new user();


            $user->name = $request->input('nom');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->remember_token = Null;
            $user->save();
            //dd($user);
            $utilisateur->user_id = $user->id;

            $utilisateur->save();
        }
        session()->flash('message', 'Compte crée avec succès!!!');
        return redirect('/utilisateur');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        //
    }
}

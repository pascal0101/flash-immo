<?php

namespace App\Http\Controllers;

use App\Offre;
use App\Utilisateur;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offre = Offre::all();
        $utilisateur = Utilisateur::all();

        return view('Admin/acceuil', compact('offre', 'utilisateur'));
    }
}

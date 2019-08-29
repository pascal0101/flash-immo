<?php

namespace App\Http\Controllers;

use App\Favoris;
use App\Offre;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::all();
        return view('user/test6', compact('offres'));
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

        $user = Auth::user();
        $like = new favoris();
        $like->like = 1;
        $like->user_id = $user->id;
        $like->offre_id = 1;
        $like->save();
        return "ok";
    }

    public function favoris($id)
    {
        $user = Auth::user();
        $favoris = new favoris();
        $offre = offre::findOrFail($id);
        $favoris->user_id = $user->id;
        $favoris->offre_id = $offre->id;
        $favoris->save();

        $offres = Offre::all();
        return view('user/test6', compact('offres'));
        //$offre = DB::table('offres')->where('id', $id)->update(array('like' => 1)); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function show(Favoris $favoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function edit(Favoris $favoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favoris $favoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favoris  $favoris
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favoris $favoris)
    {
        //
    }
}

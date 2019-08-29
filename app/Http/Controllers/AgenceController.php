<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
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
    public function agences()
    {
        $agences = agence::paginate(10);
        return view('User/lesagences', compact('agences'));
    }

    public function recherche(Request $request)
    {
        // $agences = agence::all();
        $q = $request->input('q');
        //$agences = Agence::where('NomAgence', $q)->get();
        $agences = DB::table('agences')
            ->where('agences.NomAgence', $q)
            ->get();

        //if (count($agences) > 0)
        return view('User/lesagences', compact('agences'));
        //else return view('User/lesagences')->withMessage('No Details found. Try to search again !');
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
            $agence->Contact1 = $request->input('contact1');
            $agence->Contact2 = $request->input('contact2');
            $agence->SiteWeb = $request->input('siteweb');
            $agence->Adresse = $request->input('adresse');
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
        $notification = array(
            'message' => 'Agence crée avec succès!',
            'alert-type' => 'success'
        );

        //session()->flash('message', 'Agence crée avec succès!!!');
        return redirect('/agence')->with($notification);;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AgenceImmobiliere  $agenceImmobiliere
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $agences =  Agence::findOrFail($id);

        return view('user.detailagence', compact('agences'));
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

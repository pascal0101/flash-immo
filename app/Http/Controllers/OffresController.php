<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\OffreFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Controllers;
use App\Http\Requests;
use App\Offre;
use App\Ville;
use App\TypeBien;
use App\TypeOffre;
use App\User;
use App\Image;
use App\Quartier;
use App\Utilisateur;


class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ville = ville::all(['id', 'NomVille']);
        $typebien = typebien::all(['id', 'LibelleTypeBien']);
        $typeoffre = TypeOffre::all(['id', 'LibelleTypeOffre']);
        //return View('pages.Inscription', compact(['pay', $pay], ['nationalite', $nationalite], ['cycle', $cycle], ['filiere', $filiere]));
        return view('User/offre', compact(['ville', $ville], ['typeoffre', $typeoffre], ['typebien', $typebien]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function offres()
    {

        $offres = Offre::paginate(6);

        $images = Image::get();
        //$images = DB::table('images')->join('offres', 'images.offre_id', '=', 'offres.id')->where('offre_id', '=', 'offres.id')->get();

        return view('user/acceuil', compact('offres', 'images'));
    }

    public function acceuil(Request $request)
    {

        $offres = Offre::paginate(6);

        $images = Image::get();

        return view('welcome', compact('offres', 'images'));
    }

    public function rechercher(Request $request)
    {
        if ($request->isMethod('post')) {
            $typebien = $request->input('typebien');;
            $typeoffre = $request->input('typeoffre');
            $nbrechambre = $request->input('nbrechambre');
            $toilette = $request->input('toilette');
            $ville = $request->input('ville');
            $prix1 = $request->input('prix1');
            $prix2 = $request->input('prix2');
            $offres = offre::where('IdTypeBien', '=', $typebien)
                ->orwhere('IdTypeOffre', '=', $typeoffre)
                ->orwhere('NombreChambre', '=', $nbrechambre)
                ->orwhere('WcDouche', '=', $toilette)
                ->where('IdVille', '=', $ville)
                ->whereBetween('Prix', [$prix1, $prix2])
                ->paginate(6);
            return view('welcome', compact('offres', 'images'));
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OffreFormRequest $request)
    {
        if ($request->isMethod('post')) {
            $offre = new offre();
            $offre->titre = $request->input('titre');
            $offre->IdTypeOffre = $request->input('typeoffre');
            $offre->IdTypeBien = $request->input('typebien');
            $offre->prix = $request->input('prix');
            $offre->surface = $request->input('surface');
            $offre->NombreChambre = $request->input('nbrechambre');
            $offre->adresse = $request->input('adresse');
            $offre->IdVille = $request->input('ville');
            $offre->description = $request->input('description');
            $offre->salon = $request->input('salon');
            $offre->balcon = $request->input('balcon');
            $offre->Longitude = $request->input('Longitude');
            $offre->Latitude = $request->input('Latitude');
            $offre->wcdouche = $request->input('wcdouche');
            $offre->garage = $request->input('garage');
            $offre->meuble = $request->input('meuble');
            $offre->cuisine = $request->input('cuisine');
            $offre->email = $request->input('email');
            $offre->Telephone = $request->input('telephone');
            $offre->user_id = Auth::user()->id;
            $offre->save();
            if ($request->hasFile('file')) {
                foreach ($request->file as $file) {
                    $filename = $file->getClientOriginalName();
                    $file->move('images', $filename);

                    $image = new image();

                    $image->image_path = "/images/$filename";

                    $image->offre_id = $offre->id;

                    $image->save();
                }
            }
        }
        $notification = array(
            'message' => 'Offre crée avec succès!',
            'alert-type' => 'success'
        );
        //session()->flash('message', 'Offre crée avec succès!!!');
        return redirect('/offre')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $offres = offre::all();
        $images = image::all()->where('offre_id', $id);
        $ville = Ville::all();
        $offre =  Offre::findOrFail($id);
        return view('user.detail', compact('offre', 'images', 'offres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $offre = offre::findOrFail($id);
         $ville = ville::all(['id', 'NomVille']);
        $typebien = typebien::all(['id', 'LibelleTypeBien']);
        $typeoffre = TypeOffre::all(['id', 'LibelleTypeOffre']);
            
        return view('user.modifieroffre',compact(['ville', $ville],['offre', $offre], ['typeoffre', $typeoffre], ['typebien', $typebien]));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $offre = offre::findOrFail($id);

       //$images = DB::table('images')->where('offre_id', '=', $id)->get();

        

        //$typebien->delete($id);
         $offre = DB::table('offres')->where('id',$id)->update(array(

            'titre' => $request->input('titre'),
            'IdTypeOffre' => $request->input('typeoffre'),
            'IdTypeBien' => $request->input('typebien'),
            'prix' => $request->input('prix'),
            'surface' => $request->input('surface'),
            'NombreChambre' => $request->input('nbrechambre'),
            'adresse' => $request->input('adresse'),
            'IdVille' => $request->input('ville'),
            'description' => $request->input('description'),
            'salon' => $request->input('salon'),
            'balcon' => $request->input('balcon'),
            'Longitude' => $request->input('Longitude'),
           'Latitude' => $request->input('Latitude'),
            'wcdouche' => $request->input('wcdouche'),
           'garage' => $request->input('garage'),
            'meuble' => $request->input('meuble'),
            'cuisine' => $request->input('cuisine'),
            'email' => $request->input('email'),
            'Telephone' => $request->input('telephone')

               

            ));

            
            if ($request->hasFile('file')) {
                foreach ($request->file as $file) {
                    $filename = $file->getClientOriginalName();
                    $file->move('images', $filename);

                    $image = new image();

                    $image->image_path = "/images/$filename";

                    $image->offre_id = $id;

                    $image->save();
                }
            }
             DB::table('images')->where('offre_id', '=', $id)->delete($id);
             //session()->flash('message', ' Offre modifié avec succès!'); 
             $notification = array(
            'message' => 'Offre modifié avec succès!',
            'alert-type' => 'success'
            );   
            return redirect('/mesoffres')->with($notification);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offres  $offres
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offres $offres)
    { }

    public function mesoffres()
    {
        $utilisateurs = Utilisateur::all();

        $offres = Auth::user()->offres;

        return view('user.mesoffres', compact('offres', 'utilisateurs'));
    }

    public function delete($id)
    {
        $offre = offre::findOrFail($id);
        $offre->delete($id);
        $notification = array(
            'message' => 'Offre Supprimé avec succes!',
            'alert-type' => 'info'
        );
        return redirect('/mesoffres')->with($notification);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\AgenceFormRequest;
use App\Agence;
use App\Offre;
use App\Image;
use App\TypeBien;
use App\TypeOffre;
use App\Ville;
use App\User;
use App\Utilisateur;
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
    public function store(AgenceFormRequest $request)
    {
        if ($request->isMethod('post')) {

            $agence = new agence();

            $agence->NomAgence = $request->input('nomagence');
            $agence->NIF = $request->input('nif');
            $agence->Description = $request->input('description');
            $agence->telephone = $request->input('telephone');
            $agence->SiteWeb = $request->input('siteweb');
            $agence->Adresse = $request->input('adresse');
            $agence->Email = $request->input('email');
            $agence->password = bcrypt($request->input('password'));

            if ($request->hasFile('logo')) {
                $image = $request->file('logo');
                $image_ext = $image->getClientOriginalExtension();
                $new_image_name = rand(123456, 999999) . "." . $image_ext;
                $destination_path = public_path('/profil');
                $image->move($destination_path, $new_image_name);
                $agence->Logo =  $new_image_name;
            }

            //dd($agence);
            $user = new user();


            $user->name = $request->input('nomagence');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->avatar = $new_image_name;
            $user->remember_token = Null;
            $user->save();
            //dd($user);
            $agence->user_id = $user->id;

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
        $images = Image::get();
        //$offres = DB::table('offres')
        //->join('users', 'offres.user_id', 'users.id')
        //->join('images', 'offres.id', 'images.offre_id')
        // ->where('users.id', $id)
        //->get();

        $offres = Offre::where('user_id', '=',  $id)->get();

        //$images = DB::table('images')->join('offres', 'images.offre_id', '=', 'offres.id')->where('offre_id', '=', 'offres.id')->get();
        return view('user.detailagence', compact('agences', 'offres', 'images'));
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

    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('agences')
                    ->where('NomAgence', 'like', '%' . $query . '%')
                    ->get();
            } else {
                $data = DB::table('agences')->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <!-- Agent box 2start -->
                <div class="agent-2 clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-4 agent-theme-2">
                        <img src="/profil/' . $row->Logo . '" alt="Logo" class="img-responsive">
                        <!-- social list -->

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 agent-content">

                        <h3>
                            <a href="' . route('detailagence', $row->id) . '" style="color: red">' . $row->NomAgence . '</a>
                        </h3>
                        <ul>
                            <li>
                                <strong>Adresse:</strong><a href="#"> ' . $row->Adresse . '</a>
                            </li>
                            <li>
                                <strong>Email:</strong><a href="#"> ' . $row->Email . '</a>
                            </li>
                            <li>
                                <strong>Contacts:</strong><a href="#"> ' . $row->telephone . '</a>
                            </li>
                            <li>
                                <strong>Site Web:</strong><a href="#" style="color: blue"> ' . $row->SiteWeb . '</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Agent box 2 end -->
            </div>
        ';
                }
            } else {
                $output = '
       <tr>
        <td align="center" colspan="5">Aucune donnée disponible</td>
       </tr>
       ';
            }
            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }
}

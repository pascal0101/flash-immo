<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Offre;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return new ContactMessage('pascal', 'pascaldaf2016@gmail.com', 'Merci');
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
    public function store(ContactRequest $request)
    {
        //dd($request->all());
        //$user = user::findOrFail($id);

        //$offres = DB::table('offres')->first();
        //$offre =  Offre::findOrFail($id);
        //dd($request->propemail);

        $message = new Message;
        $message->Nom = $request->nom;
        $message->Email = $request->email;
        $message->Objet = $request->objet;
        $message->Numero = $request->numero;
        $message->Contenu = $request->msg;

        $message->save();

        $mailable = new ContactMessage($message);
        Mail::to($request->propemail)->send($mailable);
        session()->flash('message', 'votre message a été envoyer avec succès!!!');
        return redirect()->back();
    }



    public function envoyer(Request $request)
    {

        dd($request->all());
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}

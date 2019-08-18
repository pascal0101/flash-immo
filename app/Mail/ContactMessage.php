<?php

namespace App\Mail;

use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    //ublic $msg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

        // $this->msg = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->markdown('emails.messages')->with([
            'nom' => $request->nom,
            'email' => $request->email,
            'objet' => $request->objet,
            'numero' => $request->numero,
            'msg' => $request->msg
        ]);
    }
}

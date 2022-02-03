<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5',
        ]);

        // Enviar el email
        Mail::to('dmaestre@cifpfbmoll.eu')->queue(new MessageReceived($message));

        // return new MessageReceived($message);

        return '¡Perfecto! Has enviado un email con los datos que has indicado';
    }
}

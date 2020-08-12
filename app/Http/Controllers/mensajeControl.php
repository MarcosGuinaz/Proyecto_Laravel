<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class mensajeControl extends Controller
{
    public function store(){
    	$mensaje = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
      		'contect' => 'required'
    	], [
    		'name.required' => __('I need your name')
    	]);

       Mail::to('quemenlaescuela@gmail.com')->queue(new MensajeRecibido($mensaje));

    	return 'Mensaje Enviado';
    }
}

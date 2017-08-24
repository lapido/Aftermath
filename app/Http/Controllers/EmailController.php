<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\ContactMail;

class EmailController extends Controller
{
    public function send(Request $request){

    }

    public function sendContact(Request $request){
  
    	if ($request->has(['name', 'email', 'comments'])) {
    		$form_inputs = $request->all();
    		Mail::to('afeb535f45-12d375@inbox.mailtrap.io')->send(new ContactMail($form_inputs));

    		 return redirect('/')->with('status', 'Profile updated!');
    	}
    }
}

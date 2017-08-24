<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\EnrollMail;

class EnrollController extends Controller
{
    public function index(){
    	return view('enroll_form');
    }

    public function sendForm(Request $request){
    	$form_inputs = $request->all();
    	print_r($form_inputs);

    	if ($request->has(['name', 'email', 'program', 'radioInline'])) {
    		$form_inputs = $request->all();
    		Mail::to('afeb535f45-12d375@inbox.mailtrap.io')->send(new EnrollMail($form_inputs));

    		 return redirect()->action('EnrollController@index')->with('status', 'Profile updated!');
    	}
    }
}

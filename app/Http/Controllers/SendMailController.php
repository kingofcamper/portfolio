<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;


class SendMailController extends Controller
{
    

	public function send(Request $request){
		$this->validate($request, [
			'contact_name' =>	'required',
			'contact_email' =>	'required|email',
			'contact_message' =>	'required',
		]);

		$data = array(
			'contact_name' => $request->contact_name,
			'contact_message' => $request->contact_message,
			'contact_email' => $request->contact_email
		);

		Mail::to('bilel.belghith123@gmail.com')
		->send(new SendMail($data));
		return Redirect::to(URL::previous() . "#contact")->with('success', 'Thanks for contacting us');
	}

}

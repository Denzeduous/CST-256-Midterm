<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business\SignupVerification;

class SignupController extends Controller {
	public function Signup (Request $request) {

		// Check to make sure that the class code is verified
		if (SignupVerification::Verify ($request->input ('code'))) {
			
			// If so, give a success message.
			return view ('success');
		}
		
		else {
			
			// Else, echo failure and return the correct view.
			return view('failure');
		}
	}
}


<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller

{

	/**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
	public function showRegistration()
	{

		// Set the view attributes.
		$attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
		return view('signup.signup', compact('attributes'));
	}

}
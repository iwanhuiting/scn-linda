<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Processors\RegistrationProcessor;
use Illuminate\Http\Request;
use App\Models\User;

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


    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function storeUser(Request $request)
    {
        // Instantiate a new registration processor and create the user.
        $processor = new RegistrationProcessor();
        $note = $processor->createUser($request);

        // Set the view attributes.
        $attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('signup.signup', compact('attributes'));
    }


}
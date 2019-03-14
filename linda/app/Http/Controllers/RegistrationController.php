<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class homepageController extends Controller

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
		return view('homepage.homepage', compact('attributes'));
	}

}
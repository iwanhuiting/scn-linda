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
	public function showStartPage()
	{

		// Set the view attributes.
		$attributes = [
            'mode' => 'homepage',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
		return view('homepage.startpage', compact('attributes'));
	}

        /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showHomePage()
    {

        // Set the view attributes.
        $attributes = [
            'mode' => 'homepage',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('homepage.homepage', compact('attributes'));
    }

}
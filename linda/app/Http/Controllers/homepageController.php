<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Catagory;

class homepageController extends Controller

{

	/**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
	public function showStartPage()
	{
        // Get the user
        $currentuser = Auth::user();

		// Set the view attributes.
		$attributes = [
            'mode' => 'homepage',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
		return view('homepage.startpage', compact('currentuser', 'attributes'));
	}

        /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showHomePage(Catagory $catagory)
    {
        // Get all the catagories.
        $catagories = Catagory::orderBy('created_at', 'desc')->take(6)->get();

        // Get the user
        $currentuser = Auth::user();

        // Set the view attributes.
        $attributes = [
            'mode' => 'homepage',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('homepage.homepage', compact('currentuser', 'catagories', 'attributes'));
    }

}
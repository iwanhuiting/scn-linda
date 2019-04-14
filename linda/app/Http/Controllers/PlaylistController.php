<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Catagory;

class PlaylistController extends Controller

{

	/**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
	public function showCreatePlaylist()
	{
        // Get the user
        $currentuser = Auth::user();



		// Set the view attributes.
		$attributes = [
            'mode' => 'homepage',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
		return view('playlist.create', compact('currentuser', 'attributes'));
	}

}
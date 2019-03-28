<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class VideoController extends Controller

{

	/**
     * Show the video page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
	public function showVideo()
	{
        // Get the user
        $currentuser = Auth::user();

		// Set the view attributes.
		$attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
		return view('video.videopage', compact('currentuser', 'attributes'));
	}


}
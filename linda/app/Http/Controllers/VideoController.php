<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Catagory;
use App\Models\Video;

class VideoController extends Controller

{

	/**
     * Show the video page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
	public function showVideo(Video $video, Catagory $catagory, $id)
	{
        // Get the user
        $currentuser = Auth::user();

        // Get the videos beloning to the id.
        $video = Video::where('id', $id)
               ->orderBy('created_at', 'desc')
               ->get();

        // Get the videos to reccomend.
        $reccomendedvideos = Video::where('user_id', $video['0']->user_id)
               ->orderBy('created_at', 'desc')
               ->get();

		// Set the view attributes.
		$attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
		return view('video.videopage', compact('currentuser', 'attributes', 'video', 'reccomendedvideos'));
	}

    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showCreateVideo()
    {

        // Set the view attributes.
        $attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('video.createvideo', compact('attributes'));
    }


}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Processors\VideoProcessor;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Video;
use App\Models\User;

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

        $newviews = $video['0']->views + 1;

        // update the video views count       
        DB::table('video')
            ->where('id', $id)
            ->update(['views' => $newviews]);

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

    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function storeVideo(Request $request, $id)
    {
        $views = '0';

        if(Input::hasFile('thumbnail')){

            $file = Input::file('thumbnail');
            $thumbnailname = time().'.'.$file->getClientOriginalName();
            $file->move('images', $thumbnailname);

        }

        if(Input::hasFile('video')){

            $file = Input::file('video');
            $videoname = time().'.'.$file->getClientOriginalName();
            $file->move('videos', $videoname);

            // Instantiate a new registration processor and create the user.
            $processor = new VideoProcessor();
            $catagory = $processor->storeVideo($request, $thumbnailname, $videoname, $views, $id);
            
        }

        // Set the view attributes.
        $attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('video.createvideo', compact('attributes'));
    }


}
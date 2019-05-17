<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Processors\VideoProcessor;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Comment;
use App\Models\Video;
use App\Models\User;

class VideoController extends Controller

{

	/**
     * Show the video page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
	public function showVideo(Video $video, Catagory $catagory, User $user, $id)
	{
        // Get the user.
        $currentuser = Auth::user();

        // Get the videos beloning to the id.
        $video = Video::where('id', $id)
               ->get();

        // Get the videos to reccomend.
        $reccomendedvideos = Video::where([['catagory_id', $video['0']->catagory_id],  ['id','!=',$id]])
               ->orderBy('created_at', 'desc')
               ->take(6)
               ->get();


        // Get the videos to reccomend.
        $comments = Comment::where('video_id', $id)
               ->orderBy('created_at', 'desc')
               ->get();

        // Get the new amount of views.
        $newviews = $video['0']->views + 1;

        // update the video views count.  
        Video::where('id', $id)
            ->update(['views' => $newviews]);

        // Get the uploader of the video.
        $videocreator = User::where('id' , $video['0']->user_id)->get();

        // Get all the users.
        $users = User::all();

		// Set the view attributes.
		$attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
		return view('video.videopage', compact('currentuser', 'attributes', 'video', 'reccomendedvideos', 'videocreator', 'comments', 'users'));
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
        return redirect()->route('single.catagory', ['id' => $id]);
    }


}
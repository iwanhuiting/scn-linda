<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Processors\VideoProcessor;
use App\Models\Catagory;
use App\Models\Video;
use App\Models\User;


class ChannelController extends Controller

{

    /**
     * Show the user panel
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showChannel(User $user, Video $video, $id)
    {
        // Get the logged in user.
        $currentuser = Auth::user();

        // Get the user belonging to the channel.
        $channelowner = User::where('id' , $id);

        // Get the videos belonging to the channel.
        $videos = Video::where('user_id' , $id)
                ->orderBy('created_at', 'desc')
                ->get();

        // return view.
        return view('channel.channelpage', compact('currentuser', 'channelowner', 'videos'));

    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Video;

class AdminController extends Controller

{

    /**
     * Show the user panel
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showUserPanel(User $user)
    {
        // Get the logged in user.
        $currentuser = Auth::user();

        // Get all the users.
        $users = User::all();


        // return view.
        return view('admin.userpanel.userpanel', compact('currentuser', 'users'));

    }

    public function showVideoPanel(Video $video)
    {
        // Get all the videos.
        $videos = Video::all();

        // return view.
        return view('admin.videopanel.videopanel', compact('videos'));

    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        return view('channel.channelpage', compact('currentuser', 'users'));

    }

}
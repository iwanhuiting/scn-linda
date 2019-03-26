<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller

{

	/**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
	public function showLogin()
	{

		// Set the view attributes.
		$attributes = [
            'mode' => 'login',
            'caption' => 'hier komt nog een caption',
        ];
        
        // return view.
		return view('login.login', compact('attributes'));
	}


    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Auth::logout();
        
        // return view.
        return view('auth.login', compact('attributes'));
    }

}
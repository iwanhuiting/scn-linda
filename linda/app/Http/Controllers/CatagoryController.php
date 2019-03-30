<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Catagory;

class catagoryController extends Controller

{

    /**
     * Show the catagory overview.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showCatagoryOverview(Catagory $catagory)
    {
        // Get all the catagories.
        $catagories = Catagory::all();

        // Get the user
        $currentuser = Auth::user();

        // Set the view attributes.
        $attributes = [
            'mode' => 'catagory.overview',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('admin.catagory.overview', compact('currentuser', 'catagories', 'attributes'));
    }

    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showAddCatagory()
    {

        // Set the view attributes.
        $attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('admin.catagory.addCatagory', compact('attributes'));
    }


    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function storeCatagory(Request $request)
    {
        // Instantiate a new registration processor and create the user.
        $processor = new RegistrationProcessor();
        $note = $processor->createUser($request);

        // Set the view attributes.
        $attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('signup.signup', compact('attributes'));
    }

}
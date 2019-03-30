<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Processors\CatagoryProcessor;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Video;

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

    public function storeCatagory(Request $request) {

            if(Input::hasFile('file')){

                $file = Input::file('file');
                $name = time().'.'.$file->getClientOriginalName();
                $file->move('images', $name);

                // Instantiate a new registration processor and create the user.
                $processor = new CatagoryProcessor();
                $catagory = $processor->createCatagory($request, $name);

            }

        // return view.
        return redirect()->route('homepage');
    }

    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function showSingleCatagory(Catagory $catagory, $id)
    {
        // Get the user
        $currentuser = Auth::user();

        // Get the current catagory
        $catagory = $catagory::find($id);

        // Get the videos belonging to the catagory
        $videos = Video::where('catagory_id', $id)
               ->orderBy('created_at', 'desc')
               ->get();

        // Set the view attributes.
        $attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return view('catagory.singleCatagory', compact('attributes', 'catagory', 'currentuser', 'videos'));
    }


}
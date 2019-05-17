<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Processors\CommentProcessor;
use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Video;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller

{

    /**
     * Show the home page.
     * @param String $id
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Request $request, $id)
    {

        // Instantiate a new registration processor and create the user.
        $processor = new CommentProcessor();
        $catagory = $processor->storeComment($request, $id);
        

        // Set the view attributes.
        $attributes = [
            'mode' => 'registration',
            'caption' => 'hier komt nog een caption',
        ];

        // return view.
        return redirect()->route('video', ['id' => $id]);
    }


}
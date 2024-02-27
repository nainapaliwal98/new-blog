<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function contact(){

        return view('contact');
    }

    public function show_post($id){
        //return view('post')=>with('id',$id);
        return view('post',compact('id'));
    }
    
}




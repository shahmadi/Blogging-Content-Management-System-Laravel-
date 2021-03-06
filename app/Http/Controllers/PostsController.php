<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //


    public function create(){
      return view('admin.posts.create');
    }

    public function store(Request $request){
    	// dd($request->all());

    	$this->validate($request, [
    		'title'=>'required',
    		'featured'=>'required|image',
    		'content'=>'required'
    	]);

    	dd($request->all());
    }


}

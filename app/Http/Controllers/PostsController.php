<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostsController extends Controller
{
    function show($slug)  {
    	return view('dragon', [
    		'post' => Post::where('slug', $slug)->firstOrFail()
    	]);

    }
}

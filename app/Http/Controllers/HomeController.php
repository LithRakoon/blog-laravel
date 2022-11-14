<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       // return view('home.index');

        $posts = Post::with('user')
            ->get();

//        return $posts;

        return view('home.index', compact('posts'));
    }
}

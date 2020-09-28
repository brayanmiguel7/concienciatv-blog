<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $posts = Posts::where('user_id', auth() -> id()) -> get();
        return view('home', compact('posts'));

    }
}

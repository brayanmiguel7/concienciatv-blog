<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class GuestController extends Controller
{

    public function index(){

        $posts = Posts::with('user') -> orderByDesc('created_at') -> orderByDesc('user_id') -> paginate(10);
        return view('welcome', compact('posts'));

    }

    public function show(Posts $postBySlug){

        return view('posts.show', [

            'post' => $postBySlug

        ]);

    }

}

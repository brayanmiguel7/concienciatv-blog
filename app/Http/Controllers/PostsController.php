<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {

        $this -> middleware('auth');

    }

    public function new(){

        return view('posts.new');

    }

    public function save(Request $request){

        $validatedData = $request -> validate([

            'title' => 'required|min:5|max:86|unique:posts',
            'content' => 'required|min:46|max:256'

        ]);

        $post = new Posts();
        $post -> title = $validatedData['title'];
        $post -> content = $validatedData['content'];
        $post -> user_id = auth() -> id();
        $post -> save();

        $status = 'Publicación realizada correctamente.';
        return back()->with(compact('status'));

    }

    public function edit(Posts $post){

        return view('posts.edit', compact('post'));

    }

    public function update(Request $request, Posts $post){

        $validatedData = $request -> validate([

            'title' => 'required|min:5|max:86|unique:posts,id,'.$post -> id,
            'content' => 'required|min:46|max:256'

        ]);


        $post -> title = $validatedData['title'];
        $post -> content = $validatedData['content'];
        $post -> save();

        $status = 'Publicación editada correctamente.';
        return back()->with(compact('status'));

    }


}

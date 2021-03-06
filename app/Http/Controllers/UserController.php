<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(User $user){

        $posts = Posts::where('user_id', $user -> id) -> get();
        return view('users.show', compact('user', 'posts'));

    }

}

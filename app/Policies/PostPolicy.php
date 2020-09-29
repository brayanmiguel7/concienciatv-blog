<?php

namespace App\Policies;

use App\User;
use App\Posts;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Posts $post){

        return $user -> id === $post -> user_id;

    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{

    // Relación entre Posts y Usuarios
    // Relación N -> 1
    public function user(){

        return $this -> belongsTo(User::class);

    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Posts extends Model
{

    // Relación entre Posts y Usuarios
    // Relación N -> 1
    public function user(){

        return $this -> belongsTo(User::class);

    }

    //Mutator para slug
    public function setTitleAttribute($value){

        $this -> attributes['title'] = $value;
        $this -> attributes['slug'] = Str::slug($value);

    }

    public function getUrl(){

        return url('posts/'.$this -> slug.'-'.$this -> id);

    }

}

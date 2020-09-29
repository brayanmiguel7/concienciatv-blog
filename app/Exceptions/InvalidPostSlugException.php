<?php

namespace App\Exceptions;

use Exception;
use App\Posts;
use Throwable;

class InvalidPostSlugException extends Exception{

    private $post;

    public function __construct(Posts $post, $message = '', $code = 0, Throwable $previous = null){

        $this -> post = $post;
        parent::__construct($message, $code, $previous);

    }

    public function render(){

        return redirect($this -> post -> getUrl());

    }

}

?>

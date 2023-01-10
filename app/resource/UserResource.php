<?php

namespace App\Resource;
use Framework\Request\Request;
use Framework\Mariana\Resource;

class UserResource implements Resource{
    public function getAll(Request $request){
        dd("hello world");
    }
}
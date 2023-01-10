<?php

namespace Framework\Request;

class Request{
    private static $instance = null;

    public static function getInstance(): Request{
        if(self::$instance == null){
            self::$instance = new Request();
        }
        return self::$instance;
    }

    public function getPath(): string{
        if(isset($_SERVER["PATH_INFO"])){
            return $_SERVER["PATH_INFO"];
        }
        return "/";
    }
}
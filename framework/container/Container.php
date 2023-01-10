<?php

namespace Framework\Container;

class Container{

    private static $single_containers;

    public static function setSingleton(array $containers = []){
        self::$single_containers = $containers;
    }

}
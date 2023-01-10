<?php

namespace Framework\Route;

use Framework\Route\RouteDao;

class Route{
    private static $routes = [];

    public static function addResource(string $url, array $methods): void{
        self::$routes[] = new RouteDao($url, $methods);
    }

    public static function run(): void{
        dd(self::$routes[0]->getUrl());
    }
}
<?php

namespace Framework\Route;

use Framework\Route\RouteDao;
use Framework\Mariana\Resource;
use Framework\ResourceLoader;
use App;

class Route{
    private static $routes = [];

    public static function addResource(string $url, string $resource): void{
        self::$routes[] = new RouteDao($url, $resource);
    }

    public static function run(): void{

        $resource_loader = new ResourceLoader();
        dd(((new (self::$routes[0]->getResource())())->getAll()));
    }
}
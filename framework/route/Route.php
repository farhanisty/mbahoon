<?php

namespace Framework\Route;

use Framework\Route\RouteDao;
use Framework\Mariana\Resource;
use Framework\ResourceLoader;
use Framework\Request\Request;
use App;

class Route{
    private static $routes = [];

    public static function addResource(string $url, string $resource): void{
        self::$routes[] = new RouteDao($url, $resource);
    }

    public static function run(): void{
        $request = Request::getInstance();

        $is_registred_url = array_filter(self::$routes, function($route) use ( $request ) {
            if($route->getUrl() == $request->getPath()){
                return $route;
            }
        });

        if(count($is_registred_url) !== 1){
            throw new Exception("404");
        }

        $resource = $is_registred_url[0]->getResource();

        $resource_loader = new ResourceLoader($resource);
    }
}
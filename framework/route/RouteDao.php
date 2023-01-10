<?php

namespace Framework\Route;

class RouteDao{
    private $url;
    private $resource;

    public function __construct(string $url,string $resource){
        $this->url = $url;
        $this->resource = $resource;
    }

    public function getUrl(): string{
        return $this->url;
    }

    public function getResource(): string{
        return $this->resource;
    }

}
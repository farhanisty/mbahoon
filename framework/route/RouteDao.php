<?php

namespace Framework\Route;

class RouteDao{
    private $url;
    private $methods;

    public function __construct(string $url,array $methods){
        $this->url = $url;
        $this->method = $methods;
    }

    public function getUrl(): string{
        return $this->url;
    }

    public function getMethods(): array{
        return $this->methods;
    }


}
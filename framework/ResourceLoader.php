<?php

namespace Framework;

class ResourceLoader{

    private $resource = null;

    public function __construct(string $resource){
        $parameters = $this->getAllParams($resource);
        $inject_class = $this->getClassOfParam($parameters);
        dd($inject_class);
    }

    private function getAllParams(string $resource): array{
        $ref = new \ReflectionClass($resource);
        return $ref->getMethod('getAll')->getParameters();
    }

    private function getClassOfParam(array $parameters): array{
        return array_map(function($param){
            
        }, $parameters)
    }

}
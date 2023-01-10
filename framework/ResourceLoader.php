<?php

namespace Framework;

class ResourceLoader{

    public function __construct(Resource $resource){
        $resource->log();
    }

}
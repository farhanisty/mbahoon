<?php

function load(string $path){
    $list_path = scandir($path);
    foreach($list_path as $p){
        if(in_array($p, [".", ".."])){
            continue;
        }

        $fullpath = $path . "/" . $p;

        if(is_dir($fullpath)){
            load($fullpath);
            continue;
        }
        require_once $fullpath;
    }
}
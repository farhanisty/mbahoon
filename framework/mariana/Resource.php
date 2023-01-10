<?php

namespace Framework\Mariana;

interface Resource{
    public function get(): Response;
    public function singleGet($id): Response;
    public function post(): Response;
    public function put($id): Response;
    public function delete(): Response;
}
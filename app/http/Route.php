<?php

use Framework\Route\Route;
use App\Resource\UserResource;

Route::addResource('/', UserResource::class);
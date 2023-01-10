<?php

require_once __DIR__ . "/../../framework/helpers/autoloader.php";

load(__DIR__ . "/../../framework");
load(__DIR__ . "/../");

use Framework\Route\Route;

Route::run();
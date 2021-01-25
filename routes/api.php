<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\PriceController;

$klein->respond('POST', '/api/v1/login', ['App\Http\Controllers\Api\V1\AuthController', 'login']);

$klein->respond('POST', '/api/v1/logout', ['App\Http\Controllers\Api\V1\AuthController', 'logout']);

$klein->respond('POST', '/api/v1/register', ['App\Http\Controllers\Api\V1\AuthController', 'register']);



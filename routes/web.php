<?php

$klein->respond('GET', '/phpinfo', function () {
    return phpinfo();
});

$klein->respond('GET', '/', ['App\Http\Controllers\SiteController', 'siteroot']);

$klein->respond('GET', '/login', ['App\Http\Controllers\SiteController', 'loginPage']);

$klein->respond('GET', '/register', ['App\Http\Controllers\SiteController', 'registerPage']);



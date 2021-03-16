<?php

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);


$router->get('/login-page', [
    'uses' => 'Controller@showLoginPage',
]);
;

$router->get('/resgiter', [
    'uses' => 'Controller@showResgiterPage',
]);

$router->post('/resgiter', [
    'uses' => 'Controller@handleResgiter',
]);


$router->get('/logout', [
    'uses' => 'Controller@handleLogut'
]);


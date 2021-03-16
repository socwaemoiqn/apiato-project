<?php

$router->get('/', [
    'as'   => 'get_main_home_page',
    'uses' => 'Controller@sayWelcome',
]);


$router->get('/login', [
    'uses' => 'Controller@showLoginPage',
]);

$router->post('/handleLogin', [
    'uses' => 'Controller@handleLogin'
]);

$router->get('/logout', [
    'uses' => 'Controller@handleLogut'
]);


$router->get('/dashboard', [
    'uses' => 'Controller@showHomePage',
    'middleware' => [
        'auth:web'
    ]
]);

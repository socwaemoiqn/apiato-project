<?php

/** @var Route $router */
$router->get('/girls/create', [
    'as' => 'web_girls_create',
    'uses'  => 'Controller@create',
    'middleware' => [
      'auth:web',
    ],
]);

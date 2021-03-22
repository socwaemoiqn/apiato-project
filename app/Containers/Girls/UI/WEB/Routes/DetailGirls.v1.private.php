<?php

/** @var Route $router */
$router->get('/girls/detail/{id}', [
    'as' => 'web_girls_details',
    'uses'  => 'Controller@details',
    'middleware' => [
      'auth:web',
    ],
]);

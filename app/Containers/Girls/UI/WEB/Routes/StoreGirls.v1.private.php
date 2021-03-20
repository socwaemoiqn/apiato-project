<?php

/** @var Route $router */
$router->post('girls/store', [
    'as' => 'web_girls_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);

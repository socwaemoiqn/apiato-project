<?php

/** @var Route $router */
$router->post('fans/store', [
    'as' => 'web_girls_storefans',
    'uses'  => 'Controller@storefans',
    'middleware' => [
      'auth:web',
    ],
]);

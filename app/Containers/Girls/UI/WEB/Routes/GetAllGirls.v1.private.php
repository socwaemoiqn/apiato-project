<?php

/** @var Route $router */
$router->get('girls', [
    'as' => 'web_girls_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);

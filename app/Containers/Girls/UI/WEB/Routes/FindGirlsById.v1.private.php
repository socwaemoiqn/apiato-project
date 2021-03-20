<?php

/** @var Route $router */
$router->get('girls/{id}', [
    'as' => 'web_girls_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);

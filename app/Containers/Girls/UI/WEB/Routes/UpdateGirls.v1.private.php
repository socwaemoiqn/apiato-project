<?php

/** @var Route $router */
$router->post('girls/{id}', [
    'as' => 'web_girls_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);

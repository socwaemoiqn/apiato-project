<?php

/** @var Route $router */
$router->get('/girls/{id}/edit', [
    'as' => 'web_girls_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);

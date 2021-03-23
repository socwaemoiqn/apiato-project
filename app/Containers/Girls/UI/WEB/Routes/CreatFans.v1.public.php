<?php

/** @var Route $router */
$router->get('/fans/createfans/{id}', [
    'as' => 'web_girls_createfans',
    'uses'  => 'Controller@createfans',
    'middleware' => [
      'auth:web',
    ],
]);

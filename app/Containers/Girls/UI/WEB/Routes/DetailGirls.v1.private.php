<?php

/** @var Route $router */
$router->get('girl/detail/{id}', [
    'as' => 'web_girls_details',
    'uses'  => 'Controller@details',
    'middleware' => [
      'auth:web',
    ],
]);

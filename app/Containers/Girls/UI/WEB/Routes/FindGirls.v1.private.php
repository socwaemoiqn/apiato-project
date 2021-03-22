<?php

/** @var Route $router */
$router->get('girls/search', [
    'as' => 'web_girls_',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);

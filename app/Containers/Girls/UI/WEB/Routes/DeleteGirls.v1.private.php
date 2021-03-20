<?php

/** @var Route $router */
$router->post('girls/delete/{id}', [
    'as' => 'web_girls_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);

<?php

/** @var Route $router */
$router->get('fans/list/{id}', [
    'as' => 'web_girls_listfans',
    'uses'  => 'Controller@listfans',
    'middleware' => [
      'auth:web',
    ],
]);

<?php

/** @var Route $router */
$router->get('fans/fansindex', [
    'as' => 'web_girls_fansindex',
    'uses'  => 'Controller@fansindex',
    'middleware' => [
      'auth:web',
    ],
]);

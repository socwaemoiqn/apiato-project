<?php

/** @var Route $router */
//edit
$router->get('car/update/{id}', [
    'as' => 'web_car_edit.php',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
$router->PATCH('car/update/{id}', [
  'as' => 'web_car_edit.php',
  'uses'  => 'Controller@update1',
  'middleware' => [
    'auth:web',
  ],
]);
// del car
$router->DELETE('car/delete/{id}', [
  'as' => 'web_car_delete.php',
  'uses'  => 'Controller@destroy',
  'middleware' => [
    'auth:web',
  ],
]);
//search
$router->get('car/search', [
  'as' => 'web_car_search.php',
  'uses'  => 'Controller@search',
  'middleware' => [
    'auth:web',
  ],
]);
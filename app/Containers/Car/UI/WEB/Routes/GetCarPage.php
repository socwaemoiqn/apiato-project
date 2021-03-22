<?php

$router->get('/car', [
    'uses' => 'Controller@create',
    'middleware' => [
        'auth:web',
      ],
]);
$router->post('/car', [
    'uses' => 'Controller@store',
    'middleware' => [
        'auth:web',
      ],
]);

$router->get('/car/index', [
    'uses' => 'Controller@index',
    'middleware' => [
        'auth:web',
      ],
]);
//view detail car
$router->get('car/view_car/{id}', [
    'as' => 'web_car_viewdetail.php',
    'uses'  => 'Controller@showcar',
    'middleware' => [
      'auth:web',
    ],
  ]);





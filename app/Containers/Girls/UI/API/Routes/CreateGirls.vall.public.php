<?php

/**
 * @apiGroup           Girls
 * @apiName            createGirls
 *
 * @api                {POST} /vall/foo Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         all.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->post('foo', [
    'as' => 'api_girls_create_girls',
    'uses'  => 'Controller@createGirls',
    'middleware' => [
      'auth:api',
    ],
]);

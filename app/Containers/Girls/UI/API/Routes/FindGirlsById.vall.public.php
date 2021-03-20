<?php

/**
 * @apiGroup           Girls
 * @apiName            findGirlsById
 *
 * @api                {GET} /vall/foo/:id Endpoint title here..
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
$router->get('foo/{id}', [
    'as' => 'api_girls_find_girls_by_id',
    'uses'  => 'Controller@findGirlsById',
    'middleware' => [
      'auth:api',
    ],
]);

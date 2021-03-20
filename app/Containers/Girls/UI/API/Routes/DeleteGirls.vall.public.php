<?php

/**
 * @apiGroup           Girls
 * @apiName            deleteGirls
 *
 * @api                {DELETE} /vall/foo/:id Endpoint title here..
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
$router->delete('foo/{id}', [
    'as' => 'api_girls_delete_girls',
    'uses'  => 'Controller@deleteGirls',
    'middleware' => [
      'auth:api',
    ],
]);

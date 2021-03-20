<?php

/**
 * @apiGroup           Girls
 * @apiName            updateGirls
 *
 * @api                {PATCH} /vall/foo/:id Endpoint title here..
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
$router->patch('foo/{id}', [
    'as' => 'api_girls_update_girls',
    'uses'  => 'Controller@updateGirls',
    'middleware' => [
      'auth:api',
    ],
]);

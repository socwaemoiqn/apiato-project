<?php

/**
 * @apiGroup           Girls
 * @apiName            getAllGirls
 *
 * @api                {GET} /vall/foo Endpoint title here..
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
$router->get('foo', [
    'as' => 'api_girls_get_all_girls',
    'uses'  => 'Controller@getAllGirls',
    'middleware' => [
      'auth:api',
    ],
]);

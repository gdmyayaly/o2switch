<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/get' => [[['_route' => 'getrequest', '_is_api' => true, '_controller' => 'App\\Controller\\ApiTestController::getrequest'], null, ['GET' => 0], null, false, false, null]],
        '/post' => [[['_route' => 'postrequest', '_is_api' => true, '_controller' => 'App\\Controller\\ApiTestController::postrequest'], null, ['POST' => 0], null, false, false, null]],
        '/put' => [[['_route' => 'putrequest', '_is_api' => true, '_controller' => 'App\\Controller\\ApiTestController::putrequest'], null, ['PUT' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

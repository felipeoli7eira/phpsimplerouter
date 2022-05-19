<?php

require __DIR__ . '/routerHandler.php';
require __DIR__ . '/viewHandler.php';

$routes = [
    'GET' => [
        '/'                  => fn () => load('SiteController', 'main'),
        '/contact'           => fn () => load('ContactController', 'main'),
        '/location'          => fn () => load('SiteController', 'location'),
        '/response-location' => fn () => load('SiteController', 'responseLocation'),
        '/json'              => fn () => load('SiteController', 'json')
    ],

    'POST' => [
        '/contact' => fn () => load('ContactController', 'store')
    ],

    'PUT' => [],

    'DELETE' => [],
];

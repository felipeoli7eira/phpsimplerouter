<?php

try
{
    $requestUri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $requestVerb = $_SERVER['REQUEST_METHOD'];

    if (!array_key_exists($requestVerb, $routes)) {
        throw new Exception('Verbo da requisição não mapeado');
    }

    if (!array_key_exists($requestUri, $routes[$requestVerb])) {
        throw new Exception('Uri não mapeada');
    }

    // because each route returns a closure and the closure invokes a controller method
    $response = $routes[$requestVerb][$requestUri]();

    // if the return type is a string, show it
    if (gettype($response) === 'string') {
        echo $response;
    }
}
catch (Exception $exception)
{
    echo $exception->getMessage();
}

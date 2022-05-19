<?php

/**
 * Verifica se o controller e o método existem para responder a request
 * 
 * @param string $controller O nome do controller responsável pela URI
 * @param string $action O método gatilho da URI
 * @return mixed
*/
function load(string $controller, string $action)
{
    try
    {
        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("Controller <b>{$controller}</b> não foi encontrado");
        }

        if (!method_exists($controllerNamespace, $action)) {
            throw new Exception("A Action <b>{$action}</b> não foi encontrada dentro do controller {$controller}");
        }

        $controllerInstance = new $controllerNamespace;
        return $controllerInstance->$action((object) $_REQUEST);
    }
    catch (Exception $exception)
    {
        echo $exception->getMessage();
    }
}

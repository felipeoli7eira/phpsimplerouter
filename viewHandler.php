<?php

/**
 * Retorna o conteúdo de uma view ou lança uma exceção caso ela não exista
 * 
 * @param string $viewName O nome da view a ser chamada.
 * @return string
*/
function view(string $viewName): string
{
    $viewsDir = __DIR__ . '/views/';
    $viewName .= '.php';

    if (!file_exists($viewsDir . $viewName) || !is_file($viewsDir . $viewName)) {
        throw new Exception("View {$viewName} not found");
    }

    return file_get_contents($viewsDir . $viewName);
}

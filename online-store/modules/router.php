<?php

function route()
{
    $controllerName = $actionName = 'index';

    $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    if ($path) {
        $segments = explode('/', $path);
        $controllerName = array_shift($segments);
    }

    $controllerFileName = __DIR__ . '/../controller/' . $controllerName . '-controller.php';

    if (file_exists($controllerFileName)) {
        include $controllerFileName;
        if (!empty($segments)) {
            $actionName = array_shift($segments);
        }

        if (function_exists($actionName)) {
            $parameters = prepareParams($segments ?? []);
            $actionName($parameters);
        } else {
            http_response_code(404);
            echo 'Not found';
        }
    } else {
        http_response_code(404);
        echo 'Not found';
    }
}

function prepareParams(array $segments)
{
    $params = [];
    foreach ($segments as $key => $segment) {
        if ($key % 2 === 0) {
            $name = $segment;
        } else {
            $value = $segment;
            $params[$name] = $value;
        }
    }

    return $params;
}
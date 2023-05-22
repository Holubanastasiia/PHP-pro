<?php
spl_autoload_register(function($className) {
    $rootDir = 'src';
    $namespaceParts = explode('\\', $className);
    $rootNamespace = $namespaceParts[0];

    $filename = str_replace('\\', '/', $className);
    $filename = str_replace($rootNamespace, $rootDir, $filename);

    if (file_exists($filename .  '.php')) {
        require_once $filename . '.php';
    }

});

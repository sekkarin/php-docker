<?php

spl_autoload_register(function ($class) {
    // Convert class name to file path
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    // Include the class file if it exists
    if (file_exists($file)) {
        require_once($file);
    }
});
<?php
session_start();

// Load configuration
require_once 'config/config.php';
require_once 'config/database.php';

// Autoload models and controllers
spl_autoload_register(function ($class) {
    $paths = [
        'models/' . $class . '.php',
        'controllers/' . $class . '.php'
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            require_once $path;
            break;
        }
    }
});

// Simple routing
$controller = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

// Map controllers
$controllers = [
    'home' => 'HomeController',
    'products' => 'ProductController',
    'users' => 'UserController',
    'cart' => 'CartController',
    'orders' => 'OrderController',
    'admin' => 'AdminController'
];

if (isset($controllers[$controller])) {
    $controllerClass = $controllers[$controller];
    $controllerInstance = new $controllerClass();

    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        http_response_code(404);
        echo "Action not found";
    }
} else {
    http_response_code(404);
    echo "Controller not found";
}
?>
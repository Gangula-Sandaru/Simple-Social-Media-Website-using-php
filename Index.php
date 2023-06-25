<?php
// Define the routing mechanism
$request = $_SERVER['REQUEST_URI'];

// Map the routes to the respective controllers
$routes = [
    '/' => 'homeController@index'
];

// Find the corresponding controller and action for the requested route
if (isset($routes[$request])) {
    [$controller, $action] = explode('@', $routes[$request]);

    // Include the controller file
    include_once "controllers/$controller.php";

    // Create an instance of the controller class and call the action method
    $controllerInstance = new $controller();
    $controllerInstance->$action();
} else {
    // Handle 404 Page Not Found error
    echo "404 Page Not Found";
}
?>

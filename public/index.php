<?php

/**
 * Front controller
 * PHP version 7.4
 */

// echo 'Requested URL = "' . $_SERVVER['QUERY_STRING] . '"';

/*
 * Routing 
 */
require '../Core/Router.php';

$router = new Router();

// echo get_class($router);

// Add the routes
$router->add("", ['controller' => 'home', 'action' => 'index']);
$router->add("posts", ['controller' => 'posts', 'action' => 'index']);
// $router->add("posts/new", ['controller' => 'posts', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{action}/{controller}');

// Display the routing table
echo '<pre>';
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';

// Match the requested route
$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre>';
    var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for URL '$url'";
}

// echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';

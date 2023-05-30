<?php 
include './src/config/config.php'; 
require_once(CLASSES . '/Router.php');

$routes = include 'src/config/routes.php';
$router = new Router();
$page = $router->getPage();

$titre = isset($routes[$page]) ? $routes[$page] : "404";
$pageLink = CSS . "/" . $page . ".css";

include TEMPLATE . "/base.php"; 
?>
<?php 
include './src/config/config.php'; 
require_once(CLASSES . '/Router.php');
require_once(CLASSES . '/Controller.php');
$routes = include 'src/config/routes.php';
$router = new Router();


// START ------------------------------------------------

$controller = new Controller($router);
    // $controller->render($router);
    // déterminer la méthode de controller à appeler en fonction de la page ($router->getPage())
    $routes = include './src/config/routes.php';
    if(array_key_exists($router->getPage(), $routes)){
        $methodName = $routes[$router->getPage()];
        var_dump($methodName);
        $controller->$methodName();
    }
    var_dump($routes);

    

// STOP ----------------------------------------------------

//include TEMPLATE . "/base.php"; 
?>
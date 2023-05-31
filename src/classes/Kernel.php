<?php

class Kernel {
    // Kernel
    
    function bootstrap(){
    
        $router = new Router();
        $controller = new Controller($router);
        // déterminer la méthode de controller à appeler en fonction de la page ($router->getPage())
        $routes = include './src/config/routes.php';
        if(array_key_exists($router->getPage(), $routes)){
            $methodName = $routes[$router->getPage()];
        } else {
            $methodName = "notFound";
        }
        $controller->$methodName();
    
    }
}
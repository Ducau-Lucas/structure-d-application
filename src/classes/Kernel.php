<?php

class Kernel {

    
    function bootstrap(){
    
        $routes = include 'src/config/routes.php';
        $router = new Router();
        $controller = new Controller($router);
        // $controller->render($router);
        // déterminer la méthode de controller à appeler en fonction de la page ($router->getPage())
        $routes = include './src/config/routes.php';
        if(array_key_exists($router->getPage(), $routes)){
            $methodName = $routes[$router->getPage()];
            $controller->$methodName();
        } else {
            $controller->notFound();
        }
    
    }
}
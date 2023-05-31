<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="<?= CSS ?>/style.css">
    <?php if (file_exists($pageLink)) : ?>
        <link rel="stylesheet" href="<?= $pageLink ?>">
    <?php endif ?>
    <link rel="stylesheet" href="<?= CSS ?>/responsive.css">
    <script defer src="<?= JS ?>/main.js"></script>
</head>

<body>
    <?php
    include TEMPLATE_PARTS . '/_header.php';

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

    class Controller
    {
        private $router;

        public function __construct($router)
        {
            $this->router = $router;
        }

        public function accueil(){
            //Specific code for the home page
            //TODO
            $this->render();
        }

        public function services(){
            $this->render();
        }

        
        public function render(){
            if (file_exists(PAGES . $this->router->getPage() . ".php")) {
                include PAGES . $this->router->getPage() . ".php";
            } else {
                include PAGES . "page404.php";
            }
            
        }
    }

    include TEMPLATE_PARTS . '/_footer.php'; 
    ?>
</body>

</html>
<?php

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
            $titre = "Accueil";
            $this->render($titre);
        }
        
        public function about(){
            $titre = "A Propos";
            $this->render($titre);
        }

        public function services(){
            $titre = "Services";
            $this->render($titre);
        }
        
        public function contact(){
            $titre = "Contact";
            $this->render($titre);
        }
        
        
        public function render($titre=null){
            
            $pageLink = CSS . "/" . $this->router->getPage() . ".css";
            if (file_exists(PAGES . $this->router->getPage() . ".php")) {
                $template = PAGES . $this->router->getPage() . ".php";
                //include PAGES . $this->router->getPage() . ".php";
            } else {
                $template = PAGES . "page404.php";
                //include PAGES . "page404.php";
            }
            include TEMPLATE . "/base.php";
            
        }
    }
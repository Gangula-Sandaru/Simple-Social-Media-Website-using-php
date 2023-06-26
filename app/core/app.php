<?php 
class App{

    protected $controller = "home";
    protected $method = "index";
    protected $prans = [];

    public function __construct(){
        echo "OK!";
        $this->praseUrl();
    }

    public function praseUrl(){
        if(isset($_GET['url'])){
            echo $_GET['url'];
        }
    }
}

?>
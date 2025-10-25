<?php
class App{
    protected $controller = "EcommerceController";
    protected $method = "main";
    protected $params = [];

    public function __construct(){     

        $url = $this->parseUrl();    

        if(isset($url[0]) && file_exists(ROOT_PATH."/app/controllers/".ucfirst(strtolower($url[0]))."Controller.php")){
            $this->controller = ucfirst(strtolower($url[0]))."Controller";
            unset($url[0]);
        }else if($url[0] != ""){
            $this->controller = "ErrorController";
            unset($url[0]);
        }

        require_once ROOT_PATH."/app/controllers/".$this->controller.".php";
        
        $instance =  new $this->controller;
           
        if(isset($url[1]) && method_exists($instance, $url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }

        call_user_func_array([$instance, $this->method], $this->params);
    }

    public function parseUrl(){
        if(isset($_GET["url"])){
            return explode("/", filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));
        }
        return [''];
    }

}


?>

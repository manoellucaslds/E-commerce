<?php

    class DashboardController{
        
        public function main(){
            $_SESSION["login"] = true;
            if(isset($_SESSION["login"])){
                require_once ROOT_PATH."/app/views/DashboardView.php";
            }else{
                require_once ROOT_PATH."/app/views/LoginView.php";
            }
        }
    }
?>
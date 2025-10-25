<?php

    class DashboardController{
        public function main(){
            if(isset($_SESSION["login"])){
                require_once ROOT_PATH."/app/views/DashboardView.php";
            }else{
                require_once ROOT_PATH."/app/views/LoginView.php";
            }
        }
    }
?>
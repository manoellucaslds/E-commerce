<?php
    require_once  ROOT_PATH."/app/models/Mysql.php";
    class ModelDashboard{
        public static function login($data){
            $sql = Mysql::connect()->prepare("SELECT * FROM `tb.funcionarios` WHERE nome = ? AND password = ?");
            $sql->execute($data);
            if($sql->rowCount() == 1){
                return true;
            }else{
                return false;
            }
        }

        
    }
?>
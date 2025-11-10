<?php
    require_once ROOT_PATH."/PASS.php";
    class Mysql{
        private static $pdo;
        public static function connect(){
            if(!isset(self::$pdo)){
                try{
                    return self::$pdo = new PDO("mysql:hostname=localhost;dbname=".PASS::$DB,PASS::$USER,PASS::$PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                }catch(PDOException $e){
                    echo "erro ao conectar no banco de dados";
                }
            }else{
                return self::$pdo;
            }
        }
    }

?>
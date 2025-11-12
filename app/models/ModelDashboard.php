<?php
require_once ROOT_PATH . "/app/models/Mysql.php";
class ModelDashboard
{
    public static function login($data)
    {
        $sql = Mysql::connect()->prepare("SELECT * FROM `tb.funcionarios` WHERE email = ? AND senha = ?");
        $sql->execute($data);
        if ($sql->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }

    /*---------------Produto---------------*/
    public static function cadastrarProtudo($data){
        
    }
    /*---------------Produto---------------*/


     /*---------------clientes---------------*/
    public static function consultarCliente($data)
    {
        $sql = Mysql::connect()->prepare("SELECT * FROM `tb.clientes` WHERE cpf_cnpj = ? OR rg_ie = ?");
        $sql->execute($data);
        if ($sql->rowCount() >= 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function cadastrarCliente($data)
    {
        $sql = Mysql::connect()->prepare("INSERT INTO `tb.clientes` values(?,?,?,?,?,?,?,?,?,?,?,?)");
        if ($sql->execute($data)) {
            return true;
        } else {
            return false;
        }
    }

    /*---------------clientes---------------*/


    /*---------------Funcionario---------------*/
    public static function consultarFuncionario($data)
    {
        $sql = Mysql::connect()->prepare("SELECT * FROM `tb.funcionarios` WHERE cpf = ? ");
        $sql->execute($data);
        if ($sql->rowCount() == 1) {
            return true;
        } else {
            return false;
        }
    }
    public static function cadastrarFuncionario($data){
        $sql = Mysql::connect()->prepare("INSERT INTO `tb.funcionarios` values(?,?,?,?,?,?,?,?)");
        if ($sql->execute($data)) {
            return true;
        } else {
            return false;
        }
    }

    /*---------------Funcionario---------------*/
}   
?>
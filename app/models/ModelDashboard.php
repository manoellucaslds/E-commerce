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

    public static function consultarProduto($data)
    {
        $sql = Mysql::connect()->prepare("SELECT * FROM `tb.produtos` WHERE nome = ?");
        $sql->execute($data);
        if ($sql->rowCount() >= 1) {
            return true;
        } else {
            return false;
        }
    }

    public static function cadastrarProtudo($data)
    {
        $sql = Mysql::connect()->prepare("INSERT INTO `tb.produtos` values(?,?,?,?,?,?)");
        if ($sql->execute($data)) {
            return true;
        } else {
            return false;
        }
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
    public static function cadastrarFuncionario($data)
    {
        $sql = Mysql::connect()->prepare("INSERT INTO `tb.funcionarios` values(?,?,?,?,?,?,?,?)");
        if ($sql->execute($data)) {
            return true;
        } else {
            return false;
        }
    }

    /*---------------Funcionario---------------*/


    /*---------------Relatorios de Produtos--------------------*/
    public static function relatorioProdutos($data)
    {
        $query = "SELECT * FROM `tb.produtos`";
        $params = [];
        $where_clauses = [];
        if (!empty($data[0])) {
            $where_clauses[] = "nome LIKE ?";
            $params[] = "%" . $data[0] . "%";
        }

        if (!empty($data[1])) {
            $where_clauses[] = "categoria LIKE ?";
            $params[] = "%" . $data[1] . "%";
        }

        if (!empty($data[2])) {
            $where_clauses[] = "status = ?"; // Status exato, não LIKE
            $params[] = $data[2];
        }

        if (!empty($where_clauses)) {
            $query .= " WHERE " . implode(" AND ", $where_clauses);
        }
        
        $query .= " ORDER BY nome ASC";

     
        $sql = Mysql::connect()->prepare($query);
        $sql->execute($params);
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }   
    /*---------------Relatorios de Produtos--------------------*/
}
?>
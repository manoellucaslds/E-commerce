<?php
require_once ROOT_PATH . "/app/models/ModelDashboard.php";
class DashboardController
{

    public function main()
    {

        if (isset($_SESSION["login"])) {
            require_once ROOT_PATH . "/app/views/DashboardView.php";
        } else {
            require_once ROOT_PATH . "/app/views/LoginView.php";
        }

        //limpar mensagens de feedback
        if (isset($_SESSION["erro"]) || isset($_SESSION["feedback"])) {
            unset($_SESSION["erro"]);
            unset($_SESSION["feedback"]);
            //if ((time() - $_SESSION["last_time"]) > 2) {}
        }
    }

    /* --------- Login/Logout  ------------*/
    public function login()
    {
        if (isset($_POST["login"])) {

            $username = $_POST["username"];
            $password = $_POST["password"];
            $data = array($username, $password);

            if (ModelDashboard::login($data)) {
                $_SESSION["login"] = true;
                if (isset($_SESSION["erro"]) || isset($_SESSION["feedback"])) {
                    unset($_SESSION["erro"]);
                    unset($_SESSION["feedback"]);    
                }
                header("Location:" . RELATIVE_PATH . "/dashboard/");
                exit();
            } else {
                $_SESSION["erro"] = true;
                header("Location: " . RELATIVE_PATH . "/dashboard/");
                exit();
            }


        }
    }

    public static function logout()
    {
        unset($_SESSION["login"]);
        session_destroy();
        header("Location: " . RELATIVE_PATH . "/dashboard/");
        exit();
    }
    /* --------- Login/Logout  ------------*/


    /*-------------------Cadastro----------------------- */

    /*---------------Produto---------------*/
    public static function cadastroProduto()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome = $_POST["nome"];
            $valor = $_POST["valor"];
            $quantidade = $_POST["quantidade"];
            $descricao = $_POST["descricao"];
            $img = $_FILES["imagem"];
            $arquivo_temporario = "";
            $nome_original = "";
            $diretorio_destino = "";
            $extensao = "";
            $novo_nome = "";
            $caminho_completo_destino = "";

            if (ModelDashboard::consultarProduto((array($nome)))) {
                $_SESSION["erro"] = "Produto já cadastrado";
            }

            if (empty($nome) || strlen($nome) < 2) {
                $_SESSION["erro"] = "Campo de nome vazio ou invalido";
            }

            if (empty($valor) || $valor == 0) {
                $_SESSION["erro"] = "Valor não pode está vazio ou ser igual a zero";
            }

            if (empty($quantidade) || $valor == 0) {
                $_SESSION["erro"] = "Valor não pode está vazio ou ser igual a zero";
            }

            if (isset($img)) {
                $arquivo_temporario = $img["tmp_name"];
                $nome_original = $img["name"];

                $diretorio_destino = ROOT_PATH . "/public/assets/images/produtos";

                $extensao = strtolower(pathinfo($nome_original, PATHINFO_EXTENSION));
                $novo_nome = uniqid() . "." . $extensao;
                $nome_original = "assets/images/produtos/" .$nome ."/".$novo_nome;
                $caminho_completo_destino = $diretorio_destino;

            } else {
                //echo "Nenhum arquivo enviado.";
            }

            if (empty($_SESSION["erro"])) {
                $data = array(null, $nome, $valor, $quantidade, $descricao, $nome_original);
                if (ModelDashboard::cadastrarProtudo($data)) {
                    if (!empty($img)) {
                        if (!is_dir($caminho_completo_destino."/".$nome)) {
                            mkdir($caminho_completo_destino."/".$nome, 0777, true);
                        }

                        if (move_uploaded_file($arquivo_temporario,  $caminho_completo_destino."/".$nome ."/".$novo_nome )) {
                            $_SESSION["feedback"] = "Arquivo enviado com sucesso para: " . $caminho_completo_destino;
                        } else {
                            $_SESSION["erro"] = "Erro ao mover o arquivo.";
                        }
                    }
                    $_SESSION["feedback"] = "Cadastrado com Sucesso";
                } else {
                    $_SESSION["erro"] = "não foi possivel salvar no banco de dados";
                }

            } 

            header("Location: " . RELATIVE_PATH . "/dashboard/cadastro/produto");
            exit();

        }
    }
    /*---------------Produto---------------*/


    /*----------Cliente------------ */
    private static function sanitizeString($data)
    {
        $data = (string) $data;
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES, "UTF-8"); // Adicionado ENT_QUOTES e charset para robustez
        return $data;
    }


    public static function cadastroCliente()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $nome = self::sanitizeString($_POST["nome"] ?? "");
            $telefone = preg_replace("/[^0-9]/", "", $_POST["telefone"] ?? ""); // Apenas números
            $cpf_cnpj = preg_replace("/[^0-9]/", "", $_POST["cpf_cnpj"] ?? ""); // Apenas números
            $rg_inscricaoEstadual = self::sanitizeString($_POST["rg_incricaoEstadual"] ?? "");
            $nascimento = self::sanitizeString($_POST["nascimento"] ?? "");

            $cep = preg_replace("/[^0-9]/", "", $_POST["cep"] ?? ""); // Apenas números
            $endereco = self::sanitizeString($_POST["endereco"] ?? "");
            $numero = filter_var($_POST["numero"] ?? "", FILTER_SANITIZE_NUMBER_INT); // Apenas inteiros
            $bairro = self::sanitizeString($_POST["bairro"]);
            $cidade = self::sanitizeString($_POST["cidade"]);
            $estado = self::sanitizeString($_POST["estado"]);

            if (empty($nome) || strlen($nome) < 2) {
                $_SESSION["erro"] = "Campo de nome vazio ou invalido \n";
            }

            if (empty($cpf_cnpj) || strlen($cpf_cnpj) != 11) {
                $_SESSION["erro"] = "Campo telefone invalido ou vazio \n" . strlen($cpf_cnpj);
            }

            if (empty($cpf_cnpj) || strlen($cpf_cnpj) != 11) {
                $_SESSION["erro"] = "Campo CPF invalido, campo vazio ou CPF incorreto \n" . strlen($cpf_cnpj);
            } else if (strlen($cpf_cnpj) > 11 && strlen($cpf_cnpj) != 14) {
                $_SESSION["erro"] = "Campo CNPJ invalido, campo vazio ou CNPJ incorreto \n" . strlen($cpf_cnpj);
            }

            if (empty($rg_inscricaoEstadual)) {
                $_SESSION["erro"] = "Campo RG/Inscrição Estadual não pode está vazio \n";
            }

            if (ModelDashboard::consultarCliente(array($cpf_cnpj, $rg_inscricaoEstadual))) {
                $_SESSION["erro"] = "Usuario já cadastrado \n";
            }

            if (empty($nascimento)) {
                $_SESSION["erro"] = "Campo nascimento invalido ou esta está vazio \n";
            }

            /*--------verificação endereco-----------*/

            if (empty($cep) || strlen($cep) != 8) {
                $_SESSION["erro"] = "Campo CEP não pode está vazio ou CEP invalido \n";
            }

            if (empty($endereco)) {
                $_SESSION["erro"] = "Campo de endereco não pode está vazio \n";
            }

            if (empty($numero)) {
                $_SESSION["erro"] = "Campo numero da residencia não pode estar em branco \n";
            }

            if (empty($bairro) || empty($cidade) || empty($estado)) {
                $_SESSION["erro"] = "Campos de bairro, cidade, estado não pode estar em branco \n";
            }

            /*--------verificação endereco-----------*/

            if (!empty($_SESSION["erro"])) {
               
            } else {
                $data = array(null, $nome, $telefone, $cpf_cnpj, $rg_inscricaoEstadual, $nascimento, $cep, $endereco, $numero, $bairro, $cidade, $estado);
                if (ModelDashboard::cadastrarCliente($data)) {
                    $_SESSION["feedback"] = "Cadastrado com Sucesso";
                   
                } else {
                    $_SESSION["erro"] = "não foi possivel salvar no banco de dados";
                   
                }
            }

            header("Location: " . RELATIVE_PATH . "/dashboard/cadastro/cliente");
            exit();

        }
    }
    /*----------Cliente------------ */


    /*----------Funcionario------------ */
    public static function cadastroFuncionario()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome = self::sanitizeString($_POST["nome"] ?? "");
            $cpf = preg_replace("/[^0-9]/", "", $_POST["cpf"] ?? "");
            $email = self::sanitizeString($_POST["email"] ?? "");
            $cargo = $_POST["cargo"];
            $telefone = preg_replace("/[^0-9]/", "", $_POST["telefone"] ?? "");
            $nascimento = $_POST["nascimento"];
            $senha = $_POST["senha"];
            $confirmacaoSenha = $_POST["confirma_senha"];


            if (empty($nome) || strlen($nome) < 2) {
                $_SESSION["erro"] = "Campo de nome vazio ou invalido \n";
            }

            if (empty($cpf) || strlen($cpf) != 11) {
                $_SESSION["erro"] = "Campo CPF invalido, campo vazio ou CPF incorreto \n";
            }

            if (empty($email)) {
                $_SESSION["erro"] = "Campo e-mail não pode está vazio \n";
            }

            if (ModelDashboard::consultarFuncionario(array($cpf))) {
                $_SESSION["erro"] = "Funcionario já foi cadastrado \n";
            }

            if (empty($cargo)) {
                $_SESSION["erro"] = "Campo cargo não pode está vazio \n";
            }

            if (empty($telefone) || strlen($telefone) != 11) {
                $_SESSION["erro"] = "Campo telefone vazio ou invalido \n";
            }

            if (empty($nascimento)) {
                $_SESSION["erro"] = "Campo nascimento invalido ou esta está vazio \n";
            }

            /*--------verificação endereco-----------*/

            if (empty($senha) || strlen($senha) < 8) {
                $_SESSION["erro"] = "Campo de senha vazia ou menor que 8 caracteres \n";
            }

            if ($senha != $confirmacaoSenha) {
                $_SESSION["erro"] = "As senhas tem que ser iguais \n";
            }

            if (!empty($_SESSION["erro"])) {
               
            } else {
                $data = array(null, $nome, $cpf, $email, $cargo, $telefone, $nascimento, $senha);
                if (ModelDashboard::cadastrarFuncionario($data)) {
                    $_SESSION["feedback"] = "Cadastrado com Sucesso";
                   
                } else {
                    $_SESSION["erro"] = "não foi possivel salvar no banco de dados";
                   
                }
            }

            header("Location: " . RELATIVE_PATH . "/dashboard/cadastro/colaborador");
            exit();

        }
    }
    /*----------Funcionario------------ */

    /*-------------------Cadastro----------------------- */



    /*--------------------Relatorios----------------------*/
    public static function relatorioProdutos(){
        if($_SERVER["REQUEST_METHOD"] === "POST") {

            $nome = $_POST["nome"];
            $categoria = $_POST["categoria"];
            $status = $_POST["status"];
            $data = array( $nome, $categoria, $status);
             $_SESSION["relatorio"] = ModelDashboard::relatorioProdutos($data);

            header("Location: " . RELATIVE_PATH . "/dashboard/relatorio/produto");
            exit();
            
        }
    }
    /*--------------------Relatorios----------------------*/
}



?>
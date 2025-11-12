<div style="width:100%; height: 100%;">
    <header class="header-container">
        <ul class="">
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/cadastro/produto">Cadastro Produto</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/cadastro/cliente">Cadastro Cliente</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/cadastro/colaborador">Cadastro Funcionario</a></li>
        </ul>
    </header>
    
    <?php
        if(isset($_SESSION["erro"])) {
            echo $_SESSION["erro"];
        }else if(isset($_SESSION["feedback"])){
            echo $_SESSION["feedback"];
        }
        $url = isset($_GET["url"])?explode("cadastro", $_GET["url"])[1] : "";
        if ($url == "" || explode("/",$url)[1] == "produto") {
            require_once ROOT_PATH . "/app/views/dashboardPages/cadastroPages/ProdutoView.php";
        } else {
            if (file_exists(ROOT_PATH . "/app/views/dashboardPages/cadastroPages/". ucfirst(explode("/",$url)[1]) . "View.php")) {
                require_once ROOT_PATH . "/app/views/dashboardPages/cadastroPages/". ucfirst(explode("/",$url)[1]) . "View.php";
            } else {
                require_once ROOT_PATH . "/app/views/dashboardPages/ErrorView.php";
            }
        }

    
    ?>


</div>
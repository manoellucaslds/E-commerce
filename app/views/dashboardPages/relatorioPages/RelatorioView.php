<div style="width:100%; height: 100%;">
    <header class="header-container">
        <ul class="">
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/relatorio/produto">Produtos</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/relatorio/cliente">Clientes</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/relatorio/colaborador">Funcionarios</a></li>
        </ul>
    </header>
    
    <?php
        $url = isset($_GET["url"])?explode("relatorio", $_GET["url"])[1] : "";
        if ($url == "" || explode("/",$url)[1] == "produto") {
            require_once ROOT_PATH . "/app/views/dashboardPages/relatorioPages/ProdutoView.php";
        } else {
            if (file_exists(ROOT_PATH . "/app/views/dashboardPages/relatorioPages/". ucfirst(explode("/",$url)[1]) . "View.php")) {
                require_once ROOT_PATH . "/app/views/dashboardPages/relatorioPages/". ucfirst(explode("/",$url)[1]) . "View.php";
            } else {
                require_once ROOT_PATH . "/app/views/dashboardPages/ErrorView.php";
            }
        }

    
    ?>


</div>
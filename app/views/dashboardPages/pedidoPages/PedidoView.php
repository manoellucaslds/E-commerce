<div style="width:100%; height: 100%;">
    <header class="header-container">
        <ul class="">
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/pedido/novo">Novo Pedido</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/pedido/atualizar">Atualizar pedido</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/pedido/consultar">Consultar Pedido</a></li>
        </ul>
    </header>
    
    <?php
        $url = isset($_GET["url"])?explode("pedido", $_GET["url"])[1] : "";
        if ($url == "" || explode("/",$url)[1] == "novo") {
            require_once ROOT_PATH . "/app/views/dashboardPages/pedidoPages/NovoPedidoView.php";
        } else {
            if (file_exists(ROOT_PATH . "/app/views/dashboardPages/pedidoPages/". ucfirst(explode("/",$url)[1]) . "PedidoView.php")) {
                require_once ROOT_PATH . "/app/views/dashboardPages/pedidoPages/". ucfirst(explode("/",$url)[1]) . "PedidoView.php";
            } else {
                require_once ROOT_PATH . "/app/views/dashboardPages/ErrorView.php";
            }
        }    
    ?>


</div>
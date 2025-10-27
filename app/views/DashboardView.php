<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - TechNeon Admin</title>
    <!-- Fonte Inter para consistência estética -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RELATIVE_PATH ?>/assets/css/style_dashboard.css">
</head>

<body>

    <aside class="sidebar">
        <div class="logo">TECH<span>NEON</span></div>

        <ul class="nav-menu">
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/painel" class="active"><span>📊</span> Painel</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/cadastro"><span>📝</span> Cadastro</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/relatorio"><span>📈</span> Relatório</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/vendas"><span>💰</span> Vendas</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/pedido"><span>📦</span> Pedido</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/orcamento"><span>📑</span> Orçamentos</a></li>
            <li><a href=""><span>🚪</span> Sair</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <?php
        $url = isset($_GET["url"])? explode("/", $_GET["url"])[1] : "";

        if ($url == "" || $url == "painel") {
            require_once ROOT_PATH . "/app/views/dashboardPages/PainelView.php";
        } else {
            if (file_exists(ROOT_PATH . "/app/views/dashboardPages/".$url."Pages/" . ucfirst($url) . "View.php")) {
                require_once ROOT_PATH . "/app/views/dashboardPages/".$url."Pages/" . ucfirst($url) . "View.php";
            } else {
                require_once ROOT_PATH . "/app/views/dashboardPages/ErrorView.php";
            }
        }

        ?>

    </main>

</body>

</html>
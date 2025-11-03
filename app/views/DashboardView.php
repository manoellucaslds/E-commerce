<?php 

    $url = isset(explode("/", $_GET["url"])[1])? explode("/", $_GET["url"])[1] : "";
?>
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
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/painel" <?php echo ($url=="painel" ||$url=="")?'class="active"':""?>> <span>📊</span> Painel</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/cadastro" <?php echo ($url=="cadastro")?'class="active"':""?>><span>📝</span> Cadastro</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/relatorio" <?php echo ($url=="relatorio")?'class="active"':""?>><span>📈</span> Relatório</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/vendas" <?php echo ($url=="vendas")?'class="active"':""?>><span>💰</span> Vendas</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/pedido" <?php echo ($url=="pedido")?'class="active"':""?>><span>📦</span> Pedido</a></li>
            <li><a href="<?php echo RELATIVE_PATH?>/dashboard/orcamento" <?php echo ($url=="orcamento")?'class="active"':""?>><span>📑</span> Orçamentos</a></li>
            <li><a href=""><span>🚪</span> Sair</a></li>
        </ul>
    </aside>

    <main class="main-content">
        <?php
        

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
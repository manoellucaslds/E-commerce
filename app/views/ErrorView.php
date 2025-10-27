<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página Não Encontrada</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RELATIVE_PATH."/assets/css/style_errorpage.css"?>">
</head>
<body>

    <div class="error-container">
        <p class="error-code">404</p>
        <h1 class="error-title">Página Não Encontrada</h1>
        <p class="error-message">
            Ops! Parece que o endereço que você tentou acessar não existe. O recurso pode ter sido removido, 
            teve seu nome alterado ou você digitou algo errado.
        </p>
        <a href="<?php echo RELATIVE_PATH;?>" class="home-button">
            Voltar para a Página Inicial
        </a>
    </div>

</body>
</html>

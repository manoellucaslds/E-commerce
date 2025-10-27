<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TechNeon</title>
    <!-- Fonte Inter para consistência estética -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RELATIVE_PATH."/assets/css/style_login.css"?>">
</head>
<body>

    <div class="login-card">
        <h1 class="login-title">Acesso <span>TechNeon</span></h1>
        
        <form>            
            <div class="form-group">
                <label for="email">E-mail ou Usuário</label>
                <input type="text" id="email" name="email" placeholder="Digite seu e-mail ou usuário" required>
            </div>
            
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            
            <button type="submit" class="login-button">
                ENTRAR
            </button>
        </form>

        <div class="additional-links">
            <a href="#">Esqueceu a senha?</a> | 
            <a href="#">Criar conta</a>
        </div>
    </div>

</body>
</html>

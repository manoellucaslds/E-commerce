<div class="form-card">
    <h1 class="form-title">Cadastro de <span>Colaborador</span></h1>

    <form method="POST" action="<?php echo RELATIVE_PATH?>/dashboard/cadastroFuncionario">

        <!-- Dados Pessoais e Contato -->
        <div class="form-row">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Nome do Colaborador" required>
            </div>
            <div class="form-group" style="flex: 0.8;">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="email">Email (Login)</label>
                <input type="email" id="email" name="email" placeholder="email@empresa.com" required>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" name="cargo" placeholder="Ex: Vendedor, RH, Gerente" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" id="telefone" name="telefone" placeholder="(00) 90000-0000">
            </div>
            <div class="form-group">
                <label for="nascimento">Data de Nascimento</label>
                <input type="date" id="nascimento" name="nascimento" required>
            </div>
        </div>


        <!-- Seção de Senha e Segurança -->
        <div class="password-section">
            <h2 class="form-title"
                style="font-size: 24px; margin-top: 0; margin-bottom: 20px; color: var(--accent-color);">Acesso e
                Segurança</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Mínimo 8 caracteres" required>
                </div>
                <div class="form-group">
                    <label for="confirma_senha">Confirmar Senha</label>
                    <input type="password" id="confirma_senha" name="confirma_senha" placeholder="Repita a senha"
                        required>
                </div>
            </div>
        </div>

        <button type="submit" class="submit-button">
            CADASTRAR COLABORADOR
        </button>
    </form>

</div>
<div class="form-card">
        <h1 class="form-title">Cadastro de Cliente <span>/ Empresa</span></h1>
        
        <form >
            
            <!-- Tipo de Pessoa/Empresa -->
            <div class="form-row">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" placeholder="Nome do Cliente">
                </div>
                <div class="form-group">
                    <label for="razao_social">Razão Social (Opcional)</label>
                    <input type="text" id="razao_social" name="razao_social" placeholder="Razão Social da Empresa">
                </div>
            </div>

            <!-- Documentos Pessoais/Empresariais -->
            <div class="form-row">
                <div class="form-group">
                    <label for="cpf_cnpj">CPF / CNPJ</label>
                    <input type="text" id="cpf_cnpj" name="cpf_cnpj" placeholder="000.000.000-00 ou 00.000.000/0000-00" required>
                </div>
                <div class="form-group">
                    <label for="rg_ie">RG / Inscrição Estadual (IE)</label>
                    <input type="text" id="rg_ie" name="rg_ie" placeholder="Identidade ou Inscrição Estadual">
                </div>
                <div class="form-group">
                    <label for="nascimento">Nascimento</label>
                    <input type="date" id="nascimento" name="nascimento" required>
                </div>
            </div>

            <h2 class="form-title" style="font-size: 24px; color: var(--accent-color);">Endereço</h2>

            <!-- Endereço - Linha 1 -->
            <div class="form-row">
                <div class="form-group" style="flex: 2;">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" placeholder="00000-000" required>
                </div>
                <div class="form-group" style="flex: 4;">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Rua, Avenida, etc." required>
                </div>
                <div class="form-group" style="flex: 1;">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" placeholder="Nº" required>
                </div>
            </div>
            
            <!-- Endereço - Linha 2 -->
            <div class="form-row">
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" placeholder="Bairro" required>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" required>
                </div>
                <div class="form-group" style="max-width: 100px;">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" maxlength="2" placeholder="UF" required>
                </div>
            </div>
            
            <button type="submit" class="submit-button">
                FINALIZAR CADASTRO
            </button>
        </form>

    </div>
<div class="container">
    <h1 style="text-align: center; margin-bottom: 25px;" class="report-title">Novo Pedido de Venda</h1>

    <!-- Informações do Cliente -->
    <div class="card">
        <h2>Informações do Cliente</h2>

        <div class="form-group">
            <label for="client-name">Nome Completo</label>
            <input type="text" id="client-name" placeholder="Nome Completo / Razão Social">
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="client-cpf">CPF / CNPJ</label>
                <input type="text" id="client-cpf" placeholder="000.000.000-00">
            </div>
            <div class="form-group">
                <label for="client-rg">RG / Inscrição Estadual</label>
                <input type="text" id="client-rg" placeholder="00.000.000-0">
            </div>
        </div>

        <div class="form-group">
            <label for="client-phone">Telefone</label>
            <input type="tel" id="client-phone" placeholder="(99) 99999-9999">
        </div>

        <h3 style="font-size: 18px; margin-top: 30px; color: var(--secondary-text-color);">Endereço</h3>

        <div class="form-group">
            <label for="client-address">Endereço (Rua, Av.)</label>
            <input type="text" id="client-address" placeholder="Rua Exemplo">
        </div>

        <div class="form-row">
            <div class="form-group" style="flex: 0.3;">
                <label for="client-number">Número</label>
                <input type="text" id="client-number" placeholder="123">
            </div>
            <div class="form-group" style="flex: 0.7;">
                <label for="client-bairro">Bairro</label>
                <input type="text" id="client-bairro" placeholder="Centro">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label for="client-city">Cidade</label>
                <input type="text" id="client-city" placeholder="São Paulo">
            </div>
            <div class="form-group" style="flex: 0.4;">
                <label for="client-state">Estado</label>
                <input type="text" id="client-state" placeholder="SP">
            </div>
        </div>

        <div class="form-group">
            <label for="client-cep">CEP</label>
            <input type="text" id="client-cep" placeholder="00000-000">
        </div>

    </div>

    <!-- Informações do Pedido e Produtos -->
    <div class="card">

        <h2 style="color: var(--blue-highlight); text-shadow: 0 0 5px rgba(77, 208, 225, 0.5);">Itens do Pedido</h2>

        <!-- Message Box (NEW) -->
        <div id="message-box" class="message-box"></div>

        <div class="product-add-section">
            <h3 style="font-size: 16px; margin-top: 0; color: var(--blue-highlight);">Adicionar Produto</h3>
            <div class="form-row">
                <div class="form-group" style="flex: 2;">
                    <label for="product-name">Produto</label>
                    <input type="text" id="product-name" placeholder="Nome do Produto">
                </div>
                <div class="form-group">
                    <label for="product-quantity">Qtd</label>
                    <input type="number" id="product-quantity" value="1" min="1">
                </div>
                <div class="form-group">
                    <label for="product-price">Valor Unitário</label>
                    <input type="number" id="product-price" placeholder="0,00" step="0.01">
                </div>
                <button class="btn btn-add-product" onclick="addProduct()">+</button>
            </div>
        </div>

        <!-- Lista dos Produtos Adicionados -->
        <div style="overflow-x: auto;">
            <table class="products-table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Descrição</th>
                        <th>Qtd</th>
                        <th>Valor Unitário</th>
                        <th>Subtotal</th>
                        <th style="text-align: center;">Ações</th>
                    </tr>
                </thead>
                <tbody id="products-list">
                    <!-- Produtos serão adicionados aqui pelo JavaScript -->
                    <tr id="empty-message">
                        <td colspan="6" style="text-align: center; color: var(--secondary-text-color);">Nenhum produto
                            adicionado ainda.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Valores Totais -->
        <div class="totals-summary">
            <div>Subtotal: <span id="subtotal-value">R$ 0,00</span></div>
            <div>Descontos (-): <span>R$ 0,00</span></div>
            <div class="total-final">Total do Pedido: <span id="total-value">R$ 0,00</span></div>
        </div>

        <!-- Botões de Ação Final -->
        <div class="action-buttons-footer">
            <button class="btn btn-cancel">Cancelar</button>
            <button class="btn btn-confirm">Confirmar Pedido</button>
        </div>

    </div>
</div>
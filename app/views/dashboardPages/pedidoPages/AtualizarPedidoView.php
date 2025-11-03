<div class="container">
        <h1>Pedidos de Venda Pendentes</h1>

        <div class="card">
            <div class="filter-section">
                <div class="filter-group">
                    <input type="text" placeholder="Buscar por Nome do Cliente, CPF ou Pedido...">
                </div>
                <button class="btn-new" onclick="showMessage('Redirecionando para Novo Pedido...', 'info')">Novo Pedido</button>
            </div>

            <div style="overflow-x: auto;">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Nº Pedido</th>
                            <th>Status</th>
                            <th>Cliente (Nome/CPF)</th>
                            <th>Endereço</th>
                            <th>Qtd. Itens</th>
                            <th>Valor Total</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Linha 1: Exemplo de Pedido Pendente -->
                        <tr>
                            <td data-label="Nº Pedido">#20230045</td>
                            <td data-label="Status"><span class="status-badge status-pending">Pendente</span></td>
                            <td data-label="Cliente">João Silva (111.222.333-44)</td>
                            <td data-label="Endereço">Rua A, 123 - Centro, SP</td>
                            <td data-label="Qtd. Itens">3</td>
                            <td data-label="Valor Total"><span class="total-value">R$ 450,50</span></td>
                            <td data-label="Ações">
                                <button class="action-button btn-confirm">Confirmar</button>
                                <button class="action-button btn-cancel" >Cancelar</button>
                            </td>
                        </tr>
                        <!-- Linha 2: Outro Exemplo -->
                        <tr>
                            <td data-label="Nº Pedido">#20230046</td>
                            <td data-label="Status"><span class="status-badge status-pending">Pendente</span></td>
                            <td data-label="Cliente">Tech Solutions Ltda (99.888.777/0001-00)</td>
                            <td data-label="Endereço">Av. Principal, 500 - Bairro Novo, RJ</td>
                            <td data-label="Qtd. Itens">12</td>
                            <td data-label="Valor Total"><span class="total-value">R$ 1.890,99</span></td>
                            <td data-label="Ações">
                                <button class="action-button btn-confirm">Confirmar</button>
                                <button class="action-button btn-cancel">Cancelar</button>
                            </td>
                        </tr>
                        <!-- Linha 3: Outro Exemplo -->
                        <tr>
                            <td data-label="Nº Pedido">#20230047</td>
                            <td data-label="Status"><span class="status-badge status-pending">Pendente</span></td>
                            <td data-label="Cliente">Maria de Fátima (555.444.333-22)</td>
                            <td data-label="Endereço">Rua dos Lírios, 88 - Centro, MG</td>
                            <td data-label="Qtd. Itens">1</td>
                            <td data-label="Valor Total"><span class="total-value">R$ 75,00</span></td>
                            <td data-label="Ações">
                                <button class="action-button btn-confirm">Confirmar</button>
                                <button class="action-button btn-cancel">Cancelar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Message Box (NEW) -->
            <div id="message-box" class="message-box" style="margin-top: 20px;"></div>

        </div>
    </div>
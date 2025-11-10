<div style="width:100%; height: 100%;">
    <div class="container">

        <div class="report-header">
            <h1 class="report-title">Vendas</h1>
            <a href="#" class="action-button">Buscar</a>
        </div>

        <!-- Área de Filtros -->
        <div class="filters">
            <div class="filter-group">
                <label for="">Data Inicial</label>
                <input type="date" name="" id="">
                <label for="">Data Final</label>
                <input type="date" name="" id="">

            </div>

            <div class="filter-group">
                <label for="status">Status do Compras</label>
                <select id="status">
                    <option value="">Todos</option>
                    <option value="active">Cancelado</option>
                    <option value="inactive">Conluido</option>
                    <option value="lead">Pendente</option>
                </select>
            </div>

            <div class="filter-group" style="max-width: 200px;">
                <label for="city">Cupom</label>
                <input type="text">
            </div>
        </div>

        <!-- Tabela de Dados -->
        <div class="container-client" style="overflow-x: auto;">
            <table class="client-table">
                <thead>
                    <tr>
                        <th>Cupom</th>
                        <th>Nome do Cliente</th>
                        <th>Documento (CPF/CNPJ)</th>
                        <th>Total Comprado (R$)</th>
                        <th>Data Compra</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo 1: Cliente Ativo com Alto Valor de Compra -->
                    <tr>
                        <td data-label="ID">#C2001</td>
                        <td data-label="Nome">Aurora Tech Ltda</td>
                        <td data-label="Documento">23.456.789/0001-00</td>
                        <td data-label="Total Comprado"><span class="purchase-value">18.500,00</span></td>
                        <td data-label="Última Compra">25/10/2025</td>
                        <td data-label="Status"><span class="status-badge active">Ativo</span></td>
                        <td data-label="Ações"><button href="#"
                                style="color: var(--purple-highlight); text-decoration: none;">Consultar</button></td>
                    </tr>
                    <!-- Exemplo 2: Cliente Lead (Potencial) -->
                    <tr>
                        <td data-label="ID">#C2002</td>
                        <td data-label="Nome">Bruno Silva Almeida</td>
                        <td data-label="Documento">123.456.789-00</td>
                        <td data-label="Total Comprado"><span class="purchase-value">0,00</span></td>
                        <td data-label="Última Compra">--</td>
                        <td data-label="Status"><span class="status-badge lead">Lead</span></td>
                        <td data-label="Ações"><button href="#"
                                style="color: var(--purple-highlight); text-decoration: none;">Consultar</button></td>
                    </tr>
                    <!-- Exemplo 3: Cliente Inativo (Compra Recente Baixa) -->
                    <tr>
                        <td data-label="ID">#C2003</td>
                        <td data-label="Nome">Cyber Hardware S.A.</td>
                        <td data-label="Documento">01.987.654/0001-99</td>
                        <td data-label="Total Comprado"><span class="purchase-value">950,00</span></td>
                        <td data-label="Última Compra">01/08/2024</td>
                        <td data-label="Status"><span class="status-badge inactive">Inativo</span></td>
                        <td data-label="Ações"><button href="#"
                                style="color: var(--purple-highlight); text-decoration: none;">Consultar</button></td>
                    </tr>
                    <!-- Exemplo 4: Cliente Ativo com Valor Médio -->
                    <tr>
                        <td data-label="ID">#C2004</td>
                        <td data-label="Nome">Gabriela Fontes</td>
                        <td data-label="Documento">456.789.012-34</td>
                        <td data-label="Total Comprado"><span class="purchase-value">4.200,00</span></td>
                        <td data-label="Última Compra">10/09/2025</td>
                        <td data-label="Status"><span class="status-badge active">Ativo</span></td>
                        <td data-label="Ações"><button href="#"
                                style="color: var(--purple-highlight); text-decoration: none;">Consultar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>


</div>
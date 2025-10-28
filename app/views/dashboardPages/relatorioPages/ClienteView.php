<div class="container">
        
        <div class="report-header">
            <h1 class="report-title">Relatório de Clientes</h1>
            <a href="#" class="action-button">➕ Novo Cliente</a>
        </div>
        
        <!-- Área de Filtros -->
        <div class="filters">
            <div class="filter-group">
                <label for="search-name">Buscar por Nome / Documento</label>
                <input type="text" id="search-name" placeholder="Nome ou CPF/CNPJ...">
            </div>
            
            <div class="filter-group">
                <label for="status">Status do Cliente</label>
                <select id="status">
                    <option value="">Todos</option>
                    <option value="active">Ativo</option>
                    <option value="inactive">Inativo</option>
                    <option value="lead">Lead</option>
                </select>
            </div>

            <div class="filter-group" style="max-width: 200px;">
                <label for="city">Filtrar por Cidade</label>
                <select id="city">
                    <option value="">Todas</option>
                    <option value="sp">São Paulo</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="mg">Minas Gerais</option>
                </select>
            </div>
        </div>

        <!-- Tabela de Dados -->
        <div class="container-client" style="overflow-x: auto;">
            <table class="client-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Cliente</th>
                        <th>Documento (CPF/CNPJ)</th>
                        <th>Total Comprado (R$)</th>
                        <th>Última Compra</th>
                        <th>Status</th>
                        <th>Ações</th>
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
                        <td data-label="Ações"><a href="#" style="color: var(--purple-highlight); text-decoration: none;">Detalhes</a></td>
                    </tr>
                    <!-- Exemplo 2: Cliente Lead (Potencial) -->
                    <tr>
                        <td data-label="ID">#C2002</td>
                        <td data-label="Nome">Bruno Silva Almeida</td>
                        <td data-label="Documento">123.456.789-00</td>
                        <td data-label="Total Comprado"><span class="purchase-value">0,00</span></td>
                        <td data-label="Última Compra">--</td>
                        <td data-label="Status"><span class="status-badge lead">Lead</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--purple-highlight); text-decoration: none;">Detalhes</a></td>
                    </tr>
                    <!-- Exemplo 3: Cliente Inativo (Compra Recente Baixa) -->
                    <tr>
                        <td data-label="ID">#C2003</td>
                        <td data-label="Nome">Cyber Hardware S.A.</td>
                        <td data-label="Documento">01.987.654/0001-99</td>
                        <td data-label="Total Comprado"><span class="purchase-value">950,00</span></td>
                        <td data-label="Última Compra">01/08/2024</td>
                        <td data-label="Status"><span class="status-badge inactive">Inativo</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--purple-highlight); text-decoration: none;">Detalhes</a></td>
                    </tr>
                    <!-- Exemplo 4: Cliente Ativo com Valor Médio -->
                    <tr>
                        <td data-label="ID">#C2004</td>
                        <td data-label="Nome">Gabriela Fontes</td>
                        <td data-label="Documento">456.789.012-34</td>
                        <td data-label="Total Comprado"><span class="purchase-value">4.200,00</span></td>
                        <td data-label="Última Compra">10/09/2025</td>
                        <td data-label="Status"><span class="status-badge active">Ativo</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--purple-highlight); text-decoration: none;">Detalhes</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
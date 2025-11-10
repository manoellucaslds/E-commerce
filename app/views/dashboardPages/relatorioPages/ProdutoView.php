 <div class="container">
        
        <div class="report-header">
            <h1 class="report-title">Relatório de Produtos</h1>
            <a href="#" class="action-button">Buscar</a>
        </div>
        
        <!-- Área de Filtros -->
        <div class="filters">
            <div class="filter-group">
                <label for="search-name">Buscar por Nome</label>
                <input type="text" id="search-name" placeholder="Digite o nome do produto...">
            </div>
            
            <div class="filter-group">
                <label for="category">Categoria</label>
                <select id="category">
                    <option value="">Todas</option>
                    <option value="perifericos">Periféricos</option>
                    <option value="hardware">Hardware</option>
                    <option value="acessorios">Acessórios</option>
                </select>
            </div>

            <div class="filter-group" style="max-width: 150px;">
                <label for="stock">Status de Estoque</label>
                <select id="stock">
                    <option value="">Todos</option>
                    <option value="in-stock">Em Estoque</option>
                    <option value="low-stock">Estoque Baixo</option>
                    <option value="out-of-stock">Esgotado</option>
                </select>
            </div>
        </div>

        <!-- Tabela de Dados -->
        <div style="overflow-x: auto;">
            <table class="product-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Produto</th>
                        <th>Categoria</th>
                        <th>Valor (R$)</th>
                        <th>Estoque</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo 1: Em Estoque -->
                    <tr>
                        <td data-label="ID">#1001</td>
                        <td data-label="Nome">Monitor Curvo Neon 34"</td>
                        <td data-label="Categoria">Hardware</td>
                        <td data-label="Valor"><span class="price">2.899,00</span></td>
                        <td data-label="Estoque">78 un.</td>
                        <td data-label="Status"><span class="status-badge in-stock">Em Estoque</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Editar</a></td>
                    </tr>
                    <!-- Exemplo 2: Estoque Baixo -->
                    <tr>
                        <td data-label="ID">#1002</td>
                        <td data-label="Nome">Mousepad RGB Grande</td>
                        <td data-label="Categoria">Periféricos</td>
                        <td data-label="Valor"><span class="price">129,90</span></td>
                        <td data-label="Estoque">5 un.</td>
                        <td data-label="Status"><span class="status-badge low-stock">Estoque Baixo</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Editar</a></td>
                    </tr>
                    <!-- Exemplo 3: Esgotado -->
                    <tr>
                        <td data-label="ID">#1003</td>
                        <td data-label="Nome">Teclado Mecânico TKL</td>
                        <td data-label="Categoria">Periféricos</td>
                        <td data-label="Valor"><span class="price">550,00</span></td>
                        <td data-label="Estoque">0 un.</td>
                        <td data-label="Status"><span class="status-badge out-of-stock">Esgotado</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Editar</a></td>
                    </tr>
                    <!-- Exemplo 4: Em Estoque -->
                    <tr>
                        <td data-label="ID">#1004</td>
                        <td data-label="Nome">Cabo HDMI Ultra Velocidade</td>
                        <td data-label="Categoria">Acessórios</td>
                        <td data-label="Valor"><span class="price">49,50</span></td>
                        <td data-label="Estoque">210 un.</td>
                        <td data-label="Status"><span class="status-badge in-stock">Em Estoque</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Editar</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

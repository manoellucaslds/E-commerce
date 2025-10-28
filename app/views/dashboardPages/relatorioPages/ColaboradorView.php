<div class="container">
        
        <div class="report-header">
            <h1 class="report-title">Relatório de Colaboradores</h1>
            <a href="#" class="action-button">➕ Novo Colaborador</a>
        </div>
        
        <!-- Área de Filtros -->
        <div class="filters">
            <div class="filter-group">
                <label for="search-name">Buscar por Nome / E-mail</label>
                <input type="text" id="search-name" placeholder="Nome ou e-mail do colaborador...">
            </div>
            
            <div class="filter-group">
                <label for="role">Filtrar por Cargo</label>
                <select id="role">
                    <option value="">Todos</option>
                    <option value="manager">Gerente</option>
                    <option value="sales">Vendedor</option>
                    <option value="support">Suporte Técnico</option>
                    <option value="admin">Administrativo</option>
                </select>
            </div>

            <div class="filter-group" style="max-width: 150px;">
                <label for="status">Status</label>
                <select id="status">
                    <option value="">Todos</option>
                    <option value="active">Ativo</option>
                    <option value="on-leave">Férias</option>
                    <option value="inactive">Afastado</option>
                </select>
            </div>
        </div>

        <!-- Tabela de Dados -->
        <div style="overflow-x: auto;">
            <table class="staff-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome do Colaborador</th>
                        <th>Cargo</th>
                        <th>E-mail</th>
                        <th>Admissão</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Exemplo 1: Ativo -->
                    <tr>
                        <td data-label="ID">#E001</td>
                        <td data-label="Nome">João Pedro Sales</td>
                        <td data-label="Cargo"><span class="role">Gerente de Vendas</span></td>
                        <td data-label="E-mail">joao.sales@tech.com</td>
                        <td data-label="Admissão">15/01/2022</td>
                        <td data-label="Status"><span class="status-badge active">Ativo</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Perfil</a></td>
                    </tr>
                    <!-- Exemplo 2: Em Férias -->
                    <tr>
                        <td data-label="ID">#E002</td>
                        <td data-label="Nome">Mariana Santos</td>
                        <td data-label="Cargo"><span class="role">Suporte Técnico Jr</span></td>
                        <td data-label="E-mail">mariana.s@tech.com</td>
                        <td data-label="Admissão">03/05/2024</td>
                        <td data-label="Status"><span class="status-badge on-leave">Férias</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Perfil</a></td>
                    </tr>
                    <!-- Exemplo 3: Afastado -->
                    <tr>
                        <td data-label="ID">#E003</td>
                        <td data-label="Nome">Ricardo Almeida</td>
                        <td data-label="Cargo"><span class="role">Administrativo</span></td>
                        <td data-label="E-mail">ricardo.a@tech.com</td>
                        <td data-label="Admissão">10/11/2021</td>
                        <td data-label="Status"><span class="status-badge inactive">Afastado</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Perfil</a></td>
                    </tr>
                    <!-- Exemplo 4: Ativo -->
                    <tr>
                        <td data-label="ID">#E004</td>
                        <td data-label="Nome">Lúcia Gomes</td>
                        <td data-label="Cargo"><span class="role">Vendedor Sênior</span></td>
                        <td data-label="E-mail">lucia.g@tech.com</td>
                        <td data-label="Admissão">20/07/2023</td>
                        <td data-label="Status"><span class="status-badge active">Ativo</span></td>
                        <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Perfil</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
<div class="container">

    <div class="report-header">
        <h1 class="report-title">Relatório de Produtos</h1>

    </div>

    <!-- Área de Filtros -->
    <form method="POST" action="<?php echo RELATIVE_PATH; ?>/dashboard/relatorioProdutos" class="filters">
        <div class="filter-group">
            <label for="search-name">Buscar por Nome</label>
            <input type="text" id="search-name" name="nome" placeholder="Digite o nome do produto...">
        </div>

        <div class="filter-group">
            <label for="category">Categoria</label>
            <select id="category" name="categoria">
                <option value="">Todas</option>
                <option value="perifericos">Periféricos</option>
                <option value="hardware">Hardware</option>
                <option value="acessorios">Acessórios</option>
            </select>
        </div>

        <div class="filter-group" style="max-width: 150px;">
            <label for="stock">Status de Estoque</label>
            <select id="stock" name="status">
                <option value="">Todos</option>
                <option value="in-stock">Em Estoque</option>
                <option value="low-stock">Estoque Baixo</option>
                <option value="out-of-stock">Esgotado</option>
            </select>
        </div>
        <button type="submit" class="action-button">Buscar</button>
    </form>

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

                <?php
                //echo (!empty($_SESSION["relatorio"]) ? print_r($_SESSION["relatorio"]) : "teste");
                if (!empty($_SESSION["relatorio"])) {
                    foreach ($_SESSION["relatorio"] as $key => $value) {
                        $status = "EM ESTOQUE";
                        $statusClass = "in-stock";
                        if ($value["quantidade"] < 10) {
                            $status = "Estoque baixo";
                            $statusClass = "low-stock";
                        } else if ($value["quantidade"] == 0) {
                            $status = "Esgotado";
                            $statusClass = "out-of-stock";
                        }
                        echo '
                                <tr>
                                    <td data-label="ID">' . $value["id"] . '</td>
                                    <td data-label="Nome">' . $value["nome"] . '</td>
                                    <td data-label="Categoria">' . $value["categoria"] . '</td>
                                    <td data-label="Valor"><span class="price"> R$' . number_format(floatval($value["preco"]),2,',','.') . '</span></td>
                                    <td data-label="Estoque">' . $value["quantidade"] . '</td>
                                    <td data-label="Status"><span class="status-badge in-stock">' . $status . '</span></td>
                                    <td data-label="Ações"><a href="#" style="color: var(--accent-color); text-decoration: none;">Editar</a></td>
                                </tr>
                            ';
                    }
                }else{
                    echo '
                        <tr>
                            <td data-label="ID" colspan="7" style="text-align: center;">Sem resultados</td>                         
                        </tr>
                    ';
                }
                ?>               
            </tbody>
        </table>
    </div>

</div>
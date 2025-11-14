<div class="container">

    <div class="report-header">
        <h1 class="report-title">Relatório de Clientes</h1>
    </div>

    <!-- Área de Filtros -->
    <form method="POST" action="<?php echo RELATIVE_PATH; ?>/dashboard/relatorioClientes" class="filters">
        <div class="filter-group">
            <label for="search-name">Buscar por Nome</label>
            <input type="text" id="search-name" name="nome" placeholder="Nome">
        </div>

        <div class="filter-group">
            <label for="search-name">Buscar CPF/CNPJ</label>
            <input type="text" id="search-name" name="cpf_cnpj" placeholder="CPF/CNPJ">
        </div>

        <div class="filter-group">
            <label for="estado">Estado Brasileiro</label>
            <select id="estado" name="estado">
                <option value="">Todos os Estados</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>
        </div>

        <div class="filter-group" style="max-width: 200px;">
            <label for="city">Filtrar por Cidade</label>
            <select id="city" name="cidade">
                <option value="">Todas</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Minas Gerais">Minas Gerais</option>
            </select>
        </div>
         <button type="submit" class="action-button">Buscar</button>
    </form>

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

                <?php
                //echo (!empty($_SESSION["relatorio"]) ? print_r($_SESSION["relatorio"]) : "teste");
                if (!empty($_SESSION["relatorio"])) {
                    foreach ($_SESSION["relatorio"] as $key => $value) {
                        $cpf_cnpj = $value["cpf_cnpj"];
                        if (strlen($cpf_cnpj) === 11) {
                            // Formata CPF: XXX.XXX.XXX-XX
                           $cpf_cnpj =   preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf_cnpj);
                        } elseif (strlen($cpf_cnpj) === 14) {
                            // Formata CNPJ: XX.XXX.XXX/XXXX-XX
                            $cpf_cnpj =  preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $cpf_cnpj);
                        } 
                       
                        echo '
                                <tr>
                                     <td data-label="ID">'.$value["id"].'</td>
                                    <td data-label="Nome">'.$value["nome"].'</td>
                                    <td data-label="Documento">'.$cpf_cnpj.'</td>
                                    <td data-label="Total Comprado"><span class="purchase-value">'.$value["id"].'</span></td>
                                    <td data-label="Última Compra">'.$value["id"].'</td>
                                    <td data-label="Status"><span class="status-badge active">'.$value["id"].'</span></td>
                                    <td data-label="Ações"><a href="#" style="color: var(--purple-highlight); text-decoration: none;">Detalhes</a></td>
                                </tr>
                            ';
                    }
                } else {
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
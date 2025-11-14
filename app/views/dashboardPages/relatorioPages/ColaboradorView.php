<div class="container">

    <div class="report-header">
        <h1 class="report-title">Relatório de Colaboradores</h1>
    </div>

    <!-- Área de Filtros -->
    <form method="POST" action="<?php echo RELATIVE_PATH; ?>/dashboard/relatorioFuncionarios" class="filters">
        <div class="filter-group">
            <label for="search-name">Buscar por Nome</label>
            <input type="text" id="search-name" name="nome" placeholder="Nome do colaborador">
        </div>

        <div class="filter-group">
            <label for="search-name">Buscar por CPF</label>
            <input type="text" id="search-name" name="cpf" placeholder="CPF">
        </div>


        <div class="filter-group">
            <label for="role">Filtrar por Cargo</label>
            <select id="role" name="cargo">
                <option value="">Todos</option>
                <option value="manager">Gerente</option>
                <option value="sales">Vendedor</option>
                <option value="aux de ti">Suporte Técnico</option>
                <option value="administrador">Administrativo</option>
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
        <button type="submit" class="action-button">Buscar</button>
    </form>

    <!-- Tabela de Dados -->
    <div style="overflow-x: auto;">
        <table class="staff-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Colaborador</th>
                    <th>CPF</th>
                    <th>Cargo</th>
                    <th>E-mail</th>
                    <th>Admissão</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php
                //echo (!empty($_SESSION["relatorio"]) ? print_r($_SESSION["relatorio"]) : "teste");
                if (!empty($_SESSION["relatorio"])) {
                    foreach ($_SESSION["relatorio"] as $key => $value) {
                        $cpf = $value["cpf"];
                        if (strlen($cpf) === 11) {
                            // Formata CPF: XXX.XXX.XXX-XX
                           $cpf =   preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
                        } 

                        echo '
                                <tr>
                                     <td data-label="ID">'.$value["id"].'</td>
                                    <td data-label="Nome">'.$value["nome"].'</td>
                                    <td data-label="Nome">'.$cpf .'</td>
                                    <td data-label="Cargo"><span class="role">'.$value["cargo"].'</span></td>
                                    <td data-label="E-mail">'.$value["email"].'</td>
                                    <td data-label="Admissão">'.$value["admissao"].'</td>
                                    <td data-label="Status"><span class="status-badge active">Ativo</span></td>
                                    <td data-label="Ações"><a href="#"
                                            style="color: var(--accent-color); text-decoration: none;">Perfil</a></td>
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
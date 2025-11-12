<div class="form-card" style="margin: 0 auto">
    <h1 class="form-title">Cadastrar Novo <span>Produto</span></h1>
    <form method="POST" action="<?php echo RELATIVE_PATH;?>/dashboard/cadastroProduto" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nome">Nome do Produto</label>
            <input type="text" id="nome" name="nome" placeholder="Ex: Headset Imersivo X-9" required>
        </div>

        <div class="form-group">
            <label for="valor">Valor (R$)</label>
            <input type="number" id="valor" name="valor" step="0.01" min="0" placeholder="0.00" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição Detalhada</label>
            <textarea id="descricao" name="descricao" rows="4"
                placeholder="Detalhes técnicos, materiais e benefícios do produto..." required></textarea>
        </div>

        <div class="form-group">
            <label>Imagem do Produto</label>
            <div class="file-upload-wrapper" onclick="document.getElementById('imagem').click()">
                <span class="file-upload-icon">⬆️</span>
                <span class="file-upload-label">Clique para selecionar o arquivo</span>
                <input type="file" id="imagem" name="imagem" accept="image/*" onchange="updateFileName(this)">
                <span id="file-name-display" class="file-name">Nenhum arquivo selecionado.</span>
            </div>
        </div>

        <button type="submit" class="submit-button">
            CADASTRAR PRODUTO
        </button>
    </form>
</div>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Produto - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/Produto/styleproduto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-package'></i> Cadastro de Produto</h1>
            <p>Adicione novos produtos médicos ao sistema</p>
        </div>

        <form method="POST" enctype="multipart/form-data">
            <div class="section-title">Informações Básicas</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome">Nome do Produto *</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="input-group">
                    <label for="codigo">Código/SKU *</label>
                    <input type="text" id="codigo" name="codigo" required>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="categoria">Categoria *</label>
                    <select id="categoria" name="categoria" required>
                        <option value="">Selecione</option>
                        <option value="Medicamentos">Medicamentos</option>
                        <option value="Material Cirúrgico">Material Cirúrgico</option>
                        <option value="Equipamentos">Equipamentos Médicos</option>
                        <option value="Descartáveis">Descartáveis</option>
                        <option value="Instrumentos">Instrumentos</option>
                        <option value="Insumos">Insumos Hospitalares</option>
                        <option value="Outros">Outros</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca" name="marca">
                </div>
            </div>

            <div class="form-row">
                <div class="input-group full-width">
                    <label for="descricao">Descrição</label>
                    <textarea id="descricao" name="descricao" placeholder="Descrição detalhada do produto..."></textarea>
                </div>
            </div>

            <div class="section-title">Estoque e Preços</div>

            <div class="form-row">
                <div class="input-group">
                    <label for="quantidade">Quantidade em Estoque *</label>
                    <input type="number" id="quantidade" name="quantidade" min="0" required>
                </div>
                <div class="input-group">
                    <label for="unidade">Unidade de Medida *</label>
                    <select id="unidade" name="unidade" required>
                        <option value="">Selecione</option>
                        <option value="UN">Unidade</option>
                        <option value="CX">Caixa</option>
                        <option value="KG">Quilograma</option>
                        <option value="G">Grama</option>
                        <option value="L">Litro</option>
                        <option value="ML">Mililitro</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="preco_custo">Preço de Custo (R$)</label>
                    <input type="number" id="preco_custo" name="preco_custo" step="0.01" min="0" placeholder="0,00">
                </div>
                <div class="input-group">
                    <label for="preco_venda">Preço de Venda (R$) *</label>
                    <input type="number" id="preco_venda" name="preco_venda" step="0.01" min="0" placeholder="0,00" required>
                </div>
            </div>

            <div class="section-title">Informações Complementares</div>

            <div class="form-row">
                <div class="input-group">
                    <label for="fornecedor">Fornecedor</label>
                    <input type="text" id="fornecedor" name="fornecedor">
                </div>
                <div class="input-group">
                    <label for="validade">Data de Validade</label>
                    <input type="date" id="validade" name="validade">
                </div>
            </div>

            <div class="form-row">
                <div class="input-group full-width file-upload">
                    <label>Imagem do Produto</label>
                    <input type="file" id="imagem" name="imagem" accept="image/*">
                    <div class="file-upload-label">
                        <i class='bx bx-cloud-upload'></i>
                        <div class="file-upload-text">
                            <p>Clique para fazer upload</p>
                            <p>PNG, JPG ou JPEG (máx. 5MB)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group full-width">
                    <label for="observacoes">Observações</label>
                    <textarea id="observacoes" name="observacoes" placeholder="Informações adicionais sobre o produto..."></textarea>
                </div>
            </div>

            <div class="btn-container">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const fileInput = document.getElementById('imagem');
        const fileLabel = document.querySelector('.file-upload-label');
        
        fileInput.addEventListener('change', function(e) {
            if (this.files && this.files[0]) {
                const fileName = this.files[0].name;
                fileLabel.querySelector('.file-upload-text p:first-child').textContent = fileName;
            }
        });
    </script>
</body>
</html>
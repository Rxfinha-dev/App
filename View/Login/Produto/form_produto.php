<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Produto - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-package'></i> Cadastro de Produto</h1>
            <p>Adicione novos produtos médicos ao sistema</p>
        </div>
        <form>
            <div class="section-title">Informações Básicas</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome_prod">Nome do Produto *</label>
                    <input type="text" id="nome_prod" required>
                </div>
                <div class="input-group">
                    <label for="codigo">Código/SKU *</label>
                    <input type="text" id="codigo" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="categoria">Categoria *</label>
                    <select id="categoria" required>
                        <option value="">Selecione</option>
                        <option value="Medicamentos">Medicamentos</option>
                        <option value="Material Cirúrgico">Material Cirúrgico</option>
                        <option value="Equipamentos">Equipamentos Médicos</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="marca">Marca</label>
                    <input type="text" id="marca">
                </div>
            </div>
            
            <div class="section-title">Estoque e Preços</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="quantidade">Quantidade em Estoque *</label>
                    <input type="number" id="quantidade" min="0" required>
                </div>
                <div class="input-group">
                    <label for="preco_venda">Preço de Venda (R$) *</label>
                    <input type="number" id="preco_venda" step="0.01" min="0" placeholder="0,00" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group full-width file-upload">
                    <label>Imagem do Produto</label>
                    <input type="file" accept="image/*">
                    <div class="file-upload-label">
                        <i class='bx bx-cloud-upload'></i>
                        <div class="file-upload-text">
                            <p>Clique para fazer upload</p>
                            <p>PNG, JPG ou JPEG (máx. 5MB)</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="btn-container">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            </div>
        </form>
    </div>

</body>
</html>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Médico - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-plus-medical'></i> Cadastro de Médico</h1>
            <p>Preencha os dados do profissional de saúde</p>
        </div>
        <form>
            <div class="section-title">Dados Pessoais</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome_med">Nome Completo *</label>
                    <input type="text" id="nome_med" required>
                </div>
                <div class="input-group">
                    <label for="cpf_med">CPF *</label>
                    <input type="text" id="cpf_med" placeholder="000.000.000-00" required>
                </div>
            </div>
            
            <div class="section-title">Dados Profissionais</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="crm">CRM *</label>
                    <input type="text" id="crm" placeholder="0000000" required>
                </div>
                <div class="input-group">
                    <label for="uf_crm">UF do CRM *</label>
                    <select id="uf_crm" required>
                        <option value="">Selecione</option>
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="MG">Minas Gerais</option>
                    </select>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="especialidade">Especialidade *</label>
                    <select id="especialidade" required>
                        <option value="">Selecione</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="titulo">Título Acadêmico</label>
                    <select id="titulo">
                        <option value="">Selecione</option>
                        <option value="Graduação">Graduação</option>
                        <option value="Especialização">Especialização</option>
                        <option value="Mestrado">Mestrado</option>
                        <option value="Doutorado">Doutorado</option>
                    </select>
                </div>
            </div>
            
            <div class="btn-container">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar Médico</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
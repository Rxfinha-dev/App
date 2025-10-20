<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Paciente - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-user-plus'></i> Cadastro de Paciente</h1>
            <p>Preencha os dados do paciente abaixo</p>
        </div>
        <form>
            <div class="section-title">Dados Pessoais</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome_pac">Nome Completo *</label>
                    <input type="text" id="nome_pac" required>
                </div>
                <div class="input-group">
                    <label for="cpf_pac">CPF *</label>
                    <input type="text" id="cpf_pac" placeholder="000.000.000-00" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="data_nasc_pac">Data de Nascimento *</label>
                    <input type="date" id="data_nasc_pac" required>
                </div>
                <div class="input-group">
                    <label for="sexo_pac">Sexo *</label>
                    <select id="sexo_pac" required>
                        <option value="">Selecione</option>
                        <option value="M">Masculino</option>
                        <option value="F">Feminino</option>
                        <option value="O">Outro</option>
                    </select>
                </div>
            </div>
            
            <div class="section-title">Contato</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="tel_pac">Telefone *</label>
                    <input type="tel" id="tel_pac" placeholder="(00) 00000-0000" required>
                </div>
                <div class="input-group">
                    <label for="email_pac">E-mail</label>
                    <input type="email" id="email_pac">
                </div>
            </div>
            
            <div class="section-title">Endereço</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="cep_pac">CEP</label>
                    <input type="text" id="cep_pac" placeholder="00000-000">
                </div>
                <div class="input-group">
                    <label for="logr_pac">Logradouro</label>
                    <input type="text" id="logr_pac">
                </div>
            </div>
            
            <div class="btn-container">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar Paciente</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
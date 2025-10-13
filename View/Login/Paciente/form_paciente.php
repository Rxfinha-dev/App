<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Paciente - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/Paciente/stylepaciente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-user-plus'></i> Cadastro de Paciente</h1>
            <p>Preencha os dados do paciente abaixo</p>
        </div>

        <form method="POST">
            <div class="section-title">Dados Pessoais</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome">Nome Completo *</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="input-group">
                    <label for="cpf">CPF *</label>
                    <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="data_nascimento">Data de Nascimento *</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
                <div class="input-group">
                    <label for="sexo">Sexo *</label>
                    <select id="sexo" name="sexo" required>
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
                    <label for="telefone">Telefone *</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>
            </div>

            <div class="section-title">Endereço</div>

            <div class="form-row">
                <div class="input-group">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" placeholder="00000-000">
                </div>
                <div class="input-group">
                    <label for="logradouro">Logradouro</label>
                    <input type="text" id="logradouro" name="logradouro">
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero">
                </div>
                <div class="input-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" name="complemento">
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro">
                </div>
                <div class="input-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
            </div>

            <div class="section-title">Informações Adicionais</div>

            <div class="form-row">
                <div class="input-group full-width">
                    <label for="observacoes">Observações</label>
                    <textarea id="observacoes" name="observacoes" placeholder="Alergias, restrições alimentares, histórico médico relevante..."></textarea>
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
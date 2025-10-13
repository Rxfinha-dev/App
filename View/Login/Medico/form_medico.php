<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Médico - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/Medico/stylemedico.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-plus-medical'></i> Cadastro de Médico</h1>
            <p>Preencha os dados do profissional de saúde</p>
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

            <div class="section-title">Dados Profissionais</div>

            <div class="form-row">
                <div class="input-group">
                    <label for="crm">CRM *</label>
                    <input type="text" id="crm" name="crm" placeholder="0000000" required>
                </div>
                <div class="input-group">
                    <label for="uf_crm">UF do CRM *</label>
                    <select id="uf_crm" name="uf_crm" required>
                        <option value="">Selecione</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="especialidade">Especialidade *</label>
                    <select id="especialidade" name="especialidade" required>
                        <option value="">Selecione</option>
                        <option value="Cardiologia">Cardiologia</option>
                        <option value="Dermatologia">Dermatologia</option>
                        <option value="Endocrinologia">Endocrinologia</option>
                        <option value="Gastroenterologia">Gastroenterologia</option>
                        <option value="Ginecologia">Ginecologia e Obstetrícia</option>
                        <option value="Neurologia">Neurologia</option>
                        <option value="Oftalmologia">Oftalmologia</option>
                        <option value="Ortopedia">Ortopedia</option>
                        <option value="Otorrinolaringologia">Otorrinolaringologia</option>
                        <option value="Pediatria">Pediatria</option>
                        <option value="Pneumologia">Pneumologia</option>
                        <option value="Psiquiatria">Psiquiatria</option>
                        <option value="Urologia">Urologia</option>
                        <option value="Clínica Geral">Clínica Geral</option>
                        <option value="Cirurgia Geral">Cirurgia Geral</option>
                        <option value="Anestesiologia">Anestesiologia</option>
                        <option value="Radiologia">Radiologia</option>
                        <option value="Patologia">Patologia</option>
                        <option value="Medicina Intensiva">Medicina Intensiva</option>
                        <option value="Geriatria">Geriatria</option>
                        <option value="Reumatologia">Reumatologia</option>
                        <option value="Oncologia">Oncologia</option>
                        <option value="Nefrologia">Nefrologia</option>
                        <option value="Infectologia">Infectologia</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="titulo">Título Acadêmico</label>
                    <select id="titulo" name="titulo">
                        <option value="">Selecione</option>
                        <option value="Graduação">Graduação</option>
                        <option value="Especialização">Especialização</option>
                        <option value="Mestrado">Mestrado</option>
                        <option value="Doutorado">Doutorado</option>
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
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="section-title">Endereço do Consultório</div>

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
                    <textarea id="observacoes" name="observacoes" placeholder="Informações adicionais sobre o profissional..."></textarea>
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
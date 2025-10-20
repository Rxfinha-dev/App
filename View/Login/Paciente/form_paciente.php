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
            <p>Preencha os dados completos do paciente para registro no sistema</p>
        </div>
        <form>
            <div class="section-title">Dados Pessoais</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome_pac">Nome Completo *</label>
                    <input type="text" id="nome_pac" required>
                </div>
                <div class="input-group">
                    <label for="nome_social">Nome Social</label>
                    <input type="text" id="nome_social">
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="cpf_pac">CPF *</label>
                    <input type="text" id="cpf_pac" placeholder="000.000.000-00" required>
                </div>
                <div class="input-group">
                    <label for="rg_pac">RG</label>
                    <input type="text" id="rg_pac" placeholder="00.000.000-0">
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
            
            <div class="form-row">
                <div class="input-group">
                    <label for="estado_civil">Estado Civil</label>
                    <select id="estado_civil">
                        <option value="">Selecione</option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viúvo(a)">Viúvo(a)</option>
                        <option value="União Estável">União Estável</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="nacionalidade">Nacionalidade</label>
                    <input type="text" id="nacionalidade" value="Brasileira">
                </div>
            </div>
            
            <div class="section-title">Contato</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="tel_pac">Telefone Principal *</label>
                    <input type="tel" id="tel_pac" placeholder="(00) 00000-0000" required>
                </div>
                <div class="input-group">
                    <label for="tel_sec">Telefone Secundário</label>
                    <input type="tel" id="tel_sec" placeholder="(00) 00000-0000">
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="email_pac">E-mail *</label>
                    <input type="email" id="email_pac" required>
                </div>
                <div class="input-group">
                    <label for="contato_emergencia">Contato de Emergência *</label>
                    <input type="tel" id="contato_emergencia" placeholder="(00) 00000-0000" required>
                </div>
            </div>
            
            <div class="section-title">Endereço</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="cep_pac">CEP *</label>
                    <input type="text" id="cep_pac" placeholder="00000-000" required>
                </div>
                <div class="input-group">
                    <label for="logr_pac">Logradouro *</label>
                    <input type="text" id="logr_pac" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="numero">Número *</label>
                    <input type="text" id="numero" required>
                </div>
                <div class="input-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" id="complemento" placeholder="Apto, Bloco, etc.">
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="bairro">Bairro *</label>
                    <input type="text" id="bairro" required>
                </div>
                <div class="input-group">
                    <label for="cidade">Cidade *</label>
                    <input type="text" id="cidade" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="estado">Estado *</label>
                    <select id="estado" required>
                        <option value="">Selecione</option>
                        <option value="SP">São Paulo</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="MG">Minas Gerais</option>
                        <!-- Adicionar outros estados -->
                    </select>
                </div>
            </div>
            
            <div class="section-title">Informações Médicas</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="tipo_sanguineo">Tipo Sanguíneo</label>
                    <select id="tipo_sanguineo">
                        <option value="">Selecione</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="plano_saude">Plano de Saúde</label>
                    <input type="text" id="plano_saude" placeholder="Nome do plano">
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="numero_carteirinha">Número da Carteirinha</label>
                    <input type="text" id="numero_carteirinha">
                </div>
                <div class="input-group">
                    <label for="validade_plano">Validade do Plano</label>
                    <input type="date" id="validade_plano">
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group full-width">
                    <label for="alergias">Alergias</label>
                    <textarea id="alergias" placeholder="Descreva alergias conhecidas"></textarea>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group full-width">
                    <label for="medicamentos_uso">Medicamentos em Uso</label>
                    <textarea id="medicamentos_uso" placeholder="Liste os medicamentos que o paciente utiliza regularmente"></textarea>
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group full-width">
                    <label for="observacoes">Observações Gerais</label>
                    <textarea id="observacoes" placeholder="Informações adicionais relevantes"></textarea>
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
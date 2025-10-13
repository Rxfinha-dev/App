<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Serviço - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/Servico/styleservico.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-briefcase-alt-2'></i> Cadastro de Serviço</h1>
            <p>Configure os serviços médicos oferecidos pela clínica</p>
        </div>

        <form method="POST">
            <div class="section-title">Informações do Serviço</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome">Nome do Serviço *</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Consulta Cardiológica" required>
                </div>
                <div class="input-group">
                    <label for="codigo">Código do Serviço</label>
                    <input type="text" id="codigo" name="codigo" placeholder="Ex: CONS-CARD-001">
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="categoria">Categoria *</label>
                    <select id="categoria" name="categoria" required>
                        <option value="">Selecione</option>
                        <option value="Consulta Médica">Consulta Médica</option>
                        <option value="Exame">Exame</option>
                        <option value="Procedimento">Procedimento</option>
                        <option value="Cirurgia">Cirurgia</option>
                        <option value="Retorno">Retorno</option>
                        <option value="Avaliação">Avaliação</option>
                        <option value="Check-up">Check-up</option>
                        <option value="Emergência">Emergência</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="duracao">Duração (minutos) *</label>
                    <input type="number" id="duracao" name="duracao" min="0" step="15" placeholder="60" required>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group full-width">
                    <label for="descricao">Descrição do Serviço</label>
                    <textarea id="descricao" name="descricao" placeholder="Descreva detalhadamente o que está incluído neste serviço..."></textarea>
                </div>
            </div>

            <div class="section-title">Valores</div>

            <div class="form-row">
                <div class="input-group">
                    <label for="valor">Valor do Serviço (R$) *</label>
                    <input type="number" id="valor" name="valor" step="0.01" min="0" placeholder="0,00" required>
                </div>
                <div class="input-group">
                    <label for="valor_retorno">Valor de Retorno (R$)</label>
                    <input type="number" id="valor_retorno" name="valor_retorno" step="0.01" min="0" placeholder="0,00">
                </div>
            </div>

            <div class="section-title">Disponibilidade</div>

            <div class="form-row">
                <div class="input-group full-width">
                    <label>Dias da Semana Disponíveis *</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="seg" name="dias[]" value="Segunda">
                            <label for="seg">Segunda-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="ter" name="dias[]" value="Terça">
                            <label for="ter">Terça-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="qua" name="dias[]" value="Quarta">
                            <label for="qua">Quarta-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="qui" name="dias[]" value="Quinta">
                            <label for="qui">Quinta-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="sex" name="dias[]" value="Sexta">
                            <label for="sex">Sexta-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="sab" name="dias[]" value="Sábado">
                            <label for="sab">Sábado</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="dom" name="dias[]" value="Domingo">
                            <label for="dom">Domingo</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="horario_inicio">Horário de Início</label>
                    <input type="time" id="horario_inicio" name="horario_inicio">
                </div>
                <div class="input-group">
                    <label for="horario_fim">Horário de Término</label>
                    <input type="time" id="horario_fim" name="horario_fim">
                </div>
            </div>

            <div class="section-title">Configurações Adicionais</div>

            <div class="form-row">
                <div class="input-group">
                    <label for="profissional">Profissional Responsável</label>
                    <select id="profissional" name="profissional">
                        <option value="">Selecione</option>
                        <option value="1">Dr. João Silva - CRM 12345</option>
                        <option value="2">Dra. Maria Santos - CRN 67890</option>
                        <option value="3">Dr. Pedro Costa - CRM 54321</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="sala">Sala/Local de Atendimento</label>
                    <input type="text" id="sala" name="sala" placeholder="Ex: Consultório 1">
                </div>
            </div>

            <div class="form-row">
                <div class="input-group">
                    <label for="status">Status *</label>
                    <select id="status" name="status" required>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                        <option value="Suspenso">Suspenso Temporariamente</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="vagas">Vagas por Horário</label>
                    <input type="number" id="vagas" name="vagas" min="1" value="1">
                </div>
            </div>

            <div class="form-row">
                <div class="input-group full-width">
                    <label for="observacoes">Observações</label>
                    <textarea id="observacoes" name="observacoes" placeholder="Informações adicionais, requisitos, preparações necessárias..."></textarea>
                </div>
            </div>

            <div class="btn-container">
                <button type="button" class="btn btn-secondary">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar Serviço</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
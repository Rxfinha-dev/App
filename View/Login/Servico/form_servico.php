<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Serviço - Sistema Médico</title>
    <link rel="stylesheet" href="/View/Login/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-form">
        <div class="header">
            <h1><i class='bx bx-briefcase-alt-2'></i> Cadastro de Serviço</h1>
            <p>Configure os serviços médicos oferecidos pela clínica</p>
        </div>
        <form>
            <div class="section-title">Informações do Serviço</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="nome_serv">Nome do Serviço *</label>
                    <input type="text" id="nome_serv" placeholder="Ex: Consulta Cardiológica" required>
                </div>
                <div class="input-group">
                    <label for="codigo_serv">Código do Serviço</label>
                    <input type="text" id="codigo_serv" placeholder="Ex: CONS-CARD-001">
                </div>
            </div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="categoria_serv">Categoria *</label>
                    <select id="categoria_serv" required>
                        <option value="">Selecione</option>
                        <option value="Consulta Médica">Consulta Médica</option>
                        <option value="Exame">Exame</option>
                        <option value="Procedimento">Procedimento</option>
                        <option value="Cirurgia">Cirurgia</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="duracao">Duração (minutos) *</label>
                    <input type="number" id="duracao" min="0" step="15" placeholder="60" required>
                </div>
            </div>
            
            <div class="section-title">Valores</div>
            
            <div class="form-row">
                <div class="input-group">
                    <label for="valor">Valor do Serviço (R$) *</label>
                    <input type="number" id="valor" step="0.01" min="0" placeholder="0,00" required>
                </div>
                <div class="input-group">
                    <label for="valor_retorno">Valor de Retorno (R$)</label>
                    <input type="number" id="valor_retorno" step="0.01" min="0" placeholder="0,00">
                </div>
            </div>
            
            <div class="section-title">Disponibilidade</div>
            
            <div class="form-row">
                <div class="input-group full-width">
                    <label>Dias da Semana Disponíveis *</label>
                    <div class="checkbox-group">
                        <div class="checkbox-item">
                            <input type="checkbox" id="seg">
                            <label for="seg">Segunda-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="ter">
                            <label for="ter">Terça-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="qua">
                            <label for="qua">Quarta-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="qui">
                            <label for="qui">Quinta-feira</label>
                        </div>
                        <div class="checkbox-item">
                            <input type="checkbox" id="sex">
                            <label for="sex">Sexta-feira</label>
                        </div>
                    </div>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Solicitações</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container my-5">
    <h2 class="mb-4">
        <i class="bi bi-clipboard-check me-2"></i>Minhas Solicitações
    </h2>

    <div id="alertaLimite" class="alert alert-info d-flex align-items-center mb-4">
        <i class="bi bi-info-circle me-3" style="font-size: 1.5rem;"></i>
        <div class="flex-grow-1">
            <strong>Limite mensal:</strong> 
            <span id="limiteTexto">Você pode fazer até 3 solicitações por mês.</span>
            <div class="progress mt-2" style="height: 8px;">
                <div id="limiteProgress" class="progress-bar" role="progressbar" style="width: 0%"></div>
            </div>
        </div>
    </div>

    <ul class="nav nav-tabs mb-4" id="solicitacoesTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="enviadas-tab" data-bs-toggle="tab" 
                    data-bs-target="#enviadas" type="button" role="tab">
                <i class="bi bi-send me-2"></i>Enviadas
                <span id="badgeEnviadas" class="badge bg-primary ms-2">0</span>
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="recebidas-tab" data-bs-toggle="tab" 
                    data-bs-target="#recebidas" type="button" role="tab">
                <i class="bi bi-inbox me-2"></i>Recebidas
                <span id="badgeRecebidas" class="badge bg-success ms-2">0</span>
            </button>
        </li>
    </ul>

    <div class="tab-content" id="solicitacoesTabContent">
        <div class="tab-pane fade show active" id="enviadas" role="tabpanel">
            <div id="listaEnviadas" class="row">
                <div class="col-12 text-center py-5">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Carregando...</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="recebidas" role="tabpanel">
            <div id="listaRecebidas" class="row">
                <div class="col-12 text-center py-5">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Carregando...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Aprovar Solicitação -->
<div class="modal fade" id="modalAprovar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-check-circle me-2"></i>Aprovar Solicitação
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="formAprovar">
                <div class="modal-body">
                    <p class="text-muted">Informe os dados para coleta do item:</p>

                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço para coleta *</label>
                        <input type="text" class="form-control" id="endereco" required
                                placeholder="Rua, número, bairro, cidade">
                        <div class="form-text">Onde o interessado pode buscar o item</div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="dataColeta" class="form-label">Data da coleta *</label>
                            <input type="date" class="form-control" id="dataColeta" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="horario" class="form-label">Horário *</label>
                            <input type="time" class="form-control" id="horario" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="observacoes" class="form-label">Observações</label>
                        <textarea class="form-control" id="observacoes" rows="3"
                                    placeholder="Ex: Tocar a campainha, ligar antes..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-check-circle me-2"></i>Aprovar e Enviar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal: Recusar Solicitação -->
<div class="modal fade" id="modalRecusar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-x-circle me-2"></i>Recusar Solicitação
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="formRecusar">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="motivoRecusa" class="form-label">Motivo (opcional)</label>
                        <textarea class="form-control" id="motivoRecusa" rows="3"
                                    placeholder="Explique o motivo da recusa..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-x-circle me-2"></i>Confirmar Recusa
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    #notificacaoToast {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1055;
    }
</style>

<div id="notificacaoToast" class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000">
    <div class="d-flex">
        <div class="toast-body">
            <i id="toastIcon" class="bi me-2"></i>
            <span id="toastMensagem"></span>
        </div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
</div>

</body>
</html>
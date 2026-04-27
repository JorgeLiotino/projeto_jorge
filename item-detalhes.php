<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container my-5">
    <div class="row">
        <!-- Galeria de imagens -->
        <div class="col-lg-6 mb-4 pt-5">
            <div class="card">
                <div class="card-body p-0">
                    
                    <div id="carouselItem" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item {{#if @first}}active{{/if}}">
                                <img src="{{this}}" class="d-block w-100" alt="Imagem do item" 
                                     style="height: 400px; object-fit: cover;">
                            </div>
                            
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselItem" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselItem" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                        
                    </div>
                    
                    <div class="bg-light d-flex align-items-center justify-content-center" 
                         style="height: 400px;">
                        <i class="bi bi-image" style="font-size: 5rem; color: #ccc;"></i>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Informações do item -->
        <div class="col-lg-6 pt-5">
            <div class="card">
                <div class="card-body">
                    <!-- Status -->
                    <div class="mb-3">
                        
                        <span class="badge bg-success">
                            <i class="bi bi-check-circle me-1"></i>Disponível
                        </span>
                        
                        <span class="badge bg-warning">
                            <i class="bi bi-clock me-1"></i>Reservado
                        </span>
                        
                        <span class="badge bg-secondary">
                            <i class="bi bi-x-circle me-1"></i>Doado
                        </span>
                        
                        
                        <span class="badge bg-primary ms-2"></span>
                    </div>

                    <!-- Título -->
                    <h2 class="mb-3"></h2>

                    <!-- Informações básicas -->
                    <div class="mb-4">
                        <div class="row g-3">
                            
                            <div class="col-6">
                                <small class="text-muted d-block">Tamanho/Idade</small>
                                <strong></strong>
                            </div>
                            
                            
                            <div class="col-6">
                                <small class="text-muted d-block">Estado</small>
                                <strong>
                                    ✨ Novo
                                    ⭐ Seminovo
                                    👍 Usado
                                </strong>
                            </div>
                            
                            <div class="col-12">
                                <small class="text-muted d-block">Publicado em</small>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Descrição -->
                    <div class="mb-4">
                        <h5 class="mb-2">Descrição</h5>
                        <p class="text-muted"></p>
                    </div>

                    <!-- Informações do doador -->
                    <div class="card bg-light mb-4">
                        <div class="card-body">
                            <h6 class="mb-2">
                                <i class="bi bi-person-circle me-2"></i>
                                Informações do doador
                            </h6>
                            <p class="mb-1"></p>
                            <p class="mb-0 text-muted small">
                                <i class="bi bi-geo-alt-fill me-1"></i>
                                Localização será compartilhada após aprovação
                            </p>
                        </div>
                    </div>
                        <!-- Botões para o próprio doador -->
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="/editar-item/{{item.id}}" class="btn btn-primary flex-fill">
                                <i class="bi bi-pencil me-2"></i>Editar
                            </a>
                            <button class="btn btn-outline-danger flex-fill" onclick="deletarItem('{{item.id}}')">
                                <i class="bi bi-trash me-2"></i>Excluir
                            </button>
                        </div>
                        <!-- Botões para interessados -->
                        <button class="btn btn-success btn-lg w-100 mb-2" onclick="abrirModalSolicitacao()">
                            <i class="bi bi-hand-thumbs-up me-2"></i>
                            Tenho interesse neste item
                        </button>
                        <p class="text-muted small text-center mb-0">
                            <i class="bi bi-info-circle me-1"></i>
                            Limite: 3 solicitações por mês
                        </p>
                        <button class="btn btn-warning btn-lg w-100" disabled>
                            <i class="bi bi-clock me-2"></i>
                            Item reservado
                        </button>
                        <button class="btn btn-secondary btn-lg w-100" disabled>
                            <i class="bi bi-x-circle me-2"></i>
                            Item já foi doado
                        </button>
                        
                    <!-- Usuário não logado -->
                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        <a href="/login" class="alert-link">Faça login</a> para solicitar este item
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Itens relacionados -->
    <div class="mt-5">
        <h3 class="mb-4">Outros itens da categoria</h3>
        <div class="row" id="itensRelacionados">
            <!-- Será preenchido via JavaScript -->
        </div>
    </div>
</section>

<!-- Modal: Solicitar Item -->
<div class="modal fade" id="modalSolicitacao" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="bi bi-hand-thumbs-up me-2"></i>Solicitar Item
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <form id="formSolicitacao">
        <div class="modal-body">
          <div class="alert alert-info">
            <i class="bi bi-info-circle me-2"></i>
            <strong>Como funciona:</strong>
            <ol class="mb-0 mt-2">
              <li>Você envia a solicitação para o doador</li>
              <li>O doador analisa e pode aprovar ou recusar</li>
              <li>Se aprovado, você recebe o endereço e horário para coleta</li>
              <li>Após a coleta, o doador confirma a doação</li>
            </ol>
          </div>

          <div class="alert alert-warning">
            <i class="bi bi-exclamation-triangle me-2"></i>
            <strong>Limite mensal:</strong> Você pode fazer até 3 solicitações por mês.
          </div>

          <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem para o doador (opcional)</label>
            <textarea class="form-control" id="mensagem" rows="3"
                      placeholder="Conte um pouco sobre você e por que precisa deste item..."></textarea>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="concordo" required>
            <label class="form-check-label" for="concordo">
              Concordo em buscar o item no local e horário combinados
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">
            <i class="bi bi-send me-2"></i>Enviar Solicitação
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
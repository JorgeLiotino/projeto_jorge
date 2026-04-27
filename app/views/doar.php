<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doar Item</title>
    <!-- Bootstrap framework (para layout bonito) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Suas fontes -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Seu CSS consolidado -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body p-4">
                    <h2 class="mb-4">
                        <i class="bi bi-heart-fill text-warning me-2"></i>
                        Cadastrar Item para Doação
                    </h2>
                    
                    
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    
                    
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    

                    <form id="formDoarItem" enctype="multipart/form-data">
                        <!-- Nome do item -->
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome do item *</label>
                            <input type="text" class="form-control" id="nome" name="nome" required
                                   placeholder="Ex: Vestido infantil rosa">
                            <div class="form-text">Seja específico para ajudar na busca</div>
                        </div>

                        <!-- Categoria -->
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria *</label>
                            <select class="form-select" id="categoria" name="categoria" required>
                                <option value="">Selecione uma categoria</option>
                                <option value="roupas">👕 Roupas</option>
                                <option value="brinquedos">🎮 Brinquedos</option>
                                <option value="livros">📚 Livros</option>
                                <option value="calcados">👟 Calçados</option>
                                <option value="acessorios">🎒 Acessórios</option>
                                <option value="outros">📦 Outros</option>
                            </select>
                        </div>

                        <!-- Tamanho/Idade -->
                        <div class="mb-3">
                            <label for="tamanho" class="form-label">Tamanho/Idade recomendada</label>
                            <input type="text" class="form-control" id="tamanho" name="tamanho"
                                   placeholder="Ex: 4 anos, tamanho M, 28">
                            <div class="form-text">Opcional - ajuda quem está procurando</div>
                        </div>

                        <!-- Estado de conservação -->
                        <div class="mb-3">
                            <label for="estado" class="form-label">Estado de conservação *</label>
                            <select class="form-select" id="estado" name="estado" required>
                                <option value="">Selecione o estado</option>
                                <option value="novo">✨ Novo (nunca usado)</option>
                                <option value="seminovo">⭐ Seminovo (pouco uso)</option>
                                <option value="usado">👍 Usado (bom estado)</option>
                            </select>
                        </div>

                        <!-- Descrição -->
                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição *</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="4" required
                                      placeholder="Descreva o item: cores, características, defeitos (se houver), etc."></textarea>
                            <div class="form-text">Mínimo 20 caracteres</div>
                        </div>

                        <!-- Upload de imagens -->
                        <div class="mb-4">
                            <label for="imagens" class="form-label">Fotos do item</label>
                            <input type="file" class="form-control" id="imagens" name="imagens" 
                                   accept="image/*" multiple>
                            <div class="form-text">
                                <i class="bi bi-info-circle me-1"></i>
                                Você pode adicionar até 5 fotos (opcional)
                            </div>
                            <div id="preview-imagens" class="mt-3 d-flex gap-2 flex-wrap"></div>
                        </div>

                        <!-- Localização (será preenchida automaticamente do perfil do usuário) -->
                        <div class="mb-4">
                            <div class="alert alert-info">
                                <i class="bi bi-geo-alt-fill me-2"></i>
                                <strong>Localização:</strong> A localização será baseada no seu perfil.
                                Você poderá ser contatado através da plataforma.
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="d-flex gap-3">
                            <button type="submit" class="btn btn-primary btn-lg" id="btnSubmit">
                                <i class="bi bi-check-circle me-2"></i>
                                Cadastrar Doação
                            </button>
                            <a href="/" class="btn btn-outline-secondary btn-lg">
                                <i class="bi bi-x-circle me-2"></i>
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Dicas -->
            <div class="card mt-4 bg-light border-0">
                <div class="card-body">
                    <h5 class="mb-3">
                        <i class="bi bi-lightbulb-fill text-warning me-2"></i>
                        Dicas para uma boa doação
                    </h5>
                    <ul class="mb-0">
                        <li>Tire fotos claras e bem iluminadas do item</li>
                        <li>Seja honesto sobre o estado de conservação</li>
                        <li>Descreva detalhes importantes (cores, tamanhos, defeitos)</li>
                        <li>Responda rapidamente às solicitações</li>
                        <li>Combine um local seguro para a entrega</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
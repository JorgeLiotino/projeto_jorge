<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buscar</title>
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
    <h2 class="mb-4">
        <i class="bi bi-search me-2"></i>
        Buscar Itens para Doação
    </h2>

    <!-- Filtros -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Buscar por nome</label>
                    <input type="text" class="form-control" id="buscarNome" 
                           placeholder="Digite o que procura...">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Categoria</label>
                    <select class="form-select" id="filtroCategoria">
                        <option value="">Todas</option>
                        <option value="roupas">Roupas</option>
                        <option value="brinquedos">Brinquedos</option>
                        <option value="livros">Livros</option>
                        <option value="calcados">Calçados</option>
                        <option value="acessorios">Acessórios</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Estado</label>
                    <select class="form-select" id="filtroEstado">
                        <option value="">Todos</option>
                        <option value="novo">Novo</option>
                        <option value="seminovo">Seminovo</option>
                        <option value="usado">Usado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label class="form-label">&nbsp;</label>
                    <button class="btn btn-primary w-100" onclick="buscarItens()">
                        <i class="bi bi-search me-2"></i>Buscar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Resultados -->
    <div id="resultadosBusca">
        <div class="text-center py-5">
            <div class="spinner-border text-primary" role="status"></div>
            <p class="mt-3 text-muted">Carregando itens...</p>
        </div>
    </div>
</section>
</body>
</html>
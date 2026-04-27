<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Itens</title>
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
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>
            <i class="bi bi-box-seam me-2"></i>
            Meus Itens Doados
        </h2>
        <a href="doar.php" class="btn btn-primary">
            <i class="bi bi-plus-circle me-2"></i>
            Adicionar Item
        </a>
    </div>

    <!-- Filtros -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-md-4">
                    <select class="form-select" id="filtroStatus">
                        <option value="">Todos os status</option>
                        <option value="disponivel">Disponível</option>
                        <option value="reservado">Reservado</option>
                        <option value="doado">Doado</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="form-select" id="filtroCategoria">
                        <option value="">Todas as categorias</option>
                        <option value="roupas">Roupas</option>
                        <option value="brinquedos">Brinquedos</option>
                        <option value="livros">Livros</option>
                        <option value="calcados">Calçados</option>
                        <option value="acessorios">Acessórios</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-outline-primary w-100">
                        <i class="bi bi-search me-2"></i>Filtrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Lista de itens -->
    <div id="listaItens">
        <div class="text-center py-5">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Carregando...</span>
            </div>
        </div>
    </div>
</section>
</body>
</html>
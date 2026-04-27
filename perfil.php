<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meu Perfil</title>

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
  <div class="container mt-5">
  <h2 class="mb-4 text-center">
    <i class="bi bi-person-circle me-2"></i>Meu Perfil
  </h2>

  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div id="perfilAlert"></div>

      <div class="bg-white p-4 rounded shadow-sm text-center">
        
        <!-- Visualização -->
        <div id="perfilView">
          <p><strong>Nome:</strong> <span id="viewName"></span></p>
          <p><strong>Email:</strong> <span id="viewEmail"></span></p>

          <div class="text-end mt-4">
            <button id="editBtn" class="btn btn-primary">
              <i class="bi bi-pencil-square me-1"></i>Editar perfil
            </button>
            <a href="/" class="btn btn-outline-secondary">
              <i class="bi bi-arrow-left me-1"></i>Voltar
            </a>
          </div>
        </div>

        <!-- Formulário de edição -->
        <form id="perfilForm" class="d-none mt-3 text-start">
          <div class="text-center mb-3">
            <input type="file" id="photoInput" accept="image/*" class="form-control mt-2">
            <div class="form-text">Selecione uma nova foto (opcional)</div>
          </div>

          <div class="mb-3">
            <label for="displayName" class="form-label">Nome completo</label>
            <input type="text" id="displayName" class="form-control" value="{{user.displayName}}" required>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" value="{{user.email}}" readonly>
            <div class="form-text">O email não pode ser alterado.</div>
          </div>

          <div class="d-flex justify-content-between align-items-center mt-4 flex-wrap gap-2">
            <div>
              <button type="submit" class="btn btn-success">
                <span id="saveSpinner" class="spinner-border spinner-border-sm d-none me-2"></span>
                Salvar alterações
              </button>
              <button type="button" id="cancelEditBtn" class="btn btn-outline-secondary ms-2">
                Cancelar
              </button>
            </div>

            <!-- 🗑️ Botão de excluir conta -->
            <button type="button" id="deleteAccountBtn" class="btn btn-danger">
              <i class="bi bi-trash-fill me-1"></i>Excluir conta
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="alert alert-warning text-center mt-5">
    Você precisa estar logado para acessar esta página. <a href="/login" class="fw-semibold">Fazer login</a>
  </div>
  
</div>

</body>
</html>
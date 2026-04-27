<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Desapega Kids</title>
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

    <div class="auth-container">
        <div class="auth-form">
            <h2 class="mb-4 text-center">Fazer Login</h2>
            
            <!-- Alert (só aparece se erro) -->
            <div id="loginAlert" class="alert alert-danger d-none" role="alert">
                Erro ao fazer login!
            </div>
            
            <!-- Formulário local (não envia para servidor) -->
            <form id="loginForm" onsubmit="handleLogin(event)">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" 
                           class="form-control" 
                           id="email" 
                           placeholder="seu@email.com" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" 
                           class="form-control" 
                           id="password" 
                           placeholder="Sua senha" 
                           required>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Entrar
                </button>
            </form>

            <div class="divider">
                <span>ou</span>
            </div>

            <button type="button" class="btn btn-outline-primary w-100 mb-3">
                <i class="bi bi-google me-2"></i> Continuar com Google
            </button>

            <!-- Links úteis -->
            <div class="text-center mt-4">
                <p class="mb-2">
                    <a href="#" class="text-decoration-none">Esqueceu sua senha?</a>
                </p>
                <p class="mb-0">
                    Não tem conta? 
                    <!-- Link direto para página HTML de registro -->
                    <a href="register.php" class="text-decoration-none fw-semibold">
                        Criar conta
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
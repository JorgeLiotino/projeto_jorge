<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Desapega Kids</title>

    <!-- Bootstrap -->
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
            
    <div id="registerAlert"></div>

<h2 class="mb-4 text-center">Criar Conta</h2>

<form id="registerForm">
    <div class="mb-3">
        <label for="name" class="form-label">Nome completo</label>
        <input type="text" class="form-control" id="name" placeholder="Seu nome" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="seu@email.com" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Mínimo 6 caracteres" required minlength="6">
        <div class="form-text">A senha deve ter pelo menos 6 caracteres.</div>
    </div>

    <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirmar senha</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Digite a senha novamente" required>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="acceptTerms" required>
        <label class="form-check-label" for="acceptTerms">
            Aceito os <a href="/terms" target="_blank">termos de uso</a> e <a href="/privacy" target="_blank">política de privacidade</a>
        </label>
    </div>

    <button type="submit" class="btn btn-primary w-100" id="registerBtn">
        <span id="registerSpinner" class="spinner-border spinner-border-sm d-none me-2"></span>
        Criar conta
    </button>
</form>

<div class="divider"><span>ou</span></div>

<button type="button" class="btn btn-google w-100" id="googleRegisterBtn">
    <i class="bi bi-google me-2"></i>
    Continuar com Google
</button>

    </div>
</div>

<div class="text-center mt-4">
    <p class="mb-0">Já tem conta? <a href="/login" class="text-decoration-none fw-semibold">Fazer login</a></p>
</div>
</body>
</html>


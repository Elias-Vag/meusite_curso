<section class="container py-5">
    <h1 class="text-center mb-5">Acesso ao Sistema</h1>

    <div class="row align-items-center g-4">
        <!-- Texto de apresentação -->
        <div class="col-lg-6">
            <h2 class="display-6 fw-bold mb-3">Bem-vindo de volta!</h2>
            <p class="lead text-muted mb-4">
                Acesse sua conta para gerenciar projetos, acompanhar solicitações e aproveitar todos os recursos disponíveis em nossa plataforma.
            </p>
            <p class="text-muted mb-4">
                Caso ainda não tenha uma conta, você pode se cadastrar facilmente e começar a usar nossos serviços agora mesmo.
            </p>
            <div class="d-flex gap-2">
                <a class="btn btn-primary btn-lg" href="#"><i class="bi bi-person-plus me-1"></i> Criar Conta</a>
                <a class="btn btn-outline-secondary btn-lg" href="#"><i class="bi bi-info-circle me-1"></i> Saiba Mais</a>
            </div>
        </div>

        <!-- Formulário de Login -->
        <div class="col-lg-6">
            <div class="card shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h4 class="fw-semibold mb-4 text-center">Entrar na sua conta</h4>
                    <form action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                        </div>

                        <div class="mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="lembrar">
                                <label class="form-check-label" for="lembrar">
                                    Lembrar-me
                                </label>
                            </div>
                            <a href="#" class="text-decoration-none small text-primary">Esqueceu a senha?</a>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Entrar
                            </button>
                        </div>

                        <div class="text-center text-muted small">
                            Ainda não tem conta? <a href="#" class="text-decoration-none text-primary">Cadastre-se</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Informações adicionais -->
    <div class="row g-4 mt-5 text-center">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="icon-pill bg-primary-subtle text-primary mb-3"><i class="bi bi-shield-lock"></i></div>
                    <h5 class="fw-semibold mb-2">Segurança</h5>
                    <p class="text-muted mb-0">Seus dados estão protegidos com criptografia e autenticação segura.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="icon-pill bg-success-subtle text-success mb-3"><i class="bi bi-person-check"></i></div>
                    <h5 class="fw-semibold mb-2">Acesso Rápido</h5>
                    <p class="text-muted mb-0">Entre de forma simples e tenha acesso completo ao seu painel de controle.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="icon-pill bg-warning-subtle text-warning mb-3"><i class="bi bi-chat-dots"></i></div>
                    <h5 class="fw-semibold mb-2">Suporte Dedicado</h5>
                    <p class="text-muted mb-0">Precisa de ajuda? Nossa equipe está disponível para te auxiliar sempre que precisar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

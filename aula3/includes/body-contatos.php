<section class="container py-5">
    <h1 class="mb-4 text-center">Entre em Contato</h1>
    <div class="row align-items-center g-5">
        <!-- Texto de introdução -->
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3">Fale conosco</h2>
            <p class="lead text-muted mb-4">
                Tem alguma dúvida, sugestão ou precisa de suporte? Preencha o formulário ao lado e entraremos em contato o mais breve possível.
            </p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i> Rua Exemplo, 123 - São Paulo, SP</li>
                <li class="mb-2"><i class="bi bi-telephone text-primary me-2"></i> (11) 99999-9999</li>
                <li><i class="bi bi-envelope text-primary me-2"></i> contato@seudominio.com</li>
            </ul>
        </div>

        <!-- Formulário de contato -->
        <div class="col-lg-6">
            <div class="card shadow-sm rounded-4">
                <div class="card-body p-4">
                    <form action="enviar_contato.php" method="POST">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
                        </div>

                        <div class="mb-3">
                            <label for="assunto" class="form-label">Assunto</label>
                            <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assunto da mensagem">
                        </div>

                        <div class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem..." required></textarea>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-send me-1"></i> Enviar Mensagem
                            </button>
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
                    <div class="icon-pill bg-primary-subtle text-primary mb-3"><i class="bi bi-clock"></i></div>
                    <h5 class="fw-semibold">Horário de Atendimento</h5>
                    <p class="text-muted mb-0">Seg a Sex - 9h às 18h</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="icon-pill bg-success-subtle text-success mb-3"><i class="bi bi-whatsapp"></i></div>
                    <h5 class="fw-semibold">Atendimento Rápido</h5>
                    <p class="text-muted mb-0">Suporte via WhatsApp para respostas imediatas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <div class="icon-pill bg-warning-subtle text-warning mb-3"><i class="bi bi-geo"></i></div>
                    <h5 class="fw-semibold">Visite-nos</h5>
                    <p class="text-muted mb-0">Estamos localizados no centro de São Paulo.</p>
                </div>
            </div>
        </div>
    </div>
</section>

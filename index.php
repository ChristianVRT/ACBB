<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACBB Consultoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php session_start(); ?>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top w-100">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="imagens/logo.png" alt="Logo ACBB" width="30" height="30" class="d-inline-block align-top">
                        ACBB Consultoria
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Equipe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#testimonials">Depoimentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contato</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <?php if (isset($_SESSION['user_name'])): ?>
                                <span class="navbar-text me-3">
                                    <img src="uploads/<?php echo $_SESSION['profile_pic']; ?>" alt="Foto de Perfil" width="30" height="30" class="rounded-circle me-2">
                                    Olá, <a href="php/profile.php"><?php echo $_SESSION['user_name']; ?></a>
                                </span>
                                <a href="php/logout.php" class="btn btn-outline-danger">Logout</a>
                            <?php else: ?>
                                <button onclick="LoginWindow()" class="btn btn-outline-info me-2">Login</button>
                                <button onclick="RegisterWindow()" class="btn btn-info">Register</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="mt-5 pt-4">
            <section id="welcome" class="text-center py-5">
                <div class="container">
                    <h1 class="display-4">Bem-vindo à ACBB Consultoria</h1>
                    <p class="lead">Sua parceira para soluções empresariais inovadoras e personalizadas.</p>
                </div>
            </section>

            <section id="home" class="carousel">
                <div class="carousel-container">
                    <div class="carousel-slide">
                        <img src="https://vbmc.com.br/wp-content/uploads/2020/12/consultoria-empresarial-o-que-e-tipos-e-interacoes.jpg" alt="Imagem 1">
                        <div class="caption">Legenda da Imagem 1</div>
                    </div>
                    <div class="carousel-slide">
                        <img src="https://img.freepik.com/fotos-gratis/colheita-de-colegas-usando-o-laptop-na-mesa_1098-20092.jpg?size=626&ext=jpg&ga=GA1.1.2082370165.1716422400&semt=ais_user" alt="Imagem 2">
                        <div class="caption">Legenda da Imagem 2</div>
                    </div>
                    <div class="carousel-slide">
                        <img src="https://img.freepik.com/fotos-gratis/o-inspetor-financeiro-e-o-secretario-fazem-relatorio-calculam-ou-verificam-o-saldo-documento-de-verificacao-do-inspetor-do-servico-de-receita-federal-conceito-de-auditoria_1423-126.jpg" alt="Imagem 3">
                        <div class="caption">Legenda da Imagem 3</div>
                    </div>
                </div>
                <button class="prev-btn">&#10094;</button>
                <button class="next-btn">&#10095;</button>
            </section>

            <section id="about" class="py-5">
                <div class="container">
                    <h2>Sobre Nós</h2>
                    <p>A ACBB Consultoria é uma empresa dedicada a fornecer soluções inovadoras e personalizadas para nossos clientes. Nossa equipe de especialistas está comprometida em ajudar sua empresa a alcançar novos patamares de sucesso.</p>
                    <p>Com anos de experiência no mercado, oferecemos uma ampla gama de serviços que vão desde consultoria empresarial até treinamentos e workshops. Nosso objetivo é proporcionar um crescimento sustentável e eficiente para nossos clientes.</p>
                </div>
            </section>

            <section id="services" class="bg-light py-5">
                <div class="container">
                    <h2>Nossos Serviços</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Consultoria Empresarial</h3>
                            <p>Oferecemos consultoria especializada para ajudar sua empresa a identificar oportunidades de crescimento e melhorar a eficiência operacional.</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Planejamento Estratégico</h3>
                            <p>Trabalhamos com sua equipe para desenvolver um plano estratégico que alinhe os objetivos de negócios com as ações necessárias para alcançá-los.</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Gestão de Projetos</h3>
                            <p>Nossos especialistas em gestão de projetos garantem que seus projetos sejam concluídos no prazo, dentro do orçamento e com a qualidade esperada.</p>
                        </div>
                        <div class="col-md-6">
                            <h3>Treinamentos e Workshops</h3>
                            <p>Oferecemos treinamentos e workshops personalizados para capacitar sua equipe e melhorar suas habilidades e conhecimentos.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="team" class="py-5">
                <div class="container">
                    <h2>Nossa Equipe</h2>
                    <p>Conheça os profissionais que fazem a ACBB Consultoria ser referência no mercado:</p>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>João Silva</h4>
                            <p>CEO</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Maria Oliveira</h4>
                            <p>Diretora de Projetos</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Carlos Souza</h4>
                            <p>Consultor Sênior</p>
                        </div>
                        <div class="col-md-3">
                            <h4>Ana Lima</h4>
                            <p>Especialista em Treinamentos</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="testimonials" class="bg-light py-5">
                <div class="container">
                    <h2>Depoimentos</h2>
                    <p>Veja o que nossos clientes dizem sobre nós:</p>
                    <div class="row">
                        <div class="col-md-6">
                            <blockquote class="blockquote">
                                <p>"A ACBB Consultoria transformou nossa empresa. O planejamento estratégico foi essencial para nosso crescimento." - Cliente A</p>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <blockquote class="blockquote">
                                <p>"Os treinamentos oferecidos pela ACBB são de altíssima qualidade. Nossa equipe está muito mais preparada." - Cliente B</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact" class="py-5">
                <div class="container">
                    <h2>Contato</h2>
                    <p>Entre em contato conosco para saber mais sobre nossos serviços e como podemos ajudar sua empresa a crescer.</p>
                    <p>Email: contato@acbbconsultoria.com.br</p>
                    <p>Telefone: (11) 1234-5678</p>
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="message" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </section>
        </main>

        <footer class="bg-dark text-white text-center py-3">
            <p>&copy; 2023 ACBB Consultoria. Todos os direitos reservados.</p>
        </footer>
    </div>

    <script src="js/script.js"></script>
</body>
</html>
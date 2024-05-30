<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACBB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <nav>
                <div class="logo">ACBB Consultoria</div>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#contact">Contato</a></li>
                </ul>
                <div>
                    <button onclick="LoginWindow()" class="btn btn-outline-info login">Login</button>
                    <button onclick="RegisterWindow()" class="btn btn-info register">Register</button>
                </div>
                
            </nav>
        </header>

        <main>
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

            <section id="about">
                <h2>Sobre Nós</h2>
                <p>A ACBB Consultoria é uma empresa dedicada a fornecer soluções inovadoras e personalizadas para nossos clientes. Nossa equipe de especialistas está comprometida em ajudar sua empresa a alcançar novos patamares de sucesso.</p>
            </section>

            <section id="services">
                <h2>Nossos Serviços</h2>
                <ul>
                    <li>Consultoria Empresarial</li>
                    <li>Planejamento Estratégico</li>
                    <li>Gestão de Projetos</li>
                    <li>Treinamentos e Workshops</li>
                </ul>
            </section>

            <section id="contact">
                <h2>Contato</h2>
                <p>Entre em contato conosco para saber mais sobre nossos serviços e como podemos ajudar sua empresa a crescer.</p>
                <p>Email: contato@acbbconsultoria.com.br</p>
                <p>Telefone: (11) 1234-5678</p>
            </section>
        </main>

        <footer>
            <p>&copy; 2023 ACBB Consultoria. Todos os direitos reservados.</p>
        </footer>
    </div>

    <script src="script.js"></script>
 </body>
</html>
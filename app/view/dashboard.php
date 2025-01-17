<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM COMPUTER's</title>


    <link rel="stylesheet" href="styleDashboard.css">
    <link rel="stylesheet" href="style.php">
    <link href='https://css.gg/arrow-long-right-e.css' rel='stylesheet'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/22bd473149.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

</head>

<body>

    <img src="img/fundo.avif" alt="Plano de Fundo" id="fundo">

    <header>
        <nav class="navbar fixed-top navbar-dark">
            <img class="logo" src="img/hdcagency_logo.svg" alt="Samuel's Agency"> <span id="welcome"> Bem
                Vindo, {{nome_user}} </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" id="home-menu">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="team-menu">Time</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="services-menu">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="cursos-menu">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="contact-menu">Contato</a>
                    </li>
                    <li>
                        <a class="nav-link" href="http://localhost/site/dashboard/logout" id="logout">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slider1.avif" class="d-block w-100" alt="Projetos de e-commerce">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Quer se tornar um programador?</h2>
                            <p>Conte conosco, monte um portifólio de respeito em apenas 3 meses!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider2.avif" class="d-block w-100" alt="Engenharia de Software">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Que tal tirar o projeto do papel?</h2>
                            <p>Nossa equipe está pronta para atendê-lo!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slider3.avif" class="d-block w-100" alt="Manutenção em Software">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Você está buscando manutenção em seu software?</h2>
                            <p>Estamos disponíveis para resolver quaisquer eventualidades!</p>
                        </div>
                    </div>
                </div>
                <a href="#mainSlider" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#mainSlider" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div id="about-team">
            <div class="lista">
                <div class="playlist">
                    <h3 style="text-align: center; text-shadow: white 0.5em 0.5em 0.5em; font-weight: bold; color:red; line-height: 60px;">
                        ↠
                        Disfrute dos melhores Orientadores ↞ </h3>
                </div>
            </div>
            <div class="mentoria">
                <div class="initial-text">
                    <div>
                        <p style="text-decoration: underline; font-weight: bold; color: red;
                    text-shadow: black 0.5em 0.5em 0.5em;">Melhor time de mentores do Brasil</p>
                        <h5 style="font-weight: bold; text-shadow: blue 0.05em 0.05em 0.5em;">Mentoria Individuais!</h5>
                    </div>
                    <div>
                        <p>Você vai agendar mentorias totalmente Individuais com o maior time de mentores do Brasil.
                            </br>
                            Essas sessões são essenciais para você tirar dúvidas e receber feedback.
                        </p>
                        <p>A rentabilidade de uma organização pode ser medida de diversas formas.</br> Tudo vai depender
                            da
                            visão que o empreendedor tem para o seu negócio.</p>
                        <p>você precisa saber onde quer chegar e o quê e como vai fazer para chegar lá.</br> Nesse
                            processo
                            de planejamento é essencial que você experimente o poder da mentoria.</p>
                        <p style="text-decoration: underline; font-weight: bold; text-shadow: blue 0.05em 0.05em 0.5em;">
                            Conheça nossos mentores ↠</p>
                    </div>
                </div>
                <div class="fotos">
                    <div class="foto">
                        <img src="img/pessoa1.avif" alt="person1" id="person">
                        <p>Robson A.</p>
                        <p>Developer at Loft</p>
                        <p>Senior Software at Loft. Já atuou em empresas como OLX Brasil.</p>
                    </div>
                    <div class="foto">
                        <img src="img/pessoa2.avif" alt="person2" id="person">
                        <p>Odair B.</p>
                        <p>Tech Manager at Nubak</p>
                        <p>Mais de 18 anos trabalhando em desenvolvimento de software.</p>
                    </div>
                    <div class="foto">
                        <img src="img/pessoa5.avif" alt="person3" id="person">
                        <p>Marianna K.</p>
                        <p>Developer at Nexo Jornal</p>
                        <p>Já trabalhou em exmpresas como RCKT entre outras. Atua no mercado por mais de 10 anos.</p>
                    </div>
                    <div class="foto">
                        <img src="img/pessoa4.avif" alt="person4" id="person">
                        <p>Amanda G.</p>
                        <p>Developer at Catraca Livre</p>
                        <p>Já atuou em empresas como Nexo Jornal, Lopes Consultoria e Habibi's.</p>
                    </div>
                    <div class="foto">
                        <img src="img/pessoa3.avif" alt="person4" id="person">
                        <p>Roberto J.</p>
                        <p>Enge Manager at Loadsmart</p>
                        <p>Engineering Manager na Loadsmart, liderando times cross-funcionais de Front-end.</p>
                    </div>
                    <div class="foto">
                        <img src="img/pessoa6.avif" alt="person4" id="person">
                        <p>Priscila A.</p>
                        <p>Head at Exame</p>
                        <p>Head of Development at Exame. Já atuou em empresas como Dasa, Bionexo, entre outras.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="about-services">
            <div class="lista">
                <div class="playlist">
                    <h3 style="text-align: center; text-shadow: white 0.5em 0.5em 0.5em; font-weight: bold; color:red; line-height: 60px;">
                        ↠
                        Serviços Imperdíveis ↞ </h3>
                </div>
            </div>
            <div class="serviços">
                <div class="informativos">
                    <div class="banner">
                        <p style="font-weight: bold; color: white;">Terças e Quintas às 20hrs</p>
                        <h4 style="font-weight: bold; ">Participe de nossas Lives Semanais</h4>
                        <p style="color: white">Você vai aprender ao longo de 8 semanas, e participar de aulas ao vivo
                            duas
                            vezes na semana. Ao total, você vai ter mais de 16h de aulas com os melhores profissionais
                            do
                            Brasil.</p>
                        <img src="img/live.avif" alt="live" id="banner-image">
                    </div>
                    <div class="banner">
                        <p style="font-weight: bold; color: white;">Materiais de apoio</p>
                        <h4 style="font-weight: bold;">Aprenda no seu ritmo</h4>
                        <p style="color: white">Elas ficam gravadas para você assistir depois. Além disso, você vai ter
                            acesso aos materiais da plataforma que disponibilizamos artigos, vídeo-aulas e outros
                            conteúdos
                            para
                            complementar seu aprendizado.</p>
                        <img src="img/aprenda.avif" alt="aprenda" id="banner-image">
                    </div>
                    <div class="banner">
                        <p style="font-weight: bold; color: white;">Conclua cada curso</p>
                        <h4 style="font-weight: bold;">Receba certificado reconhecido</h4>
                        <p style="color: white">Ao fim de cada curso você receberá um certificado com o selo da ABED,
                            Associação Brasileira de Ensino à Distância, reconhecido nacionalmente, comprovando a
                            experiência desenvolvida.</p>
                        <img src="img/certificado.jpg" alt="live" id="banner-image">
                    </div>
                </div>
            </div>
        </div>
        <div id="about-cursos">
            <div class="lista">
                <div class="playlist">
                    <h1> ↠ Lista de Cursos Disponíveis ↞ </h1>
                    <p>Selecione</p>
                    <p> ↠ Clique & Descubra ↞ </p>
                </div>
            </div>
            <div class="videos">
                <div class="video">
                    <img src="img/sql.jpg" alt="imagem" id="imagem-video" class="video1">
                    <div id="icon"><i class='bx bxs-movie-play bx-flashing' id="video1"></i></div>
                    <h1>→</h1>
                    <p>SQL é uma linguagem padrão para trabalhar com bancos de dados relacionais. Ela é uma
                        linguagem
                        declarativa e que não necessita de profundos conhecimentos de programação para que alguém
                        possa
                        começar a escrever queries que trazem resultados de acordo com o que você está
                        buscando. SQL significa Standard Query Language. A linguagem é um grande padrão de banco de
                        dados.
                        Isto decorre da sua simplicidade e facilidade de uso. Ela se diferencia de outras linguagens
                        de
                        consulta a banco de dados no sentido em que uma consulta SQL especifica a forma do resultado
                        e
                        não o
                        caminho para chegar a ele.
                    </p>
                </div>
                <div class="video">
                    <img src="img/php.jpg" alt="imagem" id="imagem-video" class="video2">
                    <div id="icon"><i class='bx bxs-movie-play bx-flashing' id="video2"></i></div>
                    <h1>→</h1>
                    <p>PHP (um inicialismo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script do
                        lado
                        do
                        servidor de código aberto que pode ser utilizada junto com HTML para construir aplicações
                        web e
                        sites dinâmicos. HTML pode ser usando dentro do PHP, mas não vice versa. A melhor coisa em
                        usar
                        o
                        PHP é que ele é extremamente simples para um iniciante, mas oferece muitos recursos
                        avançados
                        para
                        um programador profissional. Não tenha medo de ler a longa lista de recursos do PHP. Pode
                        entrar
                        com
                        tudo, o mais rápido que puder, e começar a escrever scripts simples em poucas horas.
                    </p>
                </div>
                <div class="video">
                    <img src="img/javascript.jpg" alt="imagem" id="imagem-video" class="video3">
                    <div id="icon"><i class='bx bxs-movie-play bx-flashing' id="video3"></i></div>
                    <h1>→</h1>
                    <p>JavaScript (às vezes abreviado para JS) é uma linguagem leve, interpretada e baseada em
                        objetos
                        com
                        funções de primeira classe, mais conhecida como a linguagem de script para páginas Web, mas
                        usada
                        também em vários outros ambientes sem browser, tais como node.js, Apache CouchDB e Adobe
                        Acrobat.
                        Não se deve confundir o JavaScript com a linguagem de programação Java. Tanto Java quanto
                        JavaScript
                        são marcas registradas da Oracle nos Estados Unidos da América e em outros países. No
                        entanto,
                        as
                        duas linguagens de programação possuem sintaxe, semânticas e usos muito diferentes.
                    </p>
                </div>
                <div class="video">
                    <img src="img/html5.jpg" alt="imagem" id="imagem-video" class="video4">
                    <div id="icon"><i class='bx bxs-movie-play bx-flashing' id="video4"></i></div>
                    <h1>→</h1>
                    <p>HTML (Linguagem de Marcação de HiperTexto) é o bloco de construção mais básico da web. Define
                        o
                        significado e a estrutura do conteúdo da web. Outras tecnologias além do HTML geralmente são
                        usadas
                        para descrever a aparência/apresentação (CSS) ou a funcionalidade/comportamento (JavaScript)
                        de
                        uma
                        página da web. "Hipertexto" refere-se aos links que conectam páginas da Web entre si, seja
                        dentro de
                        um único site ou entre sites. Links são um aspecto fundamental da web. Ao carregar conteúdo
                        na
                        Internet e vinculá-lo a páginas criadas por outras pessoas, você se torna um participante
                        ativo
                        na
                        world wide web.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="about-contact">
            <h2> Dúvidas? Fale Conosco!</h2>
            <div id="contact-form">
                <form action="dashboard.php" method="POST" onsubmit="Message()">
                    <input type="email" class="form-control" placeholder="E-mail" name="email" require maxlength="45"></input>
                    <input type="text" class="form-control" placeholder="Assunto" name="subject" require maxlength="45"></input>
                    <textarea class="form-control" rows="3" placeholder="Sua mensagem ..." name="message" style="resize: none;" require maxlength="200"></textarea>
                    <input type="submit" class="main-btn" name="Enviar" value="Enviar"></input>
                </form>
            </div>
        </div>
        <div class="container">
            <p>Desenvolvidor por <a href="https://github.com/SamuelAlan19" target="_blank"> Samuel's Agency</a>
                &copy; 2023</p>
        </div>


    </footer>
</body>
<script src="dashboard.js"></script>

</html>
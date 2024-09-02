
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scaleble=no">
    <title>Maicon Digital - Portfólio</title>

    <!-- link do CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style-responsive.css">

    <link rel="shortcut icon" type="imagex/png" href="img/logo.png">

    <!-- Link do Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Fontes do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

    <!-- Cabelhario da Pagina -->
    <header>
        <div class="container">
            <nav id="barra-navegacao">
                <div id="logo">
                    <img width="50" src="img/logo.png" alt="">
                    <h1><a href="#">Maicon<span style="color: #0F5972">Digital</span></a></h1>
                </div>
                <div id="icon-btn-menu">
                    <i id="bars" class="fa-solid fa-bars"></i>
                    <i id="bars-close" class="fa-solid fa-xmark" onclick="fechar_menu()"></i>
                </div>
                <ul id="lista-menus" type="none">
                    <li><a href="#barra-navegacao">Inicio</a></li>
                    <li><a onclick="fechar_menu()" href="#sessao-about-me">Sobre mim</a></li>
                    <li><a onclick="fechar_menu()" href="#sessao-certificados">Certificados</a></li>
                    <li><a onclick="fechar_menu()" href="#section-project">Projetos</a></li>
                    <li><a onclick="fechar_menu()" href="#section-contact">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="introducao" class="hidden"  style="min-width: 160px;">
        <div id="aprensetacao-header">
            <h3 class="title-into" style="text-align: center; ">Seja muito bem vindo com a minha pagina</h3>
            <p >Aqui, você vai conhecer mais sobre mim através dos meus projetos, minhas atividades, habilidades e muito mais</p>
        </div>
        <div id="div-header-img">
            <img src="img/gato.png" alt="gao art" >
        </div>
    </section>

    <!-- Conteudo da Pagina -->
        <section id="sessao-about-me" class="hidden">
            <div style="width: 40%; min-width: 160px;">
                <h2 class="subtitulo">Olá, meu nome é Maicon Teixeira</h2>
                <p style="margin-top: 10px;">Sou programador e estudante de ciência da computação, tenho uma enorme paixão por tecnologia, programação e inovação, nesta página você descobrirá meus melhores trabalhos que já fiz.

                </p>
                <div id="area-botoes">
                    <button class="btn btn-linkedin" onclick="btn_click_open('https://www.linkedin.com/in/maicon-computacao/')">
                        <i class="fa-brands fa-linkedin"></i>
                        Linkedin
                    </button>
                    <button class="btn btn-github" onclick="btn_click_open('https://github.com/MaiconCode')">
                        <i class="fa-brands fa-github"></i>
                        GitHub
                    </button>
                    <button onclick="btn_click_open('https://drive.usercontent.google.com/u/0/uc?id=1JBm98cbBALTEQ2H4IxeSHHWze3qJFQOA&export=download')" class="btn btn-curriculo" style="margin-top: 10px;">
                        <i class="fa-solid fa-upload" style="margin-left: 10px;"></i>
                        Curriculo
                    </button>
                </div>
            </div>
        
            <div>
                <img id="img-perfil" src="img/maicon.png" alt="Foto do Maicon">
            </div>
        </section>
        <section id="sessao-certificados" class="hidden" style="display: none">
            <div class="container" style="margin: 2em 5em;">
                <h2 class="subtitulo" style="color: white;">Certificados</h2>
            </div>
            <div class="slider">
                <div class="slides">

                    <!-- Radio buttons -->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="slide first">
                        <img src="img/certificado1.png" alt="imagem1">
                    </div>

                    <div class="slide">
                        <img src="img/certificado2.png" alt="imagem2">
                    </div>

                    <div class="slide">
                        <img src="img/certificado3.png" alt="imagem3">
                    </div>

                    <div class="slide">
                        <img src="img/certificado4.png" alt="imagem4">
                    </div>

                    <!-- Navegação dos slides -->
                     <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                     </div>
                </div>
                
                <div class="manual-navigation">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>
        </section>
        <section id="section-project" class="hidden">
            <div class="container">
                <div id="titulo-project">
                    <h2 class="subtitulo">Meus Projetos</h2>
                </div>
                <div id="campo-cards">
                    <div id="div-cards">
                        <h2 id="title-project-two" class="subtitulo cor-secundaria" >My Project</h2>
                        <div class="card card-1">
                            <div class="img-card">
                                <img src="img/web-card-1.png" alt="Finans">
                            </div>
                            <div class="descricao-card">
                                <h3 style="margin-top: 10px;" class="cor-primaria">Finans</h3>
                                <p style="color: gray; font-size: 14px; margin-top: 10px;">Ferramentas</p>
                                <ul type="none" class="menu-icones-ferramentas">
                                    <li><i class="fa-brands fa-html5" style="color: #FC490B;"></i></li>
                                    <li><i class="fa-brands fa-css3-alt" style="color: #00A1DF;"></i></li>
                                </ul>
                            </div>
                          
                            <input onclick="btn_click_open('Paginas externa/Finans/index.html')" type="button" value="Visualizar" class="btn-view-project">
                        </div>
                        <div class="card card-2">
                            <div class="img-card">
                                <img src="img/web-card-3.png" alt="Sistema de Gerenciamento do aluno">
                            </div>

                            <div class="descricao-card">              
                                <h3 style="margin-top: 10px;" class="cor-primaria">Sistema de Gereciamento de Aluno</h3>
                                <p style="color: gray; font-size: 14px; margin-top: 10px;">Ferramentas</p>
                                <ul type="none" class="menu-icones-ferramentas">
                                    <li><img src="img/img-icones/html-logo.jpg" alt="Logo do Html" width="20"></li>
                                    <li><img src="img/img-icones/CSS-Logo.png" alt="Logo do CSS3" width="35"></li>
                                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" width="20"></li>
                                    <li><img src="img/img-icones/PHP-logo.svg.png" width="40"></li>
                                    <li><img src="img/img-icones/mysql.png" width="40"></li>
                                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" width="22"></li>
                                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Figma-logo.svg/1667px-Figma-logo.svg.png" width="18"></li>
                                </ul>
                            </div>
                            <input onclick="btn_click_open('https://www.linkedin.com/posts/maicon-computacao_hoje-eu-fiz-projeto-de-gerenciamento-de-activity-7224196036917919747-htLV?utm_source=share&utm_medium=member_desktop')" type="button" value="Visualizar" class="btn-view-project">
                        </div>
                        <div class="card card-3">
                            <div class="img-card">
                                <img src="img/tela de tarefas.png" alt="Lista de Tarefas">
                            </div>
                            <div class="descricao-card">
                                <h3 style="margin-top: 10px;" class="cor-primaria">Lista de Tarefas</h3>
                                <p style="color: gray; font-size: 14px; margin-top: 10px;">Ferramentas</p>
                                <ul type="none" class="menu-icones-ferramentas">
                                    <li><img src="img/img-icones/html-logo.jpg" alt="Logo do Html" width="20"></li>
                                    <li><img src="img/img-icones/CSS-Logo.png" alt="Logo do CSS3" width="35"></li>
                                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" width="20"></li>
                                    <li><img src="img/img-icones/materialize.png" width="40"></li>
                                    <li><img src="img/img-icones/PHP-logo.svg.png" width="40"></li>
                                    <li><img src="img/img-icones/mysql.png" width="40"></li>
                            </ul>
                            </div>
                            
                            <input onclick="btn_click_open('https://www.linkedin.com/posts/maicon-computacao_desenvolvimento-projeto-de-tarefas-di%C3%A1rias-activity-7205003499053441024-qFkQ?utm_source=share&utm_medium=member_desktop')" type="button" value="Visualizar" class="btn-view-project">
                        </div>
                        <div class="card card-4">
                            <div class="img-card">
                                <img src="img/breve.png" alt="Em breve">
                            </div>
                            <div class="descricao-card">
                              <h3 class="cor-primaria">Em Breve</h3>
                            <p style="color: gray; font-size: 14px; margin-top: 10px;">Ferramentas</p>
                            <ul type="none" class="menu-icones-ferramentas">
                                <li><img src="img/img-icones/html-logo.jpg" alt="Logo do Html" width="20"></li>
                                <li><img src="img/img-icones/CSS-Logo.png" alt="Logo do CSS3" width="35"></li>
                                <li><img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" width="20"></li>
                                <li><img src="img/img-icones/PHP-logo.svg.png" width="40"></li>
                            </ul>  
                            </div>
                            <input onclick="btn_click_open('https://www.linkedin.com/in/maicon-computacao/')" type="button" value="Visualizar" class="btn-view-project">
                        </div>
                    </div>
                    <div id="icon-arrows">
                        <i onclick="moverCards('esquerda')" class="fa-solid fa-chevron-up icon-left icon-desable" style="transform: rotate(270deg);"></i>
                        <i onclick="moverCards('direita')" class="fa-solid fa-chevron-up icon-right " style="transform: rotate(90deg);"></i>
                    </div>
                </div>   
            </div>
        </section>
        <section id="section-contact" class="hidden">
            <div>
                <div>
                    <h2 class="subtitulo">Contato</h2>
                </div>
                <div id="conteudo-contact">
                    <form action="/envio_email.php" method="post">
                        <div class="div-input">
                            <label for="email">Email:</label><br>
                            <input name="email" type="email" class="input" placeholder="Digite o seu email...">
                        </div>
                        <div class="div-input">
                            <label for="Assunto">Titulo:</label><br>
                            <input name="assunto" type="text" class="input" placeholder="Digite o seu assunto...">
                        </div>
                        <div class="div-input">
                            <label for="texto">Texto:</label><br>
                            <textarea name="texto" name="texto" id="texto" class="input" placeholder="Digite aqui.."></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn" id="btn-enviar-form">Enviar</button>
                        </div>
                    </form>
                    <div id="div-img-citacao">
                        <img src="img/circulo-citacao.png">
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div id="menu-footer" class="hidden">
                    <ul type="none">
                        <li style="color: rgb(164, 164, 164);">Minhas redes socias</li>
                        <li onclick="btn_click_open('https://www.linkedin.com/in/maicon-computacao/')"  style="margin-top: 10px;"><a href="#">Linkedin</a></li>
                        <li onclick="btn_click_open('https://github.com/MaiconCode')"><a href="#">GitHub</a></li>
                    </ul>
                    <ul type="none">
                        <li style="color: rgb(164, 164, 164);">Navegação</li>
                        <li><a href="#barra-navegacao">Inicio</a></li>
                        <li><a onclick="fechar_menu()" href="#sessao-about-me">Sobre mim</a></li>
                        <li><a onclick="fechar_menu()" href="#sessao-certificados">Certificados</a></li>
                        <li><a onclick="fechar_menu()" href="#section-project">Projetos</a></li>
                        <li><a onclick="fechar_menu()" href="#section-contact">Contato</a></li>
                        </ul>
                    <ul type="none">
                        <li style="color: rgb(164, 164, 164);">Meus contatos e localidade</li>
                        <li><i class="fa-solid fa-phone" style="margin-right: 10px;"></i>93731-7947</li>
                        <li><i class="fa-solid fa-envelope" style="margin-right: 10px;"></i>maicondigital900@gmail.com</li>
                        <li><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i>Jardim Josely, Itaquaquecetuba - SP, 08590-315</li>
                    </ul>
                </div>
                <div id="copyright">
                    <p>Todos os direitoes estão reservados @copyright 2024</p>
                </div>
            </div>
        </footer>
       <script src="Javascript/script.js"></script>
</body>
</html>
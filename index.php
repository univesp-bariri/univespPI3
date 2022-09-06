<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Pedala Bariri - Cicloturismo no Interior</title>

    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-bicycle"></i>  <span class="light">Pedala</span> Bariri
                </a>
            </div>


            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#route">Rotas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about-fix">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contato</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <section class="intro">
        <canvas id="canvas"></canvas>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1><i class="fa fa-title fa-bicycle"></i> <br> <span class="light">Pedala</span> Bariri</h1>
                        <p class="intro-text">Nossos eventos ciclísticos, passeios sociais e programas de mudança de comportamento reúnem toda a comunidade. </p>
                        <div class="page-scroll">
                            <a href="#route" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="route" class="container content-section text-center route-section">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Rotas Turísticas</h2>
                <p class='p-title'>Escolha o destino que mais combina com você, ou se preferir, visite todos os pontos turísticos da cidade. </p>

                <div class="routes-images">
                    <a href="gastronomica.html">
                        <p class="index-title">Gastronômica</p>
                        <img class="zoom" src="img/gastro-index.jpg" alt="Rota Gastronômica">
                        <p>Escolha ideal para quem quer conhecer pratos típicos e iguarias locais, as opções culinárias dessa rota são de dar 
                            água na boca. Vale a pena experimentar! </p>
                    </a>
                    <a href="cultural.html">
                        <p class="index-title">Cultural</p>
                        <img class="zoom" src="img/cultural-index.jpg" alt="Rota Cultural">
                        <p>Destino recheado de história e cultura, essa opção convida o ciclista a conhecer toda tradição da cidade, 
                            apresentando centros culturais, religiosos, festivos e o conhecido museu</p>
                    </a>
                    <a href="rural.html">
                        <p class="index-title">Rural</p>
                        <img class="zoom" src="img/rural-index.jpg" alt="Rota Rural">
                        <p>Cercada por diversos atrativos naturais como rios, lagos, construções rurais, mata, entre outros, essa rota oferece 
                            condições para a prática do turismo de aventura e ecoturismo.


                        </p>
                    </a>
                </div>
            <div id="about-fix"></div>    

            </div>
        </div>
    </section>
    <section id="about" class="text-center">
        <div class="about-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Sobre nós</h2>
                    <p class="p-title">Pedala Bariri é um aplicativo web idealizado pelos alunos do <br> 
                        Eixo de Computação da UNIVESP, do polo de Bariri, <br>
                        para a disciplina Projeto Integrador. <br>
                        Iniciamos esse projeto com o intuito de aproximar pessoas <br>
                        que são apaixonadas por ciclismo, aventura e turismo.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 contact-box">
                <h2>Contato</h2>
                <p class="p-title">Para sugestões, dúvidas ou parceria, sinta-se livre para entrar em contato conosco</p>

                <form action="send" method="post">      
                <input name="nome" type="text" class="feedback-input" placeholder="Nome" required>   
                <input name="email" type="text" class="feedback-input" placeholder="E-mail" required>
                <textarea name="mensagem" class="feedback-input" placeholder="Mensagem" required></textarea>
                <button id="btn-send" type="submit">Enviar</button>
                <button id="btn-send-loader" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                  </button>
                </form>

            </div>
        </div>
    </section>

    <footer class="brand">
        <a class="fa">
            <span class="light"> 2022 | </span><i class="fa fa-bicycle"></i>  <span class="light">Pedala</span> Bariri
        </a>
    </footer>

    <script src="js/jquery.js" ></script>
    <script src="js/bootstrap.js" ></script>
    <script src="js/jquery.easing.js" ></script>
    <script src="js/canvas.js" ></script>
    <script src="js/style.js" ></script>

</body>

</html>

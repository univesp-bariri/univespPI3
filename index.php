<!DOCTYPE html>
<html lang="pt_br">

<?php
    // Template Name: Home
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Pedala Bariri - Cicloturismo no Interior</title>

    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css">
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
                        <p class="intro-text">Nossos eventos cicl??sticos, passeios sociais e programas de mudan??a de comportamento re??nem toda a comunidade. </p>
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
                <h2>Rotas Tur??sticas</h2>
                <p class='p-title'>Escolha o destino que mais combina com voc??, ou se preferir, visite todos os pontos tur??sticos da cidade. </p>

                <div class="routes-images">
                    <a href="/gastronomica">
                        <p class="index-title">Gastron??mica</p>
                        <img class="zoom" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gastro-index.jpg" alt="Rota Gastron??mica">
                        <p>Escolha ideal para quem quer conhecer pratos t??picos e iguarias locais, as op????es culin??rias dessa rota s??o de dar 
                            ??gua na boca. Vale a pena experimentar! </p>
                    </a>
                    <a href="/cultural">
                        <p class="index-title">Cultural</p>
                        <img class="zoom" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cultural-index.jpg" alt="Rota Cultural">
                        <p>Destino recheado de hist??ria e cultura, essa op????o convida o ciclista a conhecer toda tradi????o da cidade, 
                            apresentando centros culturais, religiosos, festivos e o conhecido museu</p>
                    </a>
                    <a href="/rural">
                        <p class="index-title">Rural</p>
                        <img class="zoom" src="<?php echo get_stylesheet_directory_uri(); ?>/img/rural-index.jpg" alt="Rota Rural">
                        <p>Cercada por diversos atrativos naturais como rios, lagos, constru????es rurais, mata, entre outros, essa rota oferece 
                            condi????es para a pr??tica do turismo de aventura e ecoturismo.


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
                    <h2>Sobre n??s</h2>
                    <p class="p-title">Pedala Bariri ?? um aplicativo web idealizado pelos alunos do <br> 
                        Eixo de Computa????o da UNIVESP, do polo de Bariri, <br>
                        para a disciplina Projeto Integrador. <br>
                        Iniciamos esse projeto com o intuito de aproximar pessoas <br>
                        que s??o apaixonadas por ciclismo, aventura e turismo.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 contact-box">
                <h2>Contato</h2>
                <p class="p-title">Para sugest??es, d??vidas ou parceria, sinta-se livre para entrar em contato conosco</p>

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

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.easing.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/canvas.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/style.js" ></script>

</body>

</html>

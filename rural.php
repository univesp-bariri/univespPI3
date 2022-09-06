<!DOCTYPE html>
<html lang="pt_br">

<?php
    // Template Name: Rural
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
                <a class="navbar-brand" href="/home">
                    <i class="fa fa-bicycle"></i>  <span class="light">Pedala</span> Bariri
                </a>
            </div>


            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/#route">Rotas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/#about-fix">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="/home/#contact">Contato</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <section class="intro intro-rural">
        <canvas id="canvas"></canvas>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1><i class="fa fa-title fas fa-leaf"></i> <br> <span class="light">Rota</span> Rural</h1>
                        <p class="intro-text">Aventure-se por trilhas rurais e refresque o corpo e a alma em lagos e rios distribuídos pela região.
                            Conexão garantida com a natureza.
                        </p>
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

    <section id="route" class="container content-section text-center route-rural">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Você encontrará pelo caminho</h2>
                <p class="p-title">Essa rota oferece contato com a natureza, pois é rica em paisagens naturais e campestres, destacando-se o Lago Municipal, principal
                    ponto turístico da cidade.</p>
                <div class="routes-images container-rural">
                    <div class="left-content">
                        <a class="places" href="https://www.facebook.com/pages/Lago%20Municipal%20Bariri/1184867901623278/" target="_blank">
                            <img class="zoom-places lago" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lago.jpg" alt="Lago Municipal">
                            <p>Lago Municipal</p>
                        </a>
                        <a class="places" href="https://pt.wikipedia.org/wiki/Barragem_de_Bariri" target="_blank">
                            <img class="zoom-places tiete" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tiete.jpg" alt="Rio Tietê">
                            <p>Rio Tietê</p>
                        </a>
                    </div>                       
                    <img class="image-rural" src="<?php echo get_stylesheet_directory_uri(); ?>/img/rural-map.jpg" alt="Rota Rural">
                    <div class="middle" id="noGeo" onclick="">
                        <a id="rural-id" href="" target="_blank">
                        <div class="text-rural">Acesse a rota</div>
                        </a>
                    </div>
                
                    <div class="right-content">
                        <a class="places" href="http://wikimapia.org/16055015/pt/Capela-de-S%C3%A3o-Jos%C3%A9" target="_blank">
                            <img class="zoom-places capela" src="<?php echo get_stylesheet_directory_uri(); ?>/img/capela.jpg" alt="Capela de São José">
                            <p>Capela de São José</p>
                        </a>
                        <a class="places" href="https://www.facebook.com/cabanamateiro/" target="_blank">
                            <img class="zoom-places cabana" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cabana.jpg" alt="Cabana Mateiro">
                            <p>Cabana Mateiro</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-rural" class="content-section text-center">
        <div class="about-section about-inner about-section-rural">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="left-comment">Deixe seu comentário</h2>
                    <form class="post-inner" method="POST" action="/create-rural">
                        <div class="form-group">
                            <label for="title"></label>
                            <input maxlength="50" type="text" name="title" placeholder="Nome" class="form-control feedback-input" value="{{ request.form['title'] }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content"></label>
                            <textarea maxlength="200" name="content" placeholder="Mensagem" class="form-control feedback-input" required>{{ request.form['content'] }}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="comments" class="content-section text-center">
        <div id="comment-box">
            {% for post in postsrural %}
            <div class="comment-top">
                <a class="coment-a">
                    <h2 class="comment-title">{{ post['title'] }}</h2>
                </a>
                <p class="badge badge-primary">{{ post['created'] }}</p>
            </div>
            <p class="comment-content">{{ post['content'] }}</p>
               <hr>
                {% endfor %}
        </div>
    </section>

    <footer class="brand">
        <a class="fa">
            <span class="light">2021 | </span><i class="fa fa-bicycle"></i>  <span class="light">Pedala</span> Bariri
        </a>
    </footer>

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.easing.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/canvas.js" ></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/style.js" ></script>
    <script>
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };

        function success(position) {
            var getlatitude  = position.coords.latitude;
            var getlongitude = position.coords.longitude;
            var url = "https://www.google.com.br/maps/dir/" + getlatitude + "," + getlongitude + "/Lago+Municipal+-+Jardim+Beltrame,+Bariri+-+SP/Estrada+Rio+Tiête,+Bariri+-+SP/Igrejinha+da+Queixadinha,+Bariri+-+SP/Capela+de+São+José,+Bariri+-+SP,+17250-000/Cabana+Mateiro,+Bariri+-+SP/@-22.0732703,-48.7308812,15.5z/data=!4m34!4m33!1m1!4e1!1m5!1m1!1s0x94bf4ae7b1910259:0x68f040fcebf0012d!2m2!1d-48.7414208!2d-22.0669433!1m5!1m1!1s0x94bf4bbb6c918fcd:0xb3d83f7fc8abea85!2m2!1d-48.7731855!2d-22.0957346!1m5!1m1!1s0x94bf4d40a54433df:0x4c5c4cafb260b87c!2m2!1d-48.7337899!2d-22.1368866!1m5!1m1!1s0x94b8b370091bf2b3:0xabc02d72b062d24c!2m2!1d-48.6891094!2d-22.1405292!1m5!1m1!1s0x94b8b4c7164a4425:0x2c27f17aa5840f0a!2m2!1d-48.7054253!2d-22.0819758!3e1"
            document.getElementById('rural-id').setAttribute("href",url);
            console.log(position);
        } ;

        function error(error){
            var url = "https://www.google.com.br/maps/dir//Lago+Municipal+-+Jardim+Beltrame,+Bariri+-+SP/Estrada+Rio+Tiête,+Bariri+-+SP/Igrejinha+da+Queixadinha,+Bariri+-+SP/Capela+de+São+José,+Bariri+-+SP,+17250-000/Cabana+Mateiro,+Bariri+-+SP/@-22.0732703,-48.7308812,15.5z/data=!4m34!4m33!1m1!4e1!1m5!1m1!1s0x94bf4ae7b1910259:0x68f040fcebf0012d!2m2!1d-48.7414208!2d-22.0669433!1m5!1m1!1s0x94bf4bbb6c918fcd:0xb3d83f7fc8abea85!2m2!1d-48.7731855!2d-22.0957346!1m5!1m1!1s0x94bf4d40a54433df:0x4c5c4cafb260b87c!2m2!1d-48.7337899!2d-22.1368866!1m5!1m1!1s0x94b8b370091bf2b3:0xabc02d72b062d24c!2m2!1d-48.6891094!2d-22.1405292!1m5!1m1!1s0x94b8b4c7164a4425:0x2c27f17aa5840f0a!2m2!1d-48.7054253!2d-22.0819758!3e1"
            document.getElementById('rural-id').setAttribute("href",url)
            document.getElementById('noGeo').setAttribute("onClick","alert('Não foi possível identificar sua localização! Habilite essa função ou selecione o ponto de partida no Google Maps.')"); 
        };

        navigator.geolocation.getCurrentPosition(success, error, options);

    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="pt_br">

<?php
    // Template Name: Cultural
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

    <section class="intro intro-cultural">
        <canvas id="canvas"></canvas>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1><i class="fa fa-title fas fa-archway"></i> <br> <span class="light">Rota</span> Cultural</h1>
                        <p class="intro-text">O cen??rio cultural ?? extremamente convidativo, pois valoriza as tradi????es e promove os patrim??nios hist??ricos de Bariri.</p>
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

    <section id="route" class="container content-section text-center route-cultural">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Voc?? encontrar?? pelo caminho</h2>
                <p class="p-title">Esse roteiro apresenta fatos hist??ricos e locais importantes da cidade, como o Museu M??rio Fava e a bel??ssima pra??a da Matriz, 
                    aumentando assim a experi??ncia e a viv??ncia cultural dos visitantes.</p>
                <div class="routes-images container-cultural">
                    <div class="left-content">
                        <a class="places" href="https://museumariofava.com.br/home" target="_blank">
                            <img class="zoom-places museu" src="<?php echo get_stylesheet_directory_uri(); ?>/img/museu.jpg" alt="Museu Mario Fava">
                            <p>Museu M??rio Fava</p>
                        </a>                    
                        <a class="places" href="https://www.facebook.com/LeoncioeLeonel" target="_blank">
                            <img class="zoom-places dupla" src="<?php echo get_stylesheet_directory_uri(); ?>/img/dupla.jpg" alt="Le??ncio e Leonel">
                            <p>Monumento Le??ncio e Leonel</p>
                        </a>
                    </div>
                    <img class="image-cultural" src="<?php echo get_stylesheet_directory_uri(); ?>/img/cultural-map.jpg" alt="Rota Cultural">
                    <div class="middle" id="noGeo" onclick="">
                        <a id="cultural-id" href="" target="_blank">
                        <div class="text-cultural">Acesse a rota</div>
                        </a>
                    </div>
                    <div class="right-content">
                        <a class="places" href="https://www.bariri.sp.gov.br/portal/noticias/3/1/12/0/0/0" target="_blank">
                            <img class="zoom-places eventos" src="<?php echo get_stylesheet_directory_uri(); ?>/img/evento.jpg" alt="Eventos">
                            <p>Eventos culturais</p>
                        </a>
                        <a class="places" href="https://www.bariri.sp.gov.br/portal/servicos/136/Cultura" target="_blank">
                            <img class="zoom-places mariofava" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mariofava.jpg" alt="CENTRO EDUCACIONAL, CULTURAL E DE EXPOSI????ES M??RIO FAVA">
                            <p>Centro Educacional, Cultural e de Exposi????es Mario Fava</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-cultural" class="content-section text-center">
        <div class="about-section about-inner about-section-cultural">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="left-comment">Deixe seu coment??rio</h2>
                    <form class="post-inner" method="POST" action="/create-cultural">
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
            {% for post in postscultural %}
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
            var url = "https://www.google.com.br/maps/dir/" + getlatitude + "," + getlongitude + "/-22.0694298,-48.729618/Par??quia+Santu??rio+N.Sra+Aparecida+-+Av.+Braz+Fortunato,+319+-+Jardim+Santa+Lucia,+Bariri+-+SP,+17250-000/Igreja+Ortodoxa+Antioquina+de+S??o+Jorge,+Av.+Jo??o+Lemos,+687+-+Vila+Santa+Terezinha,+Bariri+-+SP,+17250-000/''/Museu+M??rio+Fava,+R.+Tiradentes,+410+-+Vila+Santa+Terezinha,+Bariri+-+SP,+17250-000/''/@-22.0693971,-48.7402519,16z/data=!3m1!4b1!4m34!4m33!1m0!1m0!1m5!1m1!1s0x94bf4adb8190dc15:0x714f73317d60fff2!2m2!1d-48.7340086!2d-22.0657356!1m5!1m1!1s0x94bf4ae7968754c3:0xc5f132221dfb5791!2m2!1d-48.7402832!2d-22.0666443!1m5!1m1!1s0x94bf4b106d43590d:0xdbf86edd8e3d1a5a!2m2!1d-48.7402629!2d-22.0731519!1m5!1m1!1s0x94bf4b1fd498ab81:0x34f16102170f0c5a!2m2!1d-48.7401937!2d-22.0750917!1m5!1m1!1s0x94bf4adffe582fb3:0x50dc2dfe1edc0592!2m2!1d-48.7391362!2d-22.0743111!3e1"
            document.getElementById('cultural-id').setAttribute("href",url);
            console.log(position);
        } ;

        function error(error){
            var url = "https://www.google.com.br/maps/dir//-22.0694298,-48.729618/Par??quia+Santu??rio+N.Sra+Aparecida+-+Av.+Braz+Fortunato,+319+-+Jardim+Santa+Lucia,+Bariri+-+SP,+17250-000/Igreja+Ortodoxa+Antioquina+de+S??o+Jorge,+Av.+Jo??o+Lemos,+687+-+Vila+Santa+Terezinha,+Bariri+-+SP,+17250-000/''/Museu+M??rio+Fava,+R.+Tiradentes,+410+-+Vila+Santa+Terezinha,+Bariri+-+SP,+17250-000/''/@-22.0693971,-48.7402519,16z/data=!3m1!4b1!4m34!4m33!1m0!1m0!1m5!1m1!1s0x94bf4adb8190dc15:0x714f73317d60fff2!2m2!1d-48.7340086!2d-22.0657356!1m5!1m1!1s0x94bf4ae7968754c3:0xc5f132221dfb5791!2m2!1d-48.7402832!2d-22.0666443!1m5!1m1!1s0x94bf4b106d43590d:0xdbf86edd8e3d1a5a!2m2!1d-48.7402629!2d-22.0731519!1m5!1m1!1s0x94bf4b1fd498ab81:0x34f16102170f0c5a!2m2!1d-48.7401937!2d-22.0750917!1m5!1m1!1s0x94bf4adffe582fb3:0x50dc2dfe1edc0592!2m2!1d-48.7391362!2d-22.0743111!3e1"
            document.getElementById('cultural-id').setAttribute("href",url)
            document.getElementById('noGeo').setAttribute("onClick","alert('N??o foi poss??vel identificar sua localiza????o! Habilite essa fun????o ou selecione o ponto de partida no Google Maps.')"); 
        };

        navigator.geolocation.getCurrentPosition(success, error, options);

    </script>

</body>

</html>
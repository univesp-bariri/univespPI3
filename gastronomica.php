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
                <a class="navbar-brand" href="index.html">
                    <i class="fa fa-bicycle"></i>  <span class="light">Pedala</span> Bariri
                </a>
            </div>


            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">

                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html#route">Rotas</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html#about-fix">Sobre</a>
                    </li>
                    <li class="page-scroll">
                        <a href="index.html#contact">Contato</a>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

    <section class="intro intro-gastro">
        <canvas id="canvas"></canvas>
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1><i class="fa fa-title fas fa-utensils"></i> <br> <span class="light">Rota</span> Gastronômica</h1>
                        <p class="intro-text">A culinária baririense proporciona um contato genuíno com a história de nossa cidade e região.</p>
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

    <section id="route" class="container content-section text-center route-gastro">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 gastro-inner">
                <h2>O melhor da gastronomia local</h2>
                <p class="p-title">Este roteiro inclui bares, restaurantes, armazéns, petiscarias, lanchonetes e muito mais!</p>
                <div class="routes-images container-gastro">
                    <div class="left-content">
                        <a class="places" href="https://www.instagram.com/armazemdvitto/" target="_blank">
                            <img class="zoom-places dvitto" src="img/dvitto.jpg" alt="Armazeḿ DVitto">
                            <p>Armmazém D'Vitto</p>
                        </a>
                        <a class="places" href="https://www.instagram.com/kantodolago/" target="_blank">
                            <img class="zoom-places kanto" src="img/kanto.jpg" alt="Kanto do Lago">
                            <p>Kanto do Lago</p>
                        </a>
                    </div>
                    <img class="image-gastro" src="img/gastro-map.jpg" alt="Rota Gastronômica">
                    <div class="middle" id="noGeo" onclick="">
                        <a id="gastro-id" href="" target="_blank">
                        <div class="text-gastro">Acesse a rota</div>
                        </a>
                    </div>
                    <div class="right-content">
                        <a class="places" href="https://www.instagram.com/pizzariarubinho_ofc/" target="_blank">
                            <img class="zoom-places rubinho" src="img/rubinho.jpg" alt="Pizzaria do Rubinho">
                            <p>Pizzaria do Rubinho</p>
                        </a>
                        <a class="places" href="https://www.instagram.com/sucata.restauranteebuffet/" target="_blank">
                            <img class="zoom-places sucata" src="img/sucata.jpg" alt="Restaurante Sucata">
                            <p>Sucata Restaurante e Buffet</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-gastro" class="text-center">
        <div class="about-section about-inner about-section-gastro">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2 class="left-comment">Deixe seu comentário</h2>
                    <form class="post-inner" method="POST" action="/create-gastro">
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
            {% for post in postsgastro %}
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

    <script src="js/jquery.js" ></script>
    <script src="js/bootstrap.js" ></script>
    <script src="js/jquery.easing.js" ></script>
    <script src="js/canvas.js" ></script>
    <script src="js/style.js" ></script>
    <script>
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };

        function success(position) {
            var getlatitude  = position.coords.latitude;
            var getlongitude = position.coords.longitude;
            var url = "https://www.google.com.br/maps/dir/" + getlatitude + "," + getlongitude + "/Pizzaria+do+Rubinho/-22.0671064,-48.7404569/Kanto+do+Lago/Armaz%C3%A9m+D'+Vitto/BAR+DA+FORQUILHA,+Bariri+-+SP/Pal%C3%A1cio+Do+Sorvete/Restaurante+Sucata/Venda+da+Queixada+Bariri/@-22.1200487,-48.738822,13z/data=!4m51!4m50!1m0!1m5!1m1!1s0x94bf4adb2c92eed7:0xc356346f6873751c!2m2!1d-48.7327195!2d-22.0618748!1m0!1m5!1m1!1s0x94bf4be797ac6ef1:0x5a3440724dc61fb3!2m2!1d-48.7416355!2d-22.069057!1m5!1m1!1s0x94bf4aef630296e9:0xd2c18f8d6785aa85!2m2!1d-48.7460052!2d-22.0666659!1m5!1m1!1s0x94bf4b6759abef59:0x1d865c5de9d5aced!2m2!1d-48.7485679!2d-22.0652466!1m5!1m1!1s0x94bf4ae028ea2661:0xed6f9d8bdfef733a!2m2!1d-48.7411902!2d-22.0748949!1m10!1m1!1s0x94bf4b2002f7eeb5:0x54117d52c8fc2a73!2m2!1d-48.7390855!2d-22.0749414!3m4!1m2!1d-48.6896097!2d-22.1392867!3s0x94b8b31bf14c806b:0xa1c3ad97acf7da0c!1m5!1m1!1s0x94b8b2fccd2fd91f:0x87ee79a0cd45a640!2m2!1d-48.6890006!2d-22.1401872!3e1"
            document.getElementById('gastro-id').setAttribute("href",url);
            console.log(position);
        } ;

        function error(error){
            var url = "https://www.google.com.br/maps/dir//Pizzaria+do+Rubinho/-22.0671064,-48.7404569/Kanto+do+Lago/Armaz%C3%A9m+D'+Vitto/BAR+DA+FORQUILHA,+Bariri+-+SP/Pal%C3%A1cio+Do+Sorvete/Restaurante+Sucata/Venda+da+Queixada+Bariri/@-22.1200487,-48.738822,13z/data=!4m51!4m50!1m0!1m5!1m1!1s0x94bf4adb2c92eed7:0xc356346f6873751c!2m2!1d-48.7327195!2d-22.0618748!1m0!1m5!1m1!1s0x94bf4be797ac6ef1:0x5a3440724dc61fb3!2m2!1d-48.7416355!2d-22.069057!1m5!1m1!1s0x94bf4aef630296e9:0xd2c18f8d6785aa85!2m2!1d-48.7460052!2d-22.0666659!1m5!1m1!1s0x94bf4b6759abef59:0x1d865c5de9d5aced!2m2!1d-48.7485679!2d-22.0652466!1m5!1m1!1s0x94bf4ae028ea2661:0xed6f9d8bdfef733a!2m2!1d-48.7411902!2d-22.0748949!1m10!1m1!1s0x94bf4b2002f7eeb5:0x54117d52c8fc2a73!2m2!1d-48.7390855!2d-22.0749414!3m4!1m2!1d-48.6896097!2d-22.1392867!3s0x94b8b31bf14c806b:0xa1c3ad97acf7da0c!1m5!1m1!1s0x94b8b2fccd2fd91f:0x87ee79a0cd45a640!2m2!1d-48.6890006!2d-22.1401872!3e1"
            document.getElementById('gastro-id').setAttribute("href",url)
            document.getElementById('noGeo').setAttribute("onClick","alert('Não foi possível identificar sua localização! Habilite essa função ou selecione o ponto de partida no Google Maps.')"); 
        };

        navigator.geolocation.getCurrentPosition(success, error, options);

    </script>

</body>

</html>

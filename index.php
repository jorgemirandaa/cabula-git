<!DOCTYPE html >
  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Import materialize.css
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->

		<!--Import personalizado-->
		<link rel="stylesheet" type="text/css" href="css/personalizado.css">

		<!-- Load Roboto font -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
				<link rel="stylesheet" type="text/css" href="css/pluton.css" />
				
				<link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
				<link rel="stylesheet" type="text/css" href="css/animate.css" />
				

				<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.png" />
		<link rel="icon" href="images/ico/favicon2.png" type="image/x-icon" />

		<title>D'umbigo Tour</title>
	</head>
	<body>
	<div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="#" class="brand">
                        <img src="logo.png" width="120" height="40" alt="Logo" />
                        <!-- This is website logo -->
                    </a>
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    <!-- Main navigation -->
                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="#home">Home</a></li>
                            <li><a href="#service">Quem somos</a></li>
                            <li><a href="#about">Portfolio</a></li>
                            <li><a href="#price">Planos</a></li>
                            <li><a href="#contact">Itinerário</a></li>
                        </ul>
                    </div>
                    <!-- End main navigation -->
                </div>
            </div>
        </div>
		<!-- Start home section -->
		<div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Seja Bem vindo</h2>
                        <h4>Ao Cabula </h4>
                        <p>Venha conosco e viva tudo que este bairro tem a oferecer. Você irá se surpreender!</p>
                       
                        <div class="da-img">
                            <img src="images/Slider01.jpg" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Importância da Reciclagem</h2>
                        <h4>Recuperação - Revalorização - TRANSFORMAÇÃO</h4>
                        <p>A reciclagem é uma atividade econômica com muitos benefícios ambientais, mas para que ocorra com eficiência, é necessário que você faça sua parte.</p>
                        <div class="da-img">
                            <img src="images/Slider02.jpg" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Acesse de qualquer lugar</h2>
                        <h4>Conheça uma nova Cabula</h4>
                        <p>A área foi povoada por negros, sobretudo de origem congo e angola, que tocavam e dançavam o kabula, ritmo quicongo religioso que deu origem ao nome do bairro.</p>
                        <div class="da-img">
                            <img src="images/Slider03.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
				<!-- End home section -->
				<!-- Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>O que nós fazemos?</h1>
                    <!-- Section's title goes here -->
                    <p>Proporcionamos experiências - Uma Salvador de verdade!</p>
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service1.png" alt="service 1">
                            </div>
                            <h3>Gastronomia local</h3>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service2.png" alt="service 2" />
                            </div>
                            <h3>Preços acessíveis</h3>
                            
                        </div>
                    </div>
                    <div class="span4">
                        <div class="centered service">
                            <div class="circle-border zoom-in">
                                <img class="img-circle" src="images/Service3.png" alt="service 3">
                            </div>
                            <h3>Cartilha exclusiva</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
				<!-- Service section end -->

				<!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>Quem visitamos?</h1>
                    <p>Veja abaixo os locais de destaque em nossa região.</p>
                </div>
                <div class="row-fluid team">
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
                            <img src="images/01.png" alt="team 1">
                            <h3>Coleta seletiva</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Coleta Seletiva</h2>
                                <p>Utilização dos materiais coletados na comunidade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="second-person">
                        <div class="thumbnail">
                            <img src="images/02.png" alt="team 1">
                            <h3> Integração da Comunidade</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Integração da Comunidade</h2>
                                <p>Uma comunidade mais unida em busca de um bem comum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="span4" id="third-person">
                        <div class="thumbnail">
                            <img src="images/03.png" alt="team 1">
                            <h3>Projetos Sociais</h3>
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-twitter-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="icon-linkedin-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>Projetos Sociais</h2>
                                <p>.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <!-- About us section end -->
				
				<!-- Price section start -->
        <div id="price" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Valores</h1>
                    <p>Turismo Sustentável na região do Cabula.</p>
                </div>
                <div class="price-table row-fluid">
                    <div class="span4 price-column">
                        <h3>Walking Tour</h3>
                        <ul class="list">
                            <li class="price">R$29,99</li>
                            <li><strong>Duração de até 3 horas</strong> </li>
                            <li><strong>Trajeto feito a pé</strong> </li>
                            <li><strong>01 Lembrança da Região</strong> </li>
                        </ul>
                        <a href="#" class="button button-ps">Comprar</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Half Day Tour</h3>
                        <ul class="list">
                            <li class="price">R$59,99</li>
                            <li><strong>Duração de 4 a 6 horas</strong> </li>
                            <li><strong>Tour Gastronômico</strong> </li>
                            <li><strong>Plantio de árvore</strong> </li>
                        </ul>
                        <a href="#" class="button button-ps">Comprar</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Full Day Tour</h3>
                        <ul class="list">
                            <li class="price">R$79,99</li>
                            <li><strong>Duração de 8 a 10 horas</strong> </li>
                            <li><strong>Tour Gastronômico</strong> </li>
                            <li><strong>01 Lembrança exclusiva</strong> </li>
                        </ul>
                        <a href="#" class="button button-ps">Comprar</a>
                    </div>
                </div>
                <div class="centered">
                    <p class="price-text">Nós possuímos planos personalizados. Contate-nos para maiores informações.</p>
                    <a href="#contact" class="button">Contate-nos</a>
                </div>
            </div>
        </div>
				<!-- Price section end -->
				<div id="contact" class="contact">
            <div class="section secondary-section">
                <div class="container">
                    <div class="title">
                        <h1>Nosso itinerário</h1>
                        
                    </div>
                </div>
                <div class="map-wrapper">
                    <div id="map"></div>
                </div>
                <div class="container">
                    <div class="span9 center contact-info">
                        <p>Cabula, Salvador - Ba</p>
                        <p>+55 71 8181 8181</p>
                        <p>+55 71 3333 4444</p>
                        <div class="title">
                            <h3>Estamos nas redes sociais</h3>
                        </div>
                    </div>
                    <div class="row-fluid centered">
                        <ul class="social">
                            <li>
                                <a href="">
                                    <span class="icon-facebook-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-twitter-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-linkedin-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-pinterest-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-dribbble-circled"></span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="icon-gplus-circled"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



				

		<script type="text/javascript" >
		  var customLabel = {
			router: {
			  label: ''
			}
		  };

		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				center: new google.maps.LatLng(-12.932379, -38.4320175),
				zoom: 12
			});
		
			var infoWindow = new google.maps.InfoWindow;

			downloadUrl('mapmarkers1.xml', function(data) {
				var xml = data.responseXML;
				var markers = xml.documentElement.getElementsByTagName('marker');
				Array.prototype.forEach.call(markers, function(markerElem) {
					var name = markerElem.getAttribute('name');
					var address = markerElem.getAttribute('address');
					var type = markerElem.getAttribute('type');
					var num_ip_js = markerElem.getAttribute('ip');
					var point = new google.maps.LatLng(
						parseFloat(markerElem.getAttribute('lat')),
						parseFloat(markerElem.getAttribute('lng')));
					var infowincontent = document.createElement('div');
					var strong = document.createElement('strong');
						strong.textContent = name;
						infowincontent.appendChild(strong);
						infowincontent.appendChild(document.createElement('br'));
					var text = document.createElement('text');
						text.textContent = address
						infowincontent.appendChild(text);
					var label = customLabel[type] || {};
					
					var resultado_status = markerElem.getAttribute('status');

					var marker = new google.maps.Marker({
						map: map,
						position: point,
						label: label.label,
						icon: resultado_status
					});
					
					marker.addListener('click', function() {
						infoWindow.setContent(infowincontent);
						infoWindow.open(map, marker);
					});
				});

			});
		}
		
		function downloadUrl(url, callback) {
			var request = window.ActiveXObject ?
				new ActiveXObject('Microsoft.XMLHTTP') :
				new XMLHttpRequest;

				request.onreadystatechange = function() {
					if (request.readyState == 4) {
						request.onreadystatechange = doNothing;
						callback(request, request.status);
					}
				};

			request.open('GET', url, true);
			request.send(null);
		}
		
		function doNothing() {}
			
		</script>


		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
		

		<!-- ScrollUp button start -->
		<div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>




		<!--Import Google MAPS-->
		<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJc0KgWjFVPq0BhtQg4pTd4dgpcgFjKaw&callback=initMap">
		</script>
	</body>
</html>
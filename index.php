<?php
      session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Easy buy 507</title>
		<meta name="description" content="">
		<meta name="author" content="bonfirelab | www.bonfirelab.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<link rel="stylesheet" href="css/frenzy-orange.css">  <link rel="stylesheet" href="css/easy507.css">
		<link rel="stylesheet" href="css/easy507.css">
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/ico/favicon.png">

		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>

		<script src="js/libs/modernizr.js"></script>
		<script src="js/libs/selectivizr-min.js"></script>
		<script src="js/easy507/index.js"></script>
		
		<script src="js/bootstrap/bootstrap.js"></script>
		<script src="js/plugins/slides.jquery.js"></script>
		<script src="js/plugins/camera.min.js"></script>
		<script src="js/custom.js"></script>
			
		
	</head>
	<body>
	
		<div id="bg"><img src="img/assets/bg/halftone.png" alt="background image" /></div>

		<!--///////////////////////////// Header Area //////////////////////////////////-->

		<!-- Header Start -->
		<header class="header">
			<div class="container visible-desktop">
				<div class="row">
					<div class="span12" role="navigation" id="topnav">
						<!-- top nav -->
						<div class="topnav">
							<div class="pull-left">
                                  <?php                                  
                                    include 'php/contador.php';
                                ?>								
							</div>							
						</div>
					</div>
				</div>
			</div>
			<div id="nav" class="container">
				<div class="row">
				<!-- Logo & Navigation -->
					<div class="span12" role="navigation" id="mainnav">
					<!-- logo se debera adaptar al logo que tiene el cliente -->
					<h1 id="logo" class="visible-desktop"><a href="#">Easybuy507.com</a></h1>

					<!-- Navigation Start -->
					<nav id="responsive-nav" class="hidden-desktop">
						<div class="collapse-menu">
							<!-- <a href="#" class="brand">ddd</a>
							<form class="search">
								<input class="input-medium" type="text" placeholder="Search&hellip;">
							</form> -->
							<ul class="user-menu">
								<li><a href="#signInModal" data-toggle="modal">Ingresar</a></li>								
								<li class="dropdown">
								     <?php                                  
				                                    include 'php/login_user.php';
				                                ?>
								</li>
								
							</ul>
							<span class="collapse-trigger icon awe-chevron-down"></span>
						</div>
						<ul class="first-level dropdown-nav">	
							<li><a href="quienesomos507.php">Quienes Somos</a></li>
							<li><a href="comofunciona.php">Como Funciona <span class="icon awe-chevron-down"></span></a>
								<ul class="second-level">
								    <li><a href="comofunciona.php">Como Funciona </a></li>
									<li><a href="beneficios.php">Beneficios</a></li>
									<li><a href="formadepago.php">Forma de pago</a></li>								
								</ul>
							</li>														
							<li><a href="calculadora.php">Calculdora</a></li>
							<li><a href="cotizar.php">Cotizar</a></li>
							<li><a href="formularioregistro.php">Registrate</a></li>
							<!-- <li id="restringido"><a href="formulario.php">Formulario</a></li> -->
							
														
							
						</ul>
					</nav>
					<!-- este menu que se usa cuando es responsivo lo voy a crear de forma diferente para no hacer el codigo tan largo -->
					<nav id="main-navigation" class="visible-desktop">
						<ul class="first-level">
							<li class="current"><a href="index.php">Inicio</a></li>
							<li><a href="quienesomos507.php">Quienes Somos</a></li>
							<li><a href="comofunciona.php">Como Funciona<span class="icon awe-chevron-down"></span></a>
								<ul class="second-level">
								    <li><a href="comofunciona.php">Como Funciona </a></li>
									<li><a href="beneficios.php">Beneficios</a></li>
									<li><a href="formadepago.php">Forma de pago</a></li>
									
								</ul>
							</li>														
							<li><a href="calculadora.php">Calculdora</a></li>
							<li><a href="cotizar.php">Cotizar</a></li>
							<li><a href="formularioregistro.php">Registrate</a></li>
							<!-- <li class="restringido" ><a href="formulario.php">Formulario</a></li>							 -->
							
						</ul>
					</nav>
					<nav id="secondary-navigation" class="visible-desktop">
						<div class="social-media">
							<ul>
								<li><a href="https://m.facebook.com/profile.php?id=179279285592741&__user=1535890948" target="_blank"><span class="awe-facebook"></span></a></li>
								<li><a href="https://twitter.com/easybuy507pty" target="_blank" class="awe-twitter" data-show-count="false" data-lang="en"></a></li>							
								<!--<li><a href="#"><span class="awe-google-plus"></span></a></li>	-->							
							</ul>
						</div>
						<div class="pull-right">
							<ul>
								<li>
									<ul class="minimenu">
										<li><a href="#signInModal" data-toggle="modal">Ingresar</a></li>							
										<li class="dropdown">
										    <?php                                  
				                                    include 'php/login_user.php';
				                                ?>										    	
										</li>								
									</ul>
							
								</li>								
							</ul>
								
						</div>
					
					</nav>
					<!-- Navigation End -->
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->

		<!--///////////////////////////// Slider Area //////////////////////////////////-->

		<!-- Main Slider Start -->
		<div class="container hidden-phone" id="slideshow">
			<section id="slider" class="row">
				<div class="span8">
					<!-- Begin Slider -->
					<div id="slidejs">
						<!-- Slide items -->
						<div class="slides-container">	

							<div class="slide-outer span8">
							
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/carretilla.png" alt="image"></a>
								</div>
								
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											Compras por Internet, Facil y Seguro.
										</div>
									</div>
								</div>
							</div>
							
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/fird.png" alt="image"></a>
								</div>
								
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											1. Nos dices que producto deseas comprar o nos das la direccion de la pagina donde esta el producto.
										</div>
									</div>
								</div>
							</div>
							
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/segunda.png" alt="image"></a>
								</div>
								
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											2. Te enviamos la cotizacion del total de tu compra con un peso estimado. 
										</div>
									</div>
								</div>
							</div>
							
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/pago.png" alt="image"></a>
								</div>
								
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											3. Si decides comprarlo, debes proceder a efectuar un depoosito por el 50% del valor de tu compra.
										</div>
									</div>
								</div>
							</div>
							
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/correo.png" alt="image"></a>
								</div>
								
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											4. Te enviamos los correos de confirmacion del pago de tu compra.
										</div>
									</div>
								</div>
							</div>
							
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/fin.png" alt="image"></a>
								</div>
							
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											5. Cuando el producto llegue a nuestras oficinas te informaremos para que pases a retirarlo. 
										</div>
									</div>
								</div>
							</div>
							
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/amazon.png" alt="image"></a>
								</div>
							
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											6. En Amanzon encontrara toda clase de articulos. 
										</div>
									</div>
								</div>
							</div>
							
							<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/ebay.png" alt="image"></a>
								</div>
							
								<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											 7. En Ebay encontrara toda clase de articulos. 
										</div>
									</div>
								</div>
							</div>
							
						<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/tigerdirect.png" alt="image"></a>
								</div>
							
							<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											8. En Tiger Direct encontrara toda clase de articulos. 
										</div>
									</div>
								</div>
							</div>
							
							
						<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/best-buy.png" alt="image"></a>
								</div>
							
							<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											9. En Best Buy encontrara toda clase de articulos. 
										</div>
									</div>
								</div>
						</div>
						
						<div class="slide-outer span8">
								<div class="slide-inner">
									<a href="#" title="title"><img src="img/assets/slideshow/walmart.png" alt="image"></a>
								</div>
							
							<div class="slide-caption">
									<div class="caption-inner">
										<div class="caption-after"></div>
										<div class="caption">
											10. En WaltMart encontrara toda clase de articulos. 
										</div>
									</div>
								</div>
						</div>
						
						</div>
					
					</div>
					<!-- End Slider -->
				</div>
				<!-- End Span8 -->

				<!-- Begin Span4 Carousel Slider --> 
				<div class="span4 carousel-widget visible-desktop" id="slider-widget">
					<div class="widget-header">
						<h3 class="widget-heading">Nuestras Azafatas</h3>
					</div>
					<div class="widget-content carousel slide" id="carousel-widget">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-widget"></li>
							<li data-slide-to="1" data-target="#carousel-widget"></li>
							<li data-slide-to="2" data-target="#carousel-widget"></li>
						</ol>
						<!-- Begin Carousel Inner -->
						<div  class="carousel-inner">
						<div id="azafatas1" class="slide-section active item"> </div>
						<div id="azafatas2" class="slide-section item"> </div>
						<div id="azafatas3" class="slide-section item"> </div>
						<div id="azafatas4" class="slide-section item"> </div>
							<!-- Begin Slide Section / Carousel Item -->
							<!-- <div class="s|lide-section active item">
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div> 
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div>
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div>
							</div>
							<div class="slide-section item">
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div> 
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div>
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div>
							</div>
							<div class="slide-section item">
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div> 
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div>
								<div class="separator"></div>
								<div class="slide-item media">
								<a class="pull-left media-thumbnail" href="#">
								<img class="media-object" src="../easy507index/img/azafatas/avatar-1.png" alt="thumbnail" />
								</a><div class="media-body">
								<h4 class="media-heading">
								<a href="#">migel vecs</a>
								
								</h4>
								<p>Luego en la página upload.php que es que se encarga de recibir los datos del }
								formulario (Lo definimos en la propiedad action del formulario). El archivo 
								seleccionado es subido temporalmente a una carpeta, entonces tenemos que copiar
								el archivo a la carpeta final, en caso contrario este archivo se eliminará automáticamente.</p>
								</div>
								</div>
							</div> -->
							<!-- End Slide Section / Carousel Item -->
							
						</div>
						<!-- End Carousel Inner -->
					
					</div>
				</div>
				<!-- End Span 4 Carousel Slider -->
			</section>
		</div>
		<!-- Main Slider End -->

		<!--///////////////////////////// End Slider Area //////////////////////////////////-->

		<!--///////////////////////////// Main Content Area //////////////////////////////////-->

		<!-- Main Content Wrapper Start -->
		<div class="container" role="main">
			<section id="popular-content" class="row visible-desktop">
				
				<div class="popular-item span3">
					<div >
						<img class="publicidad" src="img/assets/placeholder/uno.PNG"/>
					</div>
					<div class="popular-content">
						<h4>SE VENDE XBOX 360 MODIFICADA, NUEVA, LLAMAR AL 6220-1905.</h4>
						<p>
							<!-- Ut dignissim aliquet nibh tristique. Donec ullamcorper nulla quis 
							Praesent a tellus vitae nisl vehicula semper.  -->
						</p>
					</div>
				</div>
				<div class="popular-item span3">
					<div >
						<img class="publicidad" src="img/assets/placeholder/dos.PNG" alt="image" />
					</div>
					<div class="popular-content">
						<h4>SE ALQUILA APARTAMENTO EN EL P.H. VIVENDI TOWER Torre 300 DETRAS DE Plaza Edison, $1,300.00</h4>
						<h4>llamar al 6843-8751</h4>
						<p>
							<!-- Ut dignissim aliquet nibh tristique. Donec ullamcorper nulla quis 
							Praesent a tellus vitae nisl vehicula semper.  -->
						</p>
					</div>
				</div>
				<div class="popular-item span3">
					<div >
						<img class="publicidad" src="img/assets/placeholder/tres1.PNG" alt="image"/>
					</div>
					<div class="popular-content">
						<h4><a href="#" title="title">Se alquilan cuartos solos o compartidos edificio central park Torre Manhattan llamar al celular 6843-8751</a></h4>
						<p>
							<!-- Ut dignissim aliquet nibh tristique. Donec ullamcorper nulla quis 
							Praesent a tellus vitae nisl vehicula semper.  -->
						</p>
					</div>
				</div>
				<div class="popular-item span3">
					<div>
						<img class="publicidad" src="img/assets/placeholder/ford.PNG" alt="image"/>
					</div>
					<div class="popular-content">
						<h4><a href="#" title="title">Ofrecemos servicios de azafatas para todos sus eventos, tenemos una variedad de jovenes con experiencia en este tramo, llamenos ,6220-1905 o 6843-8751</a></h4>
						<p>
						<!-- 	Ut dignissim aliquet nibh tristique. Donec ullamcorper nulla quis 
							Praesent a tellus vitae nisl vehicula semper. --> 
						</p>
					</div>
				</div>

			</section>

		
		</div>
		<!-- Main Content Wrapper End -->

		<!--///////////////////////////// Footer Area //////////////////////////////////-->

		<!-- Footer Start -->
		<footer class="footer">
			
			<div class="container" role="navigation">
				<section class="row">
					<div class="footer-menu">						
					</div>
					<div class="visible-desktop">
						<a href="#" title="easybuy507">easybuy507</a>
					</div>
					<div class="copyright">
						<p>Copyright &copy; 2013 <a href="http://easybuy507.com" title="easybuy507.com">easybuy507</a>. All rights reserved.
						</p>
					</div>
				</section>
			</div>
		</footer>
		<!-- Footer End -->

 
<!-- Modal -->
<div id="signInModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
    <div class="modal-header">
    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    	<h3 id="signInModalLabel">Ingresar</h3>
    </div>
	<div class="modal-body">
		<form method="post" action="/easy507index/php/login.php" name="login_form">
			<p><input type="text" class="span3" name="email" id="email" placeholder="Email"></p>
			<p><input type="password" class="span3" name="passwd" id="passwd" placeholder="Password"></p>
			<p><button id="btnenviar" type="submit" class="btn btn-primary">Ingresar</button>
				<!-- <a href="#">Olvisates la contraseña?</a> -->
			</p>
		</form>
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Salir</button>
	</div>
</div>

	</body>
</html>
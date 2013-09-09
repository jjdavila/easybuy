
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Left Sidebar | Frenzy Responsive HTML Template</title>
		<meta name="description" content="">
		<meta name="author" content="bonfirelab | www.bonfirelab.com">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<link rel="stylesheet" href="css/frenzy-orange.css">
		<link rel="stylesheet" href="css/easy507.css">	
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/ico/favicon.ico">

		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		
		<script>window.jQuery || document.write('<script src="js/libs/jquery.js"><\/script>')</script>

		<script src="js/libs/modernizr.js"></script>
		<script src="js/libs/selectivizr-min.js"></script>
		
		<script src="js/bootstrap/bootstrap.js"></script>
		<script src="js/plugins/slides.jquery.js"></script>
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
								    session_start();
                                    if (isset($_SESSION["cuenta_paginas"])){ 
									   	$_SESSION["cuenta_paginas"] = 0; 
									}else{ 
									   	$_SESSION["cuenta_paginas"]=1; 
									}
                                    $archivo_contador = "contador/visitas.txt";
                                    $leer = fopen($archivo_contador,"r");
                                    $cuenta = trim(fread($leer,filesize($archivo_contador))); 

                                    if ($cuenta != "") $cuenta = $_SESSION["cuenta_paginas"] + $cuenta;
                                    else $cuenta = 1;
                                    @fclose($leer);
                                    $leer = fopen($archivo_contador,"w");
                                    @fputs($leer,$cuenta);

                                    @fclose($leer); 
                                    echo '<span class="visitantes">Visitante numero: '.$cuenta.'</span>';
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
								<li><a href="#signInModal" data-toggle="modal">Sign In</a></li>								
								<li class="dropdown">
								    <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account 
								    	<span class="awe-caret-down icon-white"></span></a>
								    <ul class="dropdown-menu">
									    <li><a href="#"><span class="awe-dashboard"></span> Dashboard</a></li>
								    	<li><a href="#"><span class="awe-user"></span> Perfil</a></li>
								    	<li><a href="#"><span class="awe-cog"></span> Configuracion</a></li>
								    	<li><a href="#"><span class="awe-signout"></span> </a></li>
								    </ul>
								</li>
							</ul>
							<span class="collapse-trigger icon awe-chevron-down"></span>
						</div>
						<ul class="first-level dropdown-nav">							
							<li class="current"><a href="index.html">Inicio</a></li>
							<li><a href="quienesomos507.html">Quienes Somos</a></li>
							<li><a href="comofunciona.html">Como Funciona <span class="icon awe-chevron-down"></span></a>
								<ul class="second-level">
								    <li><a href="comofunciona.html">Como Funciona </a></li>
									<li><a href="beneficios.html">Beneficios</a></li>
									<li><a href="formadepago.html">Forma de pago</a></li>								
								</ul>
							</li>														
							<li><a href="calculadora.html">Calculdora</a></li>
							<li><a href="cotizar.html">Cotizar</a></li>
							<li><a href="#">Promociones</a></li>							
							
						</ul>
					</nav>
					<!-- este menu que se usa cuando es responsivo lo voy a crear de forma diferente para no hacer el codigo tan largo -->
					<nav id="main-navigation" class="visible-desktop">
						<ul class="first-level">
							<li class="current"><a href="index.html">Inicio</a></li>
							<li><a href="quienesomos507.html">Quienes Somos</a></li>
							<li><a href="comofunciona.html">Como Funciona <span class="icon awe-chevron-down"></span></a>
								<ul class="second-level">
								    <li><a href="comofunciona.html">Como Funciona </a></li>
									<li><a href="beneficios.html">Beneficios</a></li>
									<li><a href="formadepago.html">Forma de pago</a></li>								
								</ul>
							</li>														
							<li><a href="calculadora.html">Calculdora</a></li>
							<li><a href="cotizar.html">Cotizar</a></li>
							<li><a href="#">Promociones</a></li>							
							
						</ul>
					</nav>
					<nav id="secondary-navigation" class="visible-desktop">
						<div class="social-media">
							<ul>
								<li><a href="#"><span class="awe-facebook"></span></a></li>
								<li><a href="#"><span class="awe-twitter"></span></a></li>								
								<li><a href="#"><span class="awe-google-plus"></span></a></li>								
							</ul>
						</div>
						<div class="pull-right">
							<ul>
								<li>
									<ul>
										<li><a href="#signInModal" data-toggle="modal">Ingresar</a></li>							
										<li class="dropdown">
										    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi cuenta
										    	<span class="awe-caret-down icon-white"></span></a>
										    <ul class="dropdown-menu">											    
										    	<li><a href="#"><span class="awe-user"></span> Perfi</a></li>
										    	<li><a href="#"><span class="awe-cog"></span> Configuracion</a></li>
										    	<li><a href="#"><span class="awe-signout"></span> Cerrar sescion</a></li>
										    </ul>
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



		<!--///////////////////////////// Main Content Area //////////////////////////////////-->

		<!-- Main Content Wrapper Start -->
		<div class="container" role="main">
			<!-- Main Content -->
			<section id="main-content" class="row">

				<!-- Sidebar Content -->
				<div id="left-sidebar" class="span4">						

					<!-- Sidebar Block Widget -->
					<div class="sidebar-widget sidebar-block">
						<div class="sidebar-header">
							<h4>Tiendas</h4>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content menu-widget">
						<ul>
								<li>
									<a href="tiendamujer.html" title="Title">Mujer, Moda, Calzados, Ropa...</a>
								</li>
								<li>
									<a href="tiendahombre.html" title="Title">Hombres, Moda, Calzados, Ropa...</a>
								</li>
								<li>
									<a href="tiendaautos.html" title="Title">Parte de Autos</a>
								</li>
								<li>
								
									<a href="tiendajuegos.html" title="Title">Juegos, Computadoras, Celulares...</a>
									
								<li>
									<a href="tiendapeliculas.html" title="Title">Películas, Música, Guitarras...</a>
								</li>
								<li>
									<a href="tiendacasa.html" title="Title">Casa, Jardineria</a>
								</li>
								<li>
									<a href="tiendadeporte.html" title="Title">Deportes, Salud</a>
								</li>
								<li>
									<a href="tiendaninos.html" title="Title">Niños, Bebes, Juguetes</a>
								</li>
								<li>
									<a href="tiendalibros.html" title="Title">Libros</a>
								</li>
								<li>
									<a href="tiendafiesta.html" title="Title">Fiestas, Cumpleaños, Mascotas...</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Latest News Widget -->
					<div class="sidebar-widget" id="latest-news">
						
						<div class="sidebar-header">
							<h4>Noticias Video juegos</h4>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content post-widget">
							<ul>
								<li class="sidebar-item">
									<a href="#" class="image-polaroid" title="Title">
										<img src="img/assets/slideshow/thumbnail-square.png" alt="Image" />
									</a>
									<h5><a href="#">Consectetur Adipiscing Elit Maecenas Justo Massa</a></h5>
									<span class="post-date"><em>November, 10 2012</em></span>
								</li>
								<li class="sidebar-item">
									<a href="#" class="image-polaroid" title="Title">
										<img src="img/assets/slideshow/thumbnail-square.png" alt="Image" />
									</a>
									<h5><a href="#">Consectetur Adipiscing Elit Maecenas Justo Massa</a></h5>
									<span class="post-date"><em>November, 10 2012</em></span>
								</li>
								<li class="sidebar-item">
									<a href="#" class="image-polaroid" title="Title">
										<img src="img/assets/slideshow/thumbnail-square.png" alt="Image" />
									</a>
									<h5><a href="#">Consectetur Adipiscing Elit Maecenas Justo Massa</a></h5>
									<span class="post-date"><em>November, 10 2012</em></span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- End Sidebar -->


				<div id="content" class="span8">
				  
					<div class="post-single" id="post">
						<div class="content-outer">
							<div class="content-inner">
								<article>
									<div class="article-header">
										<h1 class="title">Cotizar</h1>
										
										<div class="separator"></div>
									</div>
									<div class="article-thumbnail">
											<a href="#"><img  class="beneficio" src="img/assets/507/cotizar.jpg"/></a>
										<div class="caption">Image Caption Goes In Here</div>
									</div>
									<div class="article-content">
									
										<p class="formatos_de_textos">    
										Para que le podamos cotizar debe enviarnos un e-mail con el link que muestra la mercanc&iacute;a que desea comprar y nosotros le responderemos con el monto 
										  aproximado, recuerde que este monto podr&aacute; variar dependiendo de c&oacute;mo
												el 
										  vendedor empaque el producto.  </p>
										
									
										<div class="post-single" id="post">																																		
										<h3 class="post-lead">Contacteme.</h3>
										<div class="row-fluid">
											<form id="contact" action="php/contacto.php" method="post">
											<div class="span6">
												<form method="post" action="mail.php" >
												    <fieldset>
												    	<label class="formatos_de_textos">Nombre:</label>
												    	<input type="text" name="contact_name" class="input-xlarge" placeholder="Type something…">
												    </fieldset>

												    <fieldset>
												    	<label class="formatos_de_textos">Correo Electronico</label>
												    	<input type="email" name="contact_email" class="input-xlarge" placeholder="Type something…">
												    </fieldset>												  

												    <fieldset>
												    	<label class="formatos_de_textos">Mensaje:</label>
												    	<textarea name="contact_messages" rows="8" class="input-xxlarge" placeholder="Type something…"></textarea>
												    </fieldset>

												   
												    <button type="submit" class="pull-right btn btn-flat">Enviar</button>
												    <input type="hidden" name="send_email" id="send_email" value="true" />
											    </form>
											</div>

											</form>s
										</div>
																											
							</div>
								</article>								
							</div>

							<!-- content inner -->
						</div>
						<!-- content outer -->
					</div>
				    
				</div>
				

			</section>
			<!-- End Main Content -->

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


	</body>
</html>
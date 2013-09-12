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
		<link rel="stylesheet" href="css/frenzy-orange.css">		
		<link rel="stylesheet" href="css/easy507.css">		
	    <!-- Fav and touch icons -->
		<link rel="shortcut icon" href="img/ico/favicon.ico">

		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		
		<script src="js/libs/jquery.js"></script>

		<script src="js/libs/modernizr.js"></script>
		<script src="js/libs/selectivizr-min.js"></script>
		
		<script src="js/bootstrap/bootstrap.js"></script>
		<script src="js/plugins/slides.jquery.js"></script>
		<script src="js/custom.js"></script>
		<script src="js/easy507/calculadora.js"></script>
		<script src="js/easy507/validarcampo.js"></script>
		<script src="js/easy507/validaciones.js"></script>

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
								    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi Cuenta 
								    	<span class="awe-caret-down icon-white"></span></a>
								    <ul class="dropdown-menu">									    
								    	<li><a href="#"><span class="awe-user"></span> Perfil</a></li>
								    	<li><a href="#"><span class="awe-cog"></span> Configuracion</a></li>
								    	<li><a href="#"><span class="awe-signout"></span> Cerrar Sesion</a></li>
								    </ul>
								</li>
							</ul>
							<span class="collapse-trigger icon awe-chevron-down"></span>
						</div>
						<ul class="first-level dropdown-nav">							
							<li class="current"><a href="index.php">Inicio</a></li>
							
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
							<li><a href="#">Promociones</a></li>							
							
						</ul>
					</nav>
					<!-- este menu que se usa cuando es responsivo lo voy a crear de forma diferente para no hacer el codigo tan largo -->
					<nav id="main-navigation" class="visible-desktop">
						<ul class="first-level">
							<li class="current"><a href="index.php">Inicio</a></li>
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
							<li><a href="#">Promociones</a></li>							
							
						</ul>
					</nav>
					<nav id="secondary-navigation" class="visible-desktop">
						<div class="social-media">
							<ul>
								<li><a href="#"><span class="awe-facebook"></span></a></li>
								<li><a href="https://twitter.com/JonathanJD2" target="_blank" class="awe-twitter" data-show-count="false" data-lang="en"></a></li>							
								<li><a href="#"><span class="awe-google-plus"></span></a></li>								
							</ul>
						</div>
						<div class="pull-right">
							<ul>
								<li>
									<ul class="minimenu">
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
									<a href="tiendamujer.php" title="Title">Mujer, Moda, Calzados, Ropa...</a>
								</li>
								<li>
									<a href="tiendahombre.php" title="Title">Hombres, Moda, Calzados, Ropa...</a>
								</li>
								<li>
									<a href="tiendaautos.php" title="Title">Parte de Autos</a>
								</li>
								<li>
								
									<a href="tiendajuegos.php" title="Title">Juegos, Computadoras, Celulares...</a>
									
								<li>
									<a href="tiendapeliculas.php" title="Title">Películas, Música, Guitarras...</a>
								</li>
								<li>
									<a href="tiendacasa.php" title="Title">Casa, Jardineria</a>
								</li>
								<li>
									<a href="tiendadeporte.php" title="Title">Deportes, Salud</a>
								</li>
								<li>
									<a href="tiendaninos.php" title="Title">Niños, Bebes, Juguetes</a>
								</li>
								<li>
									<a href="tiendalibros.php" title="Title">Libros</a>
								</li>
								<li>
									<a href="tiendafiesta.php" title="Title">Fiestas, Cumpleaños, Mascotas...</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- datos de noticias.... -->
					<div class="sidebar-widget" id="latest-news">
						
						<div class="sidebar-header">
							<h4>Twitter</h4>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content post-widget">
						<!--codigo de twitter inicio-->
						<a class="twitter-timeline"  href="https://twitter.com/JonathanJD2"  data-widget-id="377097161109823489">Tweets por @JonathanJD2</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						<!--codigo de twitter fin-->
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
										<h1 class="title">Calculadora</h1>
										
										<div class="separator"></div>
									</div>
									<div class="article-thumbnail">
											<a href="#"><img  class="beneficio" src="img/assets/507/calculadora.jpg"/></a>
										<div class="caption">Realiza tus calculos</div>
									</div>
									<div class="article-content">
										<div class="row-fluid">
											<div>
												<h4>Validate State</h4>
											    

											     <div class="control-group info">
												    <label class="control-label" for="precio">Precio:</label>
												    <div class="controls">
												    	<input type="text" id="precio" class="precio">
												    	<span class="help-inline">Introduzca el precio que aparece en la pagina!</span>
												    </div>
											    </div>
											    <div>
												<label class="control-label">Peso:</label>
												<div>													
													<select id="peso" name="peso">
												        <option value="1" selected> 1 </option>
														<option value="2"> 2 </option>
														<option value="3"> 3 </option>
														<option value="4"> 4 </option>
														<option value="5"> 5 </option>
														<option value="6"> 6 </option>
														<option value="7"> 7 </option>
														<option value="8"> 8 </option>
														<option value="9"> 9 </option>
														<option value="10"> 10 </option>
														<option value="11"> 11 </option>
														<option value="12"> 12 </option>
														<option value="15"> 15 </option>
														<option value="18"> 18 </option>
														<option value="20"> 20 </option>
														<option value="25"> 25 </option>
														<option value="30"> 30 </option>
														<option value="35"> 35 </option>
														<option value="40"> 40 </option>
														<option value="45"> 45 </option>
														<option value="50"> 50 </option>
														<option value="75"> 75 </option>
												    </select>
												     <select id="lb_kg" name="lb_kg" >
														<option value="1" selected> Lb(s) </option>
														<option value="2" > Kg(s) </option>
													</select>
												</div>
											    
										       </div>
										       <div>
											       <span class="salida_calculo">Valor del Flete= </span>
											       <span id="valorflete"  class="valor_calculo">0</span>
										       </div>
										       <div>
											       <span class="salida_calculo">Gastos del Tramite y manejo= </span>
											       <span id="gastos" class="valor_calculo">0</span>
										       </div>
										       <div>
											       <span class="salida_calculo">Total a Pagar= </span>
												   <span id="preciototal" class="valor_calculo">0</span>
										       </div>
										       <div>
											       <span class="salida_calculo">Abono Minimo= </span>
											       <span id="abono" class="valor_calculo">0</span>
										       </div>
											   <div>
											   	 <button id="enviar" class="btn btn-large btn-primary" type="button" value="Calcular" onclick="Calcular();">Calcular</button>
											   </div>
											</div>
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
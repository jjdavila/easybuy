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
										<h1 class="title">Deportes y Salud...</h1>
										
										<div class="separator"></div>
									</div>
									<div class="article-thumbnail">
											<a href="#"><img  class="beneficio" src="img/assets/507/tiendadeportes.jpg"/></a>
										<div class="caption">Image Caption Goes In Here</div>
									</div>
									<div class="article-content">
								<ul>
								 <table>
        <tr>
            <td>
                <a href="http://edwinwattsgolf.com">edwinwattsgolf.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://tenniscompany.com">tenniscompany.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://3balls.co">3balls.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://roadrunnersports.com">roadrunnersports.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://golf.com">golf.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://westmarine.com">westmarine.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://sportsauthority.com">sportsauthority.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://store.nba.com">store.nba.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://globalgolf.com">globalgolf.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://rei.com">rei.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://patagonia.com">patagonia.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://drugstore.com">drugstore.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://pinemeadowgolf.com">pinemeadowgolf.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://bodybuilding.com">bodybuilding.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://gigagolf.com">gigagolf.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://ebodyboarding.com">ebodyboarding.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://championusa.com">championusa.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://nflshop.co">nflshop.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://fogdog.com">fogdog.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://eastbay.com">eastbay.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://footlocker.com">footlocker.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://finishline.com">finishline.com</a></td>
        </tr>
        <tr>
            <td>
                <a href="http://thebodyshop-usa.com">thebodyshop-usa.com</a></td>
            <td style="width: 53px">
            </td>
            <td>
                <a href="http://skinlaboratory.com">skinlaboratory.com</a>
            </td>
        </tr>
    </table>
		
            
										
								</ul>

									<!--
										<h2 class="post-lead">Blockquotes</h2>
										<blockquote>
											<p>Somos una empresa totalmente nueva, estamos ubicados 
										  en Urbanizaci&oacute;n Green Valley Calle A No. 111, Albrook, 
										  Anc&oacute;n.<br>Cont&aacute;ctanos a los tel&eacute;fonos: <br>Oficina: 
										  (507)315-0563<br>Celular:6220-1905.<br> </p>
											<small>Someone famous <cite title="Source Title">Source Title</cite></small>
										</blockquote>

										<h3 class="post-lead">Unordered &amp; Ordered Lists</h3>
										
										<ul>
											<li>Hoc est non modo cor non habere, sed ne palatum quidem.</li>
											<li>Illis videtur, qui illud non dubitant bonum dicere -;</li>
										</ul>
										<ol>
											<li>Si enim ita est, vide ne facinus facias, cum mori suadeas.</li>
											<li>Familiares nostros, credo, Sironem dicis et Philodemum, cum optimos viros, tum homines doctissimos.</li>
											<li>Sed tamen enitar et, si minus multa mihi occurrent, non fugiam ista popularia.</li>
											<li>At iam decimum annum in spelunca iacet.</li>
										</ol>
										<p>
											Ut dignissim aliquet nibh tristique hendrerit. Donec ullamcorper nulla quis metus vulputate id placerat augue eleifend. Aenean venenatis consectetur orci, sit amet ultricies magna sagittis vel. Nulla non diam nisi, ut ultrices massa. Pellentesque sed nisl metus. Praesent a mi vel ante molestie venenatis.
										</p>
									</div>	
								-->
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
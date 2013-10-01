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
								     <?php                                  
				                                    include 'php/login_user.php';
				                                ?>
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
							<li><a href="formularioregistro.php">Registrate</a></li>
							
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
							<li><a href="formularioregistro.php">Registrate</a></li>
							
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
					<!-- Latest News Widget -->
					<div class="sidebar-widget" id="latest-news">
						
						<div class="sidebar-header">
							<h4>Twitter</h4>
							<div class="separator"></div>
						</div>
						<div class="sidebar-content post-widget">
						<!--codigo de twitter inicio-->				
						<a class="twitter-timeline"  href="https://twitter.com/easybuy507pty"  data-widget-id="384308828000378880">Tweets by @easybuy507pty</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						<!--codigo de twitter fin-->

						
						<!-- INICIO codigo de fb-->
						
						<h4>FACEBOOK</h4>
						
						
	 			<script>
						  window.fbAsyncInit = function() {
							// init the FB JS SDK
							FB.init({
							  appId      : 'YOUR_APP_ID',                        // App ID from the app dashboard
							  channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel file for x-domain comms
							  status     : true,                                 // Check Facebook Login status
							  xfbml      : true                                  // Look for social plugins on the page
							});

							// Additional initialization code such as adding Event Listeners goes here
						  };

						  // Load the SDK asynchronously
						  (function(d, s, id){
							 var js, fjs = d.getElementsByTagName(s)[0];
							 if (d.getElementById(id)) {return;}
							 js = d.createElement(s); js.id = id;
							 js.src = "//connect.facebook.net/en_US/all.js";
							 fjs.parentNode.insertBefore(js, fjs);
						   }(document, 'script', 'facebook-jssdk'));
						</script>
						 

						<div id="fb-root"></div>
						<script>(function(d, s, id) {
						  var js, fjs = d.getElementsByTagName(s)[0];
						  if (d.getElementById(id)) return;
						  js = d.createElement(s); js.id = id;
						  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
						  fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
												
													<div id="fb-root"></div>
	
						
						<!--https://www.facebook.com/easybuy507-->
						<div class="fb-like" data-href="https://m.facebook.com/profile.php?id=179279285592741&__user=1535890948" data-width="450" data-show-faces="true" data-send="true"></div>
						<!--<div class="fb-like" data-href="http://www.facebook.com/jjdavilas" data-width="450" data-show-faces="true" data-send="true"></div>-->
						<!--	<div class="fb-like" data-href="http://developers.facebook.com/docs/reference/plugins/like" data-width="450" data-show-faces="true" data-send="true"></div>-->

						<!-- fin codigo de fb-->						
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
										<h1 class="title">Forma de Pago</h1>
										
										<div class="separator"></div>
									</div>
									<div class="article-thumbnail">
											<a href="#"><img  class="beneficio" src="img/assets/507/formadepago.jpg"/></a>
										<div class="caption">Image Caption Goes In Here</div>
									</div>
									<div class="article-content">
									<ul>
									    Una vez revisada la cotizaci&oacute;n del art&iacute;culo y 
										  de decidirte a realizar la compra, para que <B>easybuy507.com</B> proceda a 
										  efectuar tu compra debes realizar el abono que te indica la 
										  cotizaci&oacute;n.
										  La cual puedes pagar de la siguiente manera, en
										  cualquiera de nuestras sucursales:
										<p>
											<li><strong>Cheque</strong>: No tenemos 
											inconvenientes en aceptar pagos con cheques en caso de abonos, pero para 
											cancelar el monto faltante y retirar el paquete, el pago con cheque est&aacute; 
											sujeto a la aprobaci&oacute;n. El cargo por cheque devuelto es B/.25.00
												+ cargos 
											bancario. </li>
											<li><strong>Dep&oacute;sito Bancario</strong> en 
											cualquiera sucursal de <strong>BANESCO</strong>
												al n&uacute;mero de cuenta de ahorro <strong>20100784740</strong>, a nombre de <strong>Edwin Herrera</strong>, luego debe realizar la 
											notificaci&oacute;n a nosotros que el pago ha sido efectuado. </li>
											<li><strong>Transferencia en linea</strong>:
											Puede realizar la transferencia bancaria en l&iacute;nea desde su cuenta a la 
											nuestra. Transferencias del mismo banco toman algunos horas, entre 
											bancos diferentes 1-2 d&iacute;as.</li>
										</p>
											</ul> 
								<!--			
										<h3 class="post-lead">Blockquotes</h3>
										<blockquote>
											<p>Quid paulo ante, inquit, dixerim nonne meministi, cum omnis dolor detractus esset, variari, non augeri voluptatem?</p>
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
<!DOCTYPE HTML>
<html>

<head>
  <title>Easy buy 507</title>
  <meta name="description" content="Empesa dedicada a la compra de articulos por internet" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  
</head>
<body>

        <?php
        if(isset($_SESSION['user'])){
        	$usuario = $_SESSION['user']; 
        }
        else{
        	$usuario =""; 
        }
        if(isset($_SESSION['rol'])){        	
        	$rol = $_SESSION['rol']; 
        }
        else{
        	$rol =""; 
        }
        
              
        	 if ($usuario != ""){
        	 	if($rol=="1"){
        	 		echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">' . $usuario .' <span class="awe-caret-down icon-white"></span></a><ul class="dropdown-menu"><li><a href="formulario.php"><span class="awe-cog"></span>Azafatas</a></li><li><a href="php/cerrar_sesion.php"><span class="awe-signout"></span> Cerrar Sesion</a></li></ul>';
        	 	}
        	 	else{
        	 		echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">' . $usuario .' <span class="awe-caret-down icon-white"></span></a><ul class="dropdown-menu"><li><a href="php/cerrar_sesion.php"><span class="awe-signout"></span> Cerrar Sesion</a></li></ul>';
        	 	}
        	 	
        		//echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">' . $usuario;
        	 }
        	else{
        		echo '';
        	 }     
        ?>
    </body>
</html>


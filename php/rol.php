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
        if(isset($_SESSION['rol'])){
        	echo '<script>alert("rol!");window.location="../index.php"</script>'; 
        	$rol = $_SESSION['rol']; 
        }
        else{
        	$rol =""; 
        }                     
        	 if ($rol != ""){
        	 	if($rol == "1"){
        	 		echo '<script>$(".restringido").css("visibility","hidden");</script>'; 
        	 	}
        	 	else{
        	 		echo '<script>$(".restringido").css("visibility","hidden");</script>'; 
        	 	}
        		
        	 }
        	else{
        		echo '<script>$(".restringido").css("visibility","hidden");</script>'; 
        	 }     
        ?>
    </body>
</html>

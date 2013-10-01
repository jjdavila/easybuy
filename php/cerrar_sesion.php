<?php
session_start();
	session_destroy();
	//echo $consulta;
	$_SESSION['user']="";
	$_SESSION['rol']="";
        echo '<script>window.location="../index.php"</script>'; 
        //echo '<script>window.location="../index.php"</script>';

     
?>
<?php
      session_start();
?>
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
        require_once('conexion/conexion.php');
        //Recibir
                if (isset($_POST["email"])) {
                $nombre = trim(htmlspecialchars($_POST["email"]));
            }
            else{
                $nombre="";
            }
            if (isset($_POST["passwd"])) {

                $pass = trim(htmlspecialchars($_POST["passwd"]));
            }
            else{
                $pass="";
            }  
                $select='select nombre, apellido, rol from usuarios where correo = \''.$nombre.'\' AND contrasenna = \''.$pass.'\';';

                    $meter = @mysql_query($select, $conexion);
                    $num_rows = mysql_num_rows($meter);
                   // echo  $select;
                   if($num_rows < 1)
                			{
                        
                        echo '<script>alert("El usuario y/o pass son incorrectos.");window.location="../index.php"</script>';
                         
                			}else{
                        while($row = mysql_fetch_array($meter)) { 
                           $_SESSION['user'] =  $row["nombre"]." ".$row["apellido"];
                           $_SESSION['rol'] =  $row["rol"];
                           echo $_SESSION['rol'];
                           echo '<script>alert("BIENVENIDO!");window.location="../index.php"</script>'; 
                         }
                        
                				
                			}     
                 mysql_free_result($meter); 
                 mysql_close($conexion);
        ?>
    </body>
</html>


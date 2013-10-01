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
        if (isset($_POST["txtnombre"])) {

        $nombre = trim(htmlspecialchars($_POST["txtnombre"]));
    }
    else{
        $nombre="";
    }
        $apellido = trim(htmlspecialchars($_POST["txtapellido"]));
        $cedula = trim(htmlspecialchars($_POST['txtcedula']));
        $email = trim(htmlspecialchars($_POST['txtemail']));
        $user = trim(htmlspecialchars($_POST['txtuser']));
        $pass = trim(htmlspecialchars($_POST['txtpass']));
        $pass2 = trim(htmlspecialchars($_POST['txtpass2']));

        $insert='INSERT INTO easy507.usuarios ' .
                '(Nombre, apellido, cedula, rol, correo, usuario, contrasenna, telefono, celular) '.
                'VALUES (\''.$nombre.'\', \''.$apellido.'\', \''.$cedula.'\', 2, \''.$email.'\', \''.$user.'\', \''.$pass.'\', \'por ahora no\', \'por ahora no\');';        
       
            $meter = @mysql_query($insert);
            if ($meter) {
                //echo $insert;
                echo '<script>  alert("Se el registro fue un exito!");window.location="../formularioRegistro.php"</script>';
            } else {
                echo 'Hubo un error en al intentar registrar los campos.';
               // echo $insert;
            }
             mysql_free_result($meter); 
             mysql_close($conexion); 
        ?>
    </body>
</html>


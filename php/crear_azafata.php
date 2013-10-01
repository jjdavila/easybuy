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
        if (isset($_POST["txtnombres"])) {
                $nombre = trim(htmlspecialchars($_POST["txtnombres"]));
          }
        else{
              $nombre="";
          }
          if (isset($_POST["txtapellidos"])) {
               $apellido = trim(htmlspecialchars($_POST["txtapellidos"]));
          }
        else{
              $apellido="";
          }
          if (isset($_POST["txtedad"])) {
               $edad = trim(htmlspecialchars($_POST["txtedad"]));
          }
        else{
              $edad="";
          }
          if (isset($_POST["txtmensajes"])) {
                $mensaje = trim(htmlspecialchars($_POST['txtmensajes']));
          }
        else{
              $mensaje="";
          }

          if (isset($_FILES["uplimagen"])) {
               // $foto = trim(htmlspecialchars($_POST['uplimagen']));
                //comandos para subir los archivos
                $carpeta = "../img/azafatas/";
                opendir($carpeta);
                $destino = $carpeta . $_FILES['uplimagen']['name'];
                //$tamanio = $_FILES['uplimagen']['size'];
                $tipo =  $_FILES['uplimagen']['type'];
               // echo $destino;
                //echo $tipo;
                 //   echo "esta es una prueba "."$tipo";
                //if ()) {
                if($tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/bpn"){
                          move_uploaded_file( $_FILES['uplimagen']['tmp_name'], $destino);
                        $foto = strip_tags($_FILES['uplimagen']['name']);
                        $insert='INSERT INTO easy507.asafatas ' .
                                '(Nombre, edad, descrpcion, foto)'.
                                'VALUES (\''.$nombre.' '.$apellido.'\',' .$edad. ' , \''.$mensaje.'\',\''.$foto.'\');';        
                       
                            $meter = @mysql_query($insert);
                            if ($meter) {
                                //echo $insert;
                                echo '<script>  alert("Se el registro fue un exito!");window.location="../formulario.php"</script>';
                            } else {
                               echo '<script>  alert("Hubo un error en al intentar registrar los campos.!");window.location="../formulario.php"</script>';
                               // echo 'Hubo un error en al intentar registrar los campos.';
                                //echo $insert;
                            }
                        mysql_free_result($meter); 
                        mysql_close($conexion);                  
                }
                else{
                   echo '<script>  alert("Hubo un error en al intentar registrar los campos.! El archivo no es una imagen");window.location="../formulario.php"</script>';
                }
                
          }
              
        ?>
    </body>
</html>


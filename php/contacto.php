<!DOCTYPE HTML>
<html>

<head>
  <title>Easy buy 507</title>
  <meta name="description" content="Empesa dedicada a la compra de articulos por internet" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  
</head>
<body>
<? 
$destinatario = "mveces8@gmail.com"; 
$asunto = "Nuevo Cliente, Cotizacion"; 
$youremail = trim(htmlspecialchars($_POST['your_email']));
$yourname = stripslashes(strip_tags($_POST['your_name']));
$yourmessage = stripslashes(strip_tags($_POST['your_message']));
            
$cuerpo = ' 
<html> 
<head> 
   <title>Cotizacion</title> 
</head> 
<body> 
<h1>Cotizacion!</h1> 
<p> 
<b>Un Futuro cliente esta tratando de contactarte para Cotizacion</b>. '.$yourmessage.'
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From:  ".$yourname." <".$youremail.">\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: mveces8@gmail.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: mveces8@gmail.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: mveces8@gmail.com\r\n"; 

//direcciones que recibirán copia oculta 
$headers .= "Bcc:mveces8@gmail.com,mveces8@gmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers)   
?>
 <script>  
 alert("Se ha enviado un correo al administrador del sitio, Gracias por preferirnos!!");
 window.location="../index.html"
 </script>
</body>
</html>
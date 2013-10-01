<?php
include 'config.php';
//$sql = "SELECT id, pregunta, respuesta1, respuesta2, respuesta3, r_correcta FROM practica WHERE libro_id = 8 and tema_id = 15";
$sql = "select id, edad, nombre, descrpcion, foto from asafatas";
//echo $sql;
try {
	$dbh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $dbh->query($sql);  
	$temas = $stmt->fetchAll(PDO::FETCH_OBJ);
	$dbh = null;
	 
	 // $array = array("mensaje" => "Hola desde otro punto de la red"); //Por ejemplo
    if(isset($_GET['callback'])){ // Si es una petición cross-domain
           echo $_GET['callback'].'('.json_encode($temas).')';
        }
        else // Si es una normal, respondemos de forma normal
           echo json_encode($temas);
	
 } catch(PDOException $e) {
 	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}
       
?>
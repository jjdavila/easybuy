<?php
$user = trim(htmlspecialchars($_GET["nick"]));
if(!empty($user)) {
	comprobar($user);
}
function comprobar($b) {
	$con = mysql_connect('localhost','root', '');
   	mysql_select_db('easy507', $con);
   	$sql = mysql_query("SELECT * FROM usuarios WHERE usuario = '".$b."'",$con);
   	$contar = mysql_num_rows($sql);
   	if($contar == 0){
   		echo "<span style='font-weight:bold;color:green;'> El usuario esta disponible</span>";
   	}else{
   		echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
   	}
       mysql_free_result($sql); 
       mysql_close($con);
   }
?>
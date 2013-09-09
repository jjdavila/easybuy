<?php
      session_start();
      if (isset($_SESSION["cuenta_paginas"])){ 
         	$_SESSION["cuenta_paginas"] = 1; 
      }else{ 
         	$_SESSION["cuenta_paginas"]=0; 
      }
      $archivo_contador = "contador/visitas.txt";
      $leer = fopen($archivo_contador,"r");
      $cuenta = trim(fread($leer,filesize($archivo_contador))); 

      if ($cuenta != "") $cuenta = $_SESSION["cuenta_paginas"] + $cuenta;
      else $cuenta = 1;
      @fclose($leer);
      $leer = fopen($archivo_contador,"w");
      @fputs($leer,$cuenta);

      @fclose($leer); 
      echo '<span class="visitantes">Visitante numero: '.$cuenta.'</span>';
?>
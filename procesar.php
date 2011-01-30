<?php
   $resultax = $_POST["datos"];
   include("conex.php");
   $link=Conectarse();
   if ($resultax <= 20 && $resultax >= 12 ) {
   $terminado="si"; 
   } else {
   $terminado="no"; 
   }
   $ip = $_SERVER['REMOTE_ADDR'];
    

$result = mysql_query("select * from usuarios where ip='$ip'",$link);    

   
  
    if (mysql_num_rows($result)>0) { 
header("Location: juego.php?error=yaingresado");
} else {
   
   mysql_query("insert into usuarios (ip,terminado) values ('$ip','$terminado')",$link);
   
   header("Location: juego.php?error=success");
   }
   


?>



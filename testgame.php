<?php
   include("conex.php");
   $link=Conectarse();
   $ip = $_SERVER['REMOTE_ADDR'];
   $result = mysql_query("select * from usuarios where ip='$ip'",$link);    
if (mysql_num_rows($result)>0) { 
header("Location: juego.php?error=yaingresado");
} else {
header("Location: juego.php?error=success");
}
?>



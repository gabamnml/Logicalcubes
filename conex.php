<?php
function Conectarse()
{
   if (!($link=mysql_connect("localhost","DB_USER","DB_PASSWORD")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("DB_NAME",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
?>
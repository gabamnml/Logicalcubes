<?php
function Conectarse()
{
   if (!($link=mysql_connect("10.194.111.8","user_8827137c","3ERaeAnYP_$,y3")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("db_8827137c",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
?>
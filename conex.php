<?php
function Conectarse()
{
   if (!($link=mysql_connect("localhost","e-fac_drm_juego1","juego1")))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysql_select_db("e-factory_cl_drm_juego1",$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}
?>
<html>
<head>
   <title>Resultados de Juego Lógico</title>
</head>
<body>
<style>
table { background:#D3E4E5;
 border:1px solid gray;
 border-collapse:collapse;
 color:#fff;
 font:normal 12px verdana, arial, helvetica, sans-serif;
}
caption { border:1px solid #5C443A;
 color:#5C443A;
 font-weight:bold;
 letter-spacing:20px;
 padding:6px 4px 8px 0px;
 text-align:center;
 text-transform:uppercase;
}
td, th { color:#363636;
 padding:.4em;
}
tr { border:1px dotted gray;
}
thead th, tfoot th { background:#5C443A;
 color:#FFFFFF;
 padding:3px 10px 3px 10px;
 text-align:left;
 text-transform:uppercase;
}
tbody td a { color:#363636;
 text-decoration:none;
}
tbody td a:visited { color:gray;
 text-decoration:line-through;
}
tbody td a:hover { text-decoration:underline;
}
tbody th a { color:#363636;
 font-weight:normal;
 text-decoration:none;
}
tbody th a:hover { color:#363636;
}
tbody td+td+td+td a { background-image:url('bullet_blue.png');
 background-position:left center;
 background-repeat:no-repeat;
 color:#03476F;
 padding-left:15px;
}
tbody td+td+td+td a:visited { background-image:url('bullet_white.png');
 background-position:left center;
 background-repeat:no-repeat;
}
tbody th, tbody td { text-align:left;
 vertical-align:top;
}
tfoot td { background:#5C443A;
 color:#FFFFFF;
 padding-top:3px;
}
.odd { background:#fff;
}
tbody tr:hover { background:#99BCBF;
 border:1px solid #03476F;
 color:#000000;
}
</style>
<H2>Resultados del Juego Lógico</H2>
<?php
   include("conex.php");
   $link=Conectarse();
   $result=mysql_query("select * from usuarios",$link);
?>
   <TABLE BORDER=1 CELLSPACING=1 CELLPADDING=1>
      <TR><TD>&nbsp;IP&nbsp;</TD><TD>&nbsp;Terminado&nbsp;</TD></TR>
<?php      

   while($row = mysql_fetch_array($result)) {
      printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>", $row["ip"],$row["terminado"]);
   }
   mysql_free_result($result);
   mysql_close($link);
?>
</table>
</body>
</html> 
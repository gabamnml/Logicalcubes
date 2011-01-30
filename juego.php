<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta name="author" content="Gabamnml"/>
		<meta name="description" content="Logical Game"/>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link type="text/css" href="css/ui-lightness/jquery.ui.theme.css" rel="stylesheet" />
        <link type="text/css" href="css/ui-lightness/demos.css" rel="stylesheet" />		
		<script type="text/javascript" src="js/jquery-1.4.4.min.js"></script>
		<script type="text/javascript" src="js/redips-drag.js"></script>
<script type="text/javascript">
			window.onload = function () {
				 num = 0,			// number of successfully placed elements
					rd = REDIPS.drag;	// reference to the REDIPS.drag class
				// initialization
				rd.init();
				// set hover color
				rd.hover_color = '#9BB3DA';
				// define green elements for green cells
				rd.mark.exception.green = 'green_cell';
				rd.mark.exception.green0 = 'green_cell';
				rd.mark.exception.green1 = 'green_cell';
				rd.mark.exception.green2 = 'green_cell';
				rd.mark.exception.green3 = 'green_cell';
				rd.mark.exception.green4 = 'green_cell';
				rd.mark.exception.green5 = 'green_cell';
				rd.mark.exception.green6 = 'green_cell';
				rd.mark.exception.green7 = 'green_cell';
				rd.mark.exception.green8 = 'green_cell';
				rd.mark.exception.green9 = 'green_cell';
				rd.mark.exception.green10 = 'green_cell';
				// define orange elements for orange cells
				rd.mark.exception.orange = 'orange_cell';
				rd.mark.exception.orange0 = 'orange_cell';
				rd.mark.exception.orange1 = 'orange_cell';
				rd.mark.exception.orange2 = 'orange_cell';
				rd.mark.exception.orange3 = 'orange_cell';
				rd.mark.exception.orange4 = 'orange_cell';
				rd.mark.exception.orange5 = 'orange_cell';
				rd.mark.exception.orange6 = 'orange_cell';
				rd.mark.exception.orange7 = 'orange_cell';
				rd.mark.exception.orange8 = 'orange_cell';
				rd.mark.exception.orange9 = 'orange_cell';
				rd.mark.exception.orange10 = 'orange_cell';

                rd.enable_drag(false);
				
				// this function (event handler) is called after element is dropped
				REDIPS.drag.myhandler_dropped = function () {
				
					// if the DIV element was placed on allowed cell then 
					if (rd.target_cell.className.indexOf(rd.mark.exception[rd.obj.id]) !== -1){
						// make it a unmovable
				
						// increase counter
						num++;
						// prepare and display message
						if (num < 20)	msg = 'Van: ' + num + ' Correctos';
						else			msg = 'finished';
						
					}
				if (contenidocubo12.innerHTML == '<div></div>' && contenidocubo1.innerHTML != '<div></div>'){contenidocubo12.innerHTML = contenidocubo1.innerHTML ;
				contenidocubo1.innerHTML = '<div></div>';}		
				if (contenidocubo13.innerHTML == '<div></div>' && contenidocubo2.innerHTML != '<div></div>'){contenidocubo13.innerHTML = contenidocubo2.innerHTML ;
				contenidocubo2.innerHTML = '<div></div>';}	
				if (contenidocubo14.innerHTML == '<div></div>' && contenidocubo3.innerHTML != '<div></div>'){contenidocubo14.innerHTML = contenidocubo3.innerHTML ;
				contenidocubo3.innerHTML = '<div></div>';}				
				if (contenidocubo15.innerHTML == '<div></div>' && contenidocubo4.innerHTML != '<div></div>'){contenidocubo15.innerHTML = contenidocubo4.innerHTML ;
				contenidocubo4.innerHTML = '<div></div>';}				
				if (contenidocubo16.innerHTML == '<div></div>' && contenidocubo5.innerHTML != '<div></div>'){contenidocubo16.innerHTML = contenidocubo5.innerHTML ;
				contenidocubo5.innerHTML = '<div></div>';}
				if (contenidocubo17.innerHTML == '<div></div>' && contenidocubo6.innerHTML != '<div></div>'){contenidocubo17.innerHTML = contenidocubo6.innerHTML ;
				contenidocubo6.innerHTML = '<div></div>';}								
				if (contenidocubo18.innerHTML == '<div></div>' && contenidocubo7.innerHTML != '<div></div>'){contenidocubo18.innerHTML = contenidocubo7.innerHTML ;
				contenidocubo7.innerHTML = '<div></div>';}
				if (contenidocubo19.innerHTML == '<div></div>' && contenidocubo8.innerHTML != '<div></div>'){contenidocubo19.innerHTML = contenidocubo8.innerHTML ;
				contenidocubo8.innerHTML = '<div></div>';}								
				if (contenidocubo20.innerHTML == '<div></div>' && contenidocubo9.innerHTML != '<div></div>'){contenidocubo20.innerHTML = contenidocubo9.innerHTML ;
				contenidocubo9.innerHTML = '<div></div>';}
				if (contenidocubo21.innerHTML == '<div></div>' && contenidocubo10.innerHTML != '<div></div>'){contenidocubo21.innerHTML = contenidocubo10.innerHTML ;
				contenidocubo10.innerHTML = '<div></div>';}
				if (contenidocubo22.innerHTML == '<div></div>' && contenidocubo11.innerHTML != '<div></div>'){contenidocubo22.innerHTML = contenidocubo11.innerHTML ;
				contenidocubo11.innerHTML = '<div></div>';}								
				}
            $(function(){
			$('#droptab1').each(function(){
				contenidocubo1 = document.getElementById('droptab1');				
				
				$(this).mouseover(function(){
               if (contenidocubo2.innerHTML == '<div></div>' || contenidocubo12.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); } 				
		
					

				});
				
			});
            $('#droptab2').each(function(){
				contenidocubo2 = document.getElementById('droptab2');
				$(this).mouseover(function(){
			    if (contenidocubo3.innerHTML == '<div></div>' || contenidocubo1.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab3').each(function(){
				contenidocubo3 = document.getElementById('droptab3');
				$(this).mouseover(function(){
				if (contenidocubo4.innerHTML == '<div></div>' || contenidocubo2.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
			
			});
			});
            $('#droptab4').each(function(){
				contenidocubo4 = document.getElementById('droptab4');
				$(this).mouseover(function(){
				if (contenidocubo5.innerHTML == '<div></div>' || contenidocubo3.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab5').each(function(){
				contenidocubo5 = document.getElementById('droptab5');
				$(this).mouseover(function(){
				if (contenidocubo6.innerHTML == '<div></div>' || contenidocubo4.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab6').each(function(){
				contenidocubo6 = document.getElementById('droptab6');
				$(this).mouseover(function(){
				if (contenidocubo7.innerHTML == '<div></div>' || contenidocubo5.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab7').each(function(){
				contenidocubo7 = document.getElementById('droptab7');
				$(this).mouseover(function(){
				if (contenidocubo8.innerHTML == '<div></div>' || contenidocubo6.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab8').each(function(){
				contenidocubo8 = document.getElementById('droptab8');
				$(this).mouseover(function(){
				if (contenidocubo9.innerHTML == '<div></div>' || contenidocubo7.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab9').each(function(){
				contenidocubo9 = document.getElementById('droptab9');
				$(this).mouseover(function(){
				if (contenidocubo10.innerHTML == '<div></div>' || contenidocubo8.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab10').each(function(){
				contenidocubo10 = document.getElementById('droptab10');
				$(this).mouseover(function(){
				if (contenidocubo11.innerHTML == '<div></div>' || contenidocubo9.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab11').each(function(){
				contenidocubo11 = document.getElementById('droptab11');
				$(this).mouseover(function(){
				if (contenidocubo22.innerHTML == '<div></div>' || contenidocubo10.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab12').each(function(){
				contenidocubo12 = document.getElementById('droptab12');
				$(this).mouseover(function(){
				if (contenidocubo13.innerHTML == '<div></div>' || contenidocubo1.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab13').each(function(){
				contenidocubo13 = document.getElementById('droptab13');
				$(this).mouseover(function(){
				if (contenidocubo14.innerHTML == '<div></div>' || contenidocubo12.innerHTML == '<div></div>' || contenidocubo2.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab14').each(function(){
				contenidocubo14 = document.getElementById('droptab14');
				$(this).mouseover(function(){
				if (contenidocubo15.innerHTML == '<div></div>' || contenidocubo13.innerHTML == '<div></div>' || contenidocubo3.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab15').each(function(){
				contenidocubo15 = document.getElementById('droptab15');
				$(this).mouseover(function(){
				if (contenidocubo16.innerHTML == '<div></div>' || contenidocubo14.innerHTML == '<div></div>' || contenidocubo4.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab16').each(function(){
				contenidocubo16 = document.getElementById('droptab16');
				$(this).mouseover(function(){
				if (contenidocubo17.innerHTML == '<div></div>' || contenidocubo15.innerHTML == '<div></div>' || contenidocubo5.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab17').each(function(){
				contenidocubo17 = document.getElementById('droptab17');
				$(this).mouseover(function(){
				if (contenidocubo18.innerHTML == '<div></div>' || contenidocubo16.innerHTML == '<div></div>' || contenidocubo6.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab18').each(function(){
				contenidocubo18 = document.getElementById('droptab18');
				$(this).mouseover(function(){
				if (contenidocubo19.innerHTML == '<div></div>' || contenidocubo17.innerHTML == '<div></div>' || contenidocubo7.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab19').each(function(){
				contenidocubo19 = document.getElementById('droptab19');
				$(this).mouseover(function(){
				if (contenidocubo20.innerHTML == '<div></div>' || contenidocubo18.innerHTML == '<div></div>' || contenidocubo8.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
            $('#droptab20').each(function(){
				contenidocubo20 = document.getElementById('droptab20');
				$(this).mouseover(function(){
				if (contenidocubo21.innerHTML == '<div></div>' || contenidocubo19.innerHTML == '<div></div>' || contenidocubo9.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});
			$('#droptab21').each(function(){
				contenidocubo21 = document.getElementById('droptab21');
				$(this).mouseover(function(){
				if (contenidocubo22.innerHTML == '<div></div>' || contenidocubo20.innerHTML == '<div></div>' || contenidocubo10.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				
				});
			});			
			$('#droptab22').each(function(){
				contenidocubo22 = document.getElementById('droptab22');
				$(this).mouseover(function(){
				if (contenidocubo11.innerHTML == '<div></div>' || contenidocubo21.innerHTML == '<div></div>') { rd.enable_drag(true);}
                else { rd.enable_drag(false); }
				});
			});
		});				
			}
		</script>
		<title>Aplicación Juego Lógico, Logical Play Application</title>
	</head>
	<body>
<noscript>
<div class="ui-state-error">
<strong>Su navegador no tiene habilitado Javascript o no esta instalado por lo que para jugar debera poseerlo. Gracias</strong>
</div>
</noscript>
<?php if (@$_GET['error'] == "yaingresado") : ?>
<style>
#drag, #modificarlo {visibility:hidden;}
</style>
<div class="ui-state-error">
<strong>Usted ya a realizado el juego, su puntuación no sera grabada Gracias!</strong>
</div>
<?php endif; ?>
<?php if (@$_GET['error'] == "success") : ?>
<style>
#drag, #modificarlo {visibility:hidden;}
</style>
<div class="ui-state-highlight">
<strong>Muchas gracias por jugar. Que tenga buen dia!</strong>
</div>
<?php endif; ?>
		<center>
			<h1>Aplicación Juego Lógico<br />
Logical Play Application</h1>


			<!-- tables inside this DIV could contain drag-able content  -->
			<div id="drag">
				<table id="table1">
						<tr>
							<td id="droptab1" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab2" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab3" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab4" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab5" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab6" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab7" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab8" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab9" class="orange_cell single"><div id="green" class="drag green"><img src="blue.gif"/></div><div></div></td>
							<td id="droptab10" class="orange_cell single"><div id="green" class="drag green"><img src="blue1.gif"/></div><div></div></td>
                            <td id="droptab11" class="orange_cell single"><div></div></td>							
						</tr>
						<tr>
							<td id="droptab12" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
							<td id="droptab13" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
							<td id="droptab14" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
     						<td id="droptab15" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
							<td id="droptab16" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
							<td id="droptab17" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
                            <td id="droptab18" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
                            <td id="droptab19" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
                            <td id="droptab20" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
                            <td id="droptab21" class="green_cell single"><div id="orange" class="drag orange"><img src="red.gif"/></div><div></div></td>
                            <td id="droptab22" class="green_cell single"><div></div></td>							
						</tr>
				</table>
			</div>
			<div id="pisito">&nbsp;</div>
			<div id="description">
<p>Encuentra la manera de cambiar los bloques que están en la fila inferior a la fila superior en el menor número de pasos posibles (como se muestra en la figura 01). Para lo cual deberás realizar movimientos secuenciales empezando por el bloque marcado con el número “1”.
<br /><br />
Find the way to change the blocks from the lower row to the upper row in the fewest number of possible steps (as one is in figure 01). Sequential movements should be done starting from the block marked as “1”.</p>
</div>
<div>Fig.01<br />
<img src="muestra.jpg" /></div>
		</center>
<script language="JavaScript" type="text/javascript">

var pagina="http://efactory.cl/clientes/gameofblock/testgame.php"
function redireccionar() 
{
location.href=pagina
} 
</script>
<script>
$(document).ready(function(){
$('#modificarlo').click(function(){  
            
            kiko = num;
            alert(kiko);
            jQuery.ajax({
                                    type: "POST",
                                       url: "procesar.php",
                                    data: "datos="+kiko,
                                    success: function(datos){
                                        if(datos=="nomola"){alert("Ha habido un error al enviar, lo sentimos. Pruebe mas tarde.");}
                                        else{ alert("Juego Terminado, Bien hecho \n\nGame Finish, Well Done.");
                                        
                                        }
                                        
                                    }
                                        });  
                
    })  
})
</script>
<div id="modificarlo" style="float:right; margin-right:100px;" onclick="javascript:redireccionar()"><img src="botoncito.jpg"/></div>
	</body>
</html>
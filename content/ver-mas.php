<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contacto Gobiernos</title>
	<?php include'inc/head.php'; ?>
	<script type="text/javascript">
		function editar(id)
		{
			var xmlhttp;
			xmlhttp= new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status==200){
					document.getElementById("edicion").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("GET","edit-gobiernos.php?id="+id, true);
			xmlhttp.send();
		}
	</script>
<?php

include'inc/header-interno.php';
include 'conex.php';
//include 'funciones.php';
?>
<body>
	<h5 class="center-align">Tarjeta de Contacto</h5>
  <div class="row" id="edicion">
		<div class="col l6 offset-l3" id="tarjeta-contacto">
    <?php
    if(isset($_GET['folio']) and $_GET['folio']<>""){
      $folio=$_GET['folio'];
      $sql="SELECT * FROM todo WHERE folio ='$folio'";
      $resultado=mysql_query($sql);

      while($fila=mysql_fetch_array($resultado)){

				echo "
				<div class='row tarjeta'>
				<div class='col l2'><span>Folio:</span></div>
        <div class='col l10'>".($fila['folio'])."</div>
				<div class='col l2'><span>Gobierno de:</span></div>
        <div class='col l10'>".($fila['gobierno'])."</div>
				</div><div class='row'>
				<div class='tarjeta col l2'><span>Estado: </span></div>
				<div class='col l10'>".($fila['estado'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Sitio web: </span></div>
				<div class='col l10'>".($fila['web'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Encargado: </span></div>
				<div class='col l10'>".($fila['nombreEncargado'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Cargo: </span></div>
				<div class='col l10'>".($fila['cargo'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Vigencia: </span></div>
				<div class='col l10'>".($fila['vigencia'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Teléfono: </span></div>
				<div class='col l10'>".($fila['telefono'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Ext: </span></div>
				<div class='col l10'>".($fila['extencion'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>E-mail: </span></div>
				<div class='col l10'>".($fila['email'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Dirección: </span></div>
				<div class='col l10'>".($fila['direccion'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Colonia: </span></div>
				<div class='col l10'>".($fila['colonia'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>Núm. Exterior: </span></div>
				<div class='col l10'>".($fila['numExterior'])."</div>
				</div><div class='row'>
        <div class='tarjeta col l2'><span>C.P.: </span></div>
				<div class='col l10'>".($fila['cp'])."</div>
				</div><div class='row'>
        <div class=' col l2'><span>Facebook: </span></div>
				<div class='col l10'>".($fila['Fb'])."</div>
				</div><div class='row'>
        <div class=' col l2'><span>Twitter: </span></div>
				<div class='col l10'>".($fila['Tw'])."</div>
				</div><div class='row'>
        <div class=' col l2'><span>Comentarios: </span></div>
				<div class='col l10'>".($fila['comentarios'])."</div>
				</div>
        </div>";
      }
    }
      else {
        echo "Error en la consulta";
    }
     ?>
  </div>
</div>
<div id="" class="center-align">
	<button type="button" onclick="editar(<?php echo $folio ?>)" class="btn waves-effect waves-light ">Editar</button>
</div>
</body>
</html>

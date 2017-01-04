<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Contacto</title>
<?php
include'inc/head.php';
include'inc/header_comoon.php';
include 'conex.php';
//include 'funciones.php';
?>
<body>
  <div class="row">
    <?php
    if(isset($_GET['folio']) and $_GET['folio']<>""){
      $folio=$_GET['folio'];
      $sql="SELECT * FROM todo WHERE folio ='$folio'";
      $resultado=mysql_query($sql);
      echo "<table class='striped responsive-table ancho'>
          <thead>
            <th>GOBIERNO</th>
            <th>ESTADO</th>
            <th>WEB</th>
            <th>ENCARGADO</th>
            <th>CARGO</th>
            <th>VIGENCIA</th>
            <th>TEL</th>
            <th>EXT</th>
            <th>E-MAIL</th>
            <th>COLONIA</th>
            <th>DIRECCIÓN</th>
            <th>NÚM. EX.</th>
            <th>CP</th>
          </thead>
            ";
      while($fila=mysql_fetch_array($resultado)){
        echo "<tr>
        <td>".utf8_encode($fila['gobierno'])."</td>
        <td>".utf8_encode($fila['estado'])."</td>
        <td>".utf8_encode($fila['web'])."</td>
        <td>".utf8_encode($fila['nombreEncargado'])."</td>
        <td>".utf8_encode($fila['cargo'])."</td>
        <td>".utf8_encode($fila['vigencia'])."</td>
        <td>".utf8_encode($fila['telefono'])."</td>
        <td>".utf8_encode($fila['extencion'])."</td>
        <td>".utf8_encode($fila['email'])."</td>
        <td>".utf8_encode($fila['colonia'])."</td>
        <td>".utf8_encode($fila['direccion'])."</td>
        <td>".utf8_encode($fila['numExterior'])."</td>
        <td>".utf8_encode($fila['cp'])."</td>
        </tr>";
      }
    }
      else {
        echo "Error en la consulta";
    }
     ?>
  </div>
</body>
</html>

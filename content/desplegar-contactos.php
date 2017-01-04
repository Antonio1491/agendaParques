<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Agenda Gobierno</title>
<?php
include'inc/head.php';
include'inc/header_comoon.php';
include 'conex.php';
?>
<body>
  
  <div class="row">

    <section>
      <div class="col s12 m12 l11">	<!-- contenido de registros-->
<?php
$sql= "SELECT * FROM contactos ";
$resultado=mysql_query($sql);

echo "<table class='striped responsive-table'>
    <thead>
      <th>CONTACTO</th>
      <th>NOMBRE</th>
      <th>EMPRESA</th>
      <th>CARGO</th>
      <th>WEB</th>
      <th>EMAIL</th>
      <th>TELÉFONO</th>
      <th>EXT.</th>
      <th>MÓVIL</th>
      <th>PAÍS</th>
      <th>LOCALIDAD</th>
      <th>DIRECCIÓN</th>
      <th>C.P.</th>
      <th>COMENTARIOS</th>
    </thead>
      ";
while($row=mysql_fetch_row($resultado)){
  echo "<tr>
  <td>".$row[1]."</td>
  <td>".$row[2]."</td>
  <td>".$row[3]."</td>
  <td>".$row[4]."</td>
  <td>".$row[5]."</td>
  <td>".$row[6]."</td>
  <td>".$row[7]."</td>
  <td>".$row[8]."</td>
  <td>".$row[9]."</td>
  <td>".$row[13]."</td>
  <td>".$row[11]."</td>
  <td>".$row[10]."</td>
  <td>".$row[12]."</td>
  <td>".$row[14]."</td>
  </tr>";

}
echo "</table>";
include'inc/footer.php';
?>

</body>
</html>

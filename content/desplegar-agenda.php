
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Agenda Gobierno</title>
<?php
include'inc/head.php';
include'inc/header_comoon.php';
include 'conex.php';
?>
<body>
	<div class="row">
		<div class="col s4  offset-s5">
			<a href="inc/exportar-gobiernos.php">
				<button class="btn btn-primary" >
					<span class="flow-text">Exportar </span>
					<i class="tiny material-icons">description</i>
				</button>
			</a>
			</span>
		</div>
	</div>
  <div class="row">
    <section>
    <div class="col s12 m8 l12">	<!-- contenido de registros-->
<?php
$sql= "SELECT * FROM todo ";
$resultado=mysql_query($sql);

echo "<table class='striped responsive-table ancho'>
    <thead>
      <th>GOBIERNO</th>
      <th>ESTADO</th>
      <th>ENCARGADO</th>
      <th>VIGENCIA</th>
      <th>E-MAIL</th>
    </thead>
      ";
while($row=mysql_fetch_array($resultado)){
  echo "<tr>
  <td>".utf8_encode($row['gobierno'])."</td>
  <td>".utf8_encode($row['estado'])."</td>
  <td>".utf8_encode($row['nombreEncargado'])."</td>
  <td>".utf8_encode($row['vigencia'])."</td>
  <td>".utf8_encode($row['email'])."</td>
	<td><a href='ver-mas.php?folio=".$row['folio']."' id='vermas'>Ver más</a></td>
	<td><a href='inc/eliminar.php?folio=".$row['folio']."' id='eliminar'>Eliminar<a/></td></tr>";

}
echo "</table>";
include'inc/footer.php';
?>

</body>
</html>

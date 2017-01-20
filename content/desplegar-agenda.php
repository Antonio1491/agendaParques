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
<script type="text/javascript">
	function busqueda(str)
	{
		var xmlhttp;
			if (str.length==0) {
				document.getElementById("resultado").innerHTML="";
				return;
			}
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}
			else{
				xmlhttp= new ActiveXObject("Microsoft.XHMLHTTP");
			}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				document.getElementById("resultado").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","buscar-gobiernos.php?b="+str, true)
		xmlhttp.send();
	}
</script>
<body>
	<div class="center-align">
    <h3>Agenda Gobierno</h3>
			<a href="inc/exportar-gobiernos.php">
				<button class="btn btn-primary" >
					<span class="flow-text">Exportar </span>
					<i class="tiny material-icons">description</i>
				</button>
			</a>
			</span>
		</div>
	</div>
	<div class="row offset-s1">
		<label for="search"><i class="material-icons">search</i></label>
		<input type="search" class="col l3" onkeyup="busqueda(this.value)"></input>
	</div>
<div id="resultado">
  <div class="row ">
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
  <td>".$row['gobierno']."</td>
  <td>".$row['estado']."</td>
  <td>".$row['nombreEncargado']."</td>
  <td>".$row['vigencia']."</td>
  <td>".$row['email']."</td>
	<td><a href='ver-mas.php?folio=".$row['folio']."' id='vermas'>Ver más</a></td>
	<td><a href='inc/eliminar.php?folio=".$row['folio']."' id='eliminar'>Eliminar<a/></td></tr>";

}
echo "</table>";
include'inc/footer.php';
?>
			</div>
		</div>
	</div>
</body>
</html>

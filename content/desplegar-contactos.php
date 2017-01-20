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
		xmlhttp.open("GET","buscar.php?b="+str, true)
		xmlhttp.send();
	}
</script>
<body>
  <div class="center-align">
    <h3>Agenda Contactos</h3>
		<a href="inc/exportar-contactos.php" class="btn btn-primary" >
    	<span class="flow-text">Exportar </span><i class="tiny material-icons">description</i>
		</a>
	</div>
  <div class="row offset-s1">
    <label for="search"><i class="material-icons">search</i></label>
    <input type="search" class="col l3" onkeyup="busqueda(this.value)"></input>
  </div>
<div id="resultado">
  <div class="row">

    <section>
      <div class="col s12 m12 l12">	<!-- contenido de registros-->
<?php
$sql= "SELECT * FROM contactos ";
$resultado=mysql_query($sql);

echo "<table class='striped responsive-table'>
    <thead>
      <th>CONTACTO CON</th>
      <th>NOMBRE</th>
      <th>EMPRESA</th>
      <th>CARGO</th>
      <th>WEB</th>
      <th>EMAIL</th>
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
	<td><a href='ver-mas-contacto.php?folio=".$row[0]."' id='vermas'>Ver más</a></td>
	<td><a href='inc/eliminar-contacto.php?folio=".$row[0]."' id='eliminar'>Eliminar<a/></td>
  </tr>";

}
echo "</table>";
include'inc/footer.php';
?>
</div>
</body>
</html>

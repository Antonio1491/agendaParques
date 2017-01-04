<?php
include '../conex.php';

//fecha de la exportación
$fecha=date("d-m-y");
$sql="SELECT * FROM todo";
$consulta=mysql_query($sql);

//inicio de la instancia para la exportación en excel
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=Listado_$fecha.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<table border=1> ";
echo "<tr> ";
echo     "<th>folio N</th> ";
echo 	"<th>Gobierno</th> ";
echo 	"<th>Estado</th> ";
echo 	"<th>Web</th> ";
echo 	"<th>nombreEncargado</th> ";
echo 	"<th>Cargo</th> ";
echo 	"<th>Vigencia</th> ";
echo 	"<th>Teléfono</th> ";
echo 	"<th>Extención</th> ";
echo 	"<th>E-mail</th> ";
echo 	"<th>Colonia</th> ";
echo 	"<th>Dirección</th> ";
echo 	"<th># Exterior</th> ";
echo 	"<th>CP</th> ";
echo "</tr> ";

while($row = mysql_fetch_array($consulta)){

	$folio = $row['folio'];
	$gobierno = $row['gobierno'];
	$estado = $row['estado'];
  $web = $row['estado'];
  $encargado = $row['nombreEncargado'];
  $cargo = $row['cargo'];
  $vigencia = $row['vigencia'];
  $telefono = $row['telefono'];
  $extencion = $row['extencion'];
  $email = $row['email'];
  $colonia = $row['direccion'];
  $numExterior = $row['numExterior'];
  $cp = $row['cp'];

	echo "<tr> ";
	echo 	"<td>".$folio."</td> ";
	echo 	"<td>".$gobierno."</td> ";
	echo 	"<td>".$estado."</td> ";
  echo 	"<td>".$web."</td> ";
  echo 	"<td>".$encargado."</td> ";
  echo 	"<td>".$cargo."</td> ";
  echo 	"<td>".$vigencia."</td> ";
  echo 	"<td>".$telefono."</td> ";
  echo 	"<td>".$extencion."</td> ";
  echo 	"<td>".$email."</td> ";
  echo 	"<td>".$colonia."</td> ";
  echo 	"<td>".$numExterior."</td> ";
  echo 	"<td>".$cp."</td> ";
	echo "</tr> ";

}
echo "</table> ";
?>

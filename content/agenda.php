<?php session_start();
include "inc/head.php";
include "inc/clases.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agenda</title>
<body>
<?php include "inc/encabezado.php"; ?>
	<div class="text-center">
    <h3>Contactos</h3>
	</div>
<!-- contenido de registros-->
<?php
// $conectar=mysqli_connect("localhost","anprorg_admin","Admin_*2016","anprorg_registros");
// $conectar=mysqli_connect("localhost","root","", "anprorgm_registros");
// mysqli_set_charset($conectar,"utf8");
// if(!$conectar){
//   die ("Error en la conexión a la Base de Datos");
// }
// else{
// 			$sql= "SELECT b.nombre, a.contact_id, a.email, a.nombre, a.tel, a.cel, a.empresa, a.web, a.estado
// 						FROM datos AS a
// 						LEFT JOIN categoria AS b ON b.categoria_id = a.categoria_id
//             ORDER BY a.nombre ASC ";
// 			$resultado=mysqli_query($conectar,$sql);

$agenda = new Agenda();

$desplegarAgenda = $agenda->desplegar();

echo "
<section class='tabla'>
	<div class='contenedor'>
		<table class='tabla-agenda'>
    	<thead>
	      <th>NOMBRE</th>
        <th>EMPRESA / DEPENDENCIA</th>
        <th>ESTADO</th>
	      <th>E-MAIL</th>
	      <th>TELÉFONO</th>
        <th></th>
        <th></th>
    	</thead>
      <tbody>
      ";

foreach ($desplegarAgenda as $dato) {

  echo "<tr><td>".$dato['nombre']."</td>";
  echo "<td>".$dato['empresa']."</td>";
  echo "<td>".$dato['estado']."</td>";
  echo "<td>".$dato['email']."</td>";
  echo "<td>".$dato['tel']."</td>";
  echo "<td><a href='detalle.php?folio=".$dato['contact_id']."' id='mas' title='Ver más'><i class='fi-list'></i></a></td>";
  echo"<td><a href='inc/eliminar.php?folio=".$dato['contact_id']."' id='eliminar' class='eliminar' title='Eliminar'><i class='fi-x'></i><a/></td></tr>";
}

// while($row=mysqli_fetch_array($resultado)){
//   echo "<tr>
//   <td width='20px'>".$row[0]."</td>
//   <td>".$row[3]."</td>
//   <td><a href='mailto:".$row[2]."'>".$row[2]."</td>
//   <td>".$row[4]."</td>
//
// 	<td>".$row[6]."</td>
// 	<td>".$row[8]."</td>
// 	<td><a href='detalle.php?folio=".$row['1']."' id='mas'> Ver más</a></td>
// 	<td><a href='inc/eliminar.php?folio=".$row['1']."' id='eliminar' class='eliminar'>Eliminar<a/></td></tr>";
//
// }
echo "
      </tbody>
    </table>
  </div>
</section>";

?>


</div>
</body>
</html>

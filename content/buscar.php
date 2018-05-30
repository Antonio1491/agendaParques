<?php
$buscar=$_GET['b']; //Asignamos a una variable local
//conexion online
//$conectar=mysqli_connect("localhost", "anprorgm_admin", "Admin_*2016", "anprorgm_registros" ) ;
//conexión local
$conectar=mysqli_connect("localhost","root","", "anprorgm_registros");;
mysqli_set_charset($conectar,"utf8");//solución al acento y las ñ
  $sql="SELECT b.nombre,  a.contact_id, a.email, a.nombre, a.tel, a.cel, a.empresa, a.web, a.estado FROM datos AS a
  LEFT JOIN categoria AS b ON b.categoria_id = a.categoria_id
  WHERE a.nombre LIKE '%$buscar%' OR a.email LIKE '%$buscar%'
  OR a.tel LIKE '%$buscar%' OR a.empresa LIKE '%$buscar%' OR a.cargo LIKE '%$buscar%'
  OR a.web LIKE '%$buscar%' OR a.vigencia LIKE '%$buscar%' OR a.pais LIKE '%$buscar%' OR a.estado LIKE '%$buscar%'
  OR a.municipio LIKE '%$buscar%' OR a.comentario LIKE '%$buscar%'
  ORDER BY a.nombre ASC";
echo"<div class='text-center'>
  <h3>Resultado</h3>
</div>";
  if(!$resultado = $conectar->query($sql)){
  die('Ocurrio un error ejecutando el query [' . $conectar->error . ']');
  }
  else{
  if(mysqli_num_rows($resultado)>0){
    echo "
    <table class='tabla-agenda'>
    <thead>
      <th>CATEGORÍA</th>
      <th>NOMBRE</th>
      <th>E-MAIL</th>
      <th>TELÉFONO</th>
      <th>EMPRESA / DEPENDENCIA</th>
      <th>ESTADO</th>
    </thead>
          ";
    while($row=$resultado->fetch_array())
      {
        echo "<tr>
        <td>".$row[0]."</td>
        <td>".$row[3]."</td>
        <td><a href='mailto:".$row[2]."'>".$row[2]."</td>
        <td>".$row[4]."</td>
      	<td>".$row[6]."</td>
        <td>".$row[8]."</td>
      	<td><a href='detalle.php?folio=".$row['1']."' id='vermas' title='Ver más'><i class='fi-list'></a></td>
      	<td><a href='inc/eliminar.php?folio=".$row['1']."' id='eliminar'title='Eliminar'><i class='fi-x'></i><a/></td></tr>";
      }
      echo "</table>";
  }
}
 ?>

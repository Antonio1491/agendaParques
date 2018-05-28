<?php
$buscar=$_GET['b']; //Asignamos a una variable local
//conexion online
$conectar=mysqli_connect("localhost", "anprorg_admin", "Admin_*2016", "anprorg_registros" ) ;
//conexión local
//$conectar= mysqli_connect("localhost","root", "", "anpr");
mysqli_set_charset($conectar,"utf8");//solución al acento y las ñ
  $sql="SELECT b.nombre, a.contact_id, a.email, a.nombre, a.direccion, a.tel, a.cel, a.empresa, a.web, a.estado
  FROM datos AS a
  LEFT JOIN categoria AS b ON b.categoria_id = a.categoria_id
  WHERE a.nombre LIKE '%$buscar%' OR a.empresa LIKE '%$buscar%' OR a.estado LIKE '%$buscar%'
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
      <!--<th>CATEGORÍA</th>-->
      <th>NOMBRE</th>
      <!--<th>E-MAIL</th>-->
     <!-- <th>TELÉFONO</th>-->
      <th>EMPRESA / DEPENDENCIA</th>
      <!--<th>DIRECCIÓN</th>-->
      <th>ESTADO</th>
    </thead>
          ";
    while($row=$resultado->fetch_array())
      {
        echo "<tr>
        <!--<td width='20px'>".$row[0]."</td>-->
        <td class='mayus'>".$row[3]."</td>
        <!--<td><a href='mailto:".$row[2]."'>".$row[2]."</td>-->
        <!--<td>".$row[4]."</td>-->

      	<td class='mayus'>".$row[7]."</td>
        <!--<td class='mayus'>".$row[4]."</td>-->

      	<td class='mayus'>".$row[9]."</td>
      	<!--<td><a href='detalle.php?folio=".$row['1']."' id='mas' disabled> Ver más</a></td>
      	<td><a href='inc/eliminar.php?folio=".$row['1']."' id='eliminar' class='eliminar'>Eliminar<a/></td></tr>-->";
      }
      echo "</table>";
  }
}
 ?>

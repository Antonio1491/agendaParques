<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Directorio</title>
  <link type="text/css" rel="stylesheet" href="../content/css/foundation-flex.css">
  <link type="text/css" rel="stylesheet" href="../content/icons/foundation-icons.css">
  <link type="text/css" rel="stylesheet" href="../content/css/app.css">
  <link type="txt/css" rel="stylesheet" href="../content/css/css.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Pacifico" rel="stylesheet">
</head>
<body>
<header>
  <div class="row expanded">
    <div class="column">
      <h2 class="pacifico">Directorio</h2>
    </div>
    <div class="column">
      <!--<ul class="menu">
        <li><a href="index.php"><i class="fi-torsos-all"></i>Registrar</a></li>
        <li><a href="agenda.php"><i class="fi-list"></i>Visualizar</a></li>
        <li><a href="inc/closet.php"><i class="fi-x-circle"></i>Salir</a></li>
      </ul>-->
    </div>
    <div class="column">
      <form class="" action="" method="post">
        Buscar:
        <input type="search" value="" onkeyup="busqueda(this.value)"></input>
      </form>
    </div>
  </div>
</header>
  <div class="" id="contenido">
	<div class="text-center">
    <h3>Contactos</h3>
	</div>
<!-- contenido de registros-->
<?php
$conectar=mysqli_connect("localhost","anprorg_admin","Admin_*2016","anprorg_registros");
//$conectar=mysqli_connect("localhost","root","", "anpr");
mysqli_set_charset($conectar,"utf8");
if(!$conectar){
  die ("Error en la conexión a la Base de Datos");
}
else{
			$sql= "SELECT b.nombre, a.contact_id, a.email, a.nombre, a.direccion, a.tel, a.cel, a.empresa, a.web, a.estado
						FROM datos AS a
						LEFT JOIN categoria AS b ON b.categoria_id = a.categoria_id
            ORDER BY a.nombre ASC ";
            $num=1;
			$resultado=mysqli_query($conectar,$sql);

echo "
<section class='tabla'>
	<div class='contenedor'>
		<table class='tabla-agenda'>
    	<thead>
	      <!--<th>CATEGORÍA</th>-->
        <th>#</th>
	      <th>NOMBRE</th>
	      <!--<th>E-MAIL</th>-->
	     <!-- <th>TELÉFONO</th>-->
				<th>EMPRESA / DEPENDENCIA</th>
        <!--<th>DIRECCIÓN</th>-->
				<th>ESTADO</th>
    	</thead>
      ";
while($row=mysqli_fetch_array($resultado)){
  echo "<tr>
  <td>$num</td>
  <!--<td width='20px'>".$row[0]."</td>-->
  <td class='mayus'>".$row[3]."</td>
  <!--<td><a href='mailto:".$row[2]."'>".$row[2]."</td>-->
  <!--<td>".$row[4]."</td>-->

	<td class='mayus'>".$row[7]."</td>
  <!--<td class='mayus'>".$row[4]."</td>-->

	<td class='mayus'>".$row[9]."</td>
	<!--<td><a href='detalle.php?folio=".$row['1']."' id='mas' disabled> Ver más</a></td>
	<td><a href='inc/eliminar.php?folio=".$row['1']."' id='eliminar' class='eliminar'>Eliminar<a/></td></tr>-->";
  $num++;
}
echo "
</table>
</div>
</section>";
}
?>
</div>

  <script type="text/javascript" src="../content/js/app.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="../content/js/vendor/jquery.js"></script>
  <script type="text/javascript" src="../content/js/vendor/what-input.js"></script>
  <script type="text/javascript" src="../content/js/vendor/foundation.js"></script>
  <script type="text/javascript">
  function busqueda(str)
  {
    var xmlhttp;
      if (str.length==0) {
        document.getElementById("contenido").innerHTML="";
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
        document.getElementById("contenido").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","buscar-dir.php?b="+str, true)
    xmlhttp.send();
  }
  </script>
  <script type="text/javascript">
  <!--
function click() {
if (event.button== 2 ) {
alert( ' Lo siento, no se puede usar ese botón!' );
}
}
document.onmousedown=click
// -->
  </script>
</body>
</html>

<?php
include 'conex.php';
/*include 'funciones.php';
/*$link=mysql_connect('localhost','root','');
mysql_select_db('anpr',$link);*/
$tipo=$_POST["tipo"];
$nombre=$_POST["nombre"];
$empresa=$_POST["empresa"];
$cargo=$_POST["cargo"];
$web=$_POST["web"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$extencion=$_POST["extencion"];
$cel=$_POST["cel"];
$pais=$_POST["pais"];
$localidad=$_POST["localidad"];
$direccion=$_POST["direccion"];
$cpostal=$_POST["cpostal"];
$comentarios=$_POST["comentarios"];
$date=date("Y-m-d");

$consulta="INSERT INTO contactos (tipo, nombre, empresa, cargo, web, email, tel, extencion, cel, direccion, ciudad, cpostal, pais, comentarios, fechaCaptura) VALUES
('$tipo', '$nombre', '$empresa', '$cargo', '$web', '$email', '$tel', '$extencion', '$cel', '$direccion', '$localidad', '$cpostal', '$pais', '$comentarios', '$date')";

mysql_query($consulta);

echo"<script language='JavaScript'>
                alert('Hemos registrado el contacto correctamente');
                </script>";
echo "<script>window.location=\"suscriptores.php\"</script>";
echo "hemos registrado el contacto";

?>

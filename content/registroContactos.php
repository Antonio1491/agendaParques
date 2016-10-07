<?php
include 'conex.php';
/*include 'funciones.php';
/*$link=mysql_connect('localhost','root','');
mysql_select_db('anpr',$link);*/

$nombre=$_POST["nombre"];
$empresa=$_POST["empresa"];
$cargo=$_POST["cargo"];
$web=$_POST["web"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$extencion=$_POST["extencion"];
$cel=$_POST["cel"];
$direccion=$_POST["direccion"];
$ciudad=$_POST["ciudad"];
$estado=$_POST["estado"];
$cpostal=$_POST["cpostal"];
$pais=$_POST["pais"];

$consulta="INSERT INTO contactos (nombre, empresa, cargo, web, email, tel, extencion, cel, direccion, ciudad, estado, cpostal, pais) VALUES
('$nombre', '$empresa', '$cargo', '$web', '$email', '$tel', '$extencion', '$cel', '$direccion', '$ciudad', '$estado', '$cpostal', '$pais')";

mysql_query($consulta);

echo"<script language='JavaScript'>
                alert('Hemos registrado el contacto correctamente');
                </script>";
echo "<script>window.location=\"suscriptores.php\"</script>";
echo "hemos registrado el contacto";

?>

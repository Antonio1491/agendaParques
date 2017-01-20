<?php
include 'inc/head.php';
include 'inc/header_comoon.php';
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
$fb=$_POST["fb"];
$tw=$_POST["tw"];
$comentarios=$_POST["comentarios"];
$date=date("Y-m-d");
$usuario=$_SESSION['user'];



$consulta="INSERT INTO contactos (tipo, nombre, empresa, cargo, web, email, tel, extencion, cel, direccion, ciudad, cpostal, pais, FB, TW, comentarios, fechaCaptura, usuario) VALUES
('$tipo', '$nombre', '$empresa', '$cargo', '$web', '$email', '$tel', '$extencion', '$cel', '$direccion', '$localidad', '$cpostal', '$pais', '$fb', '$tw', '$comentarios', '$date', '$usuario')";

mysql_query($consulta);

echo"<script language='JavaScript'>
        alert('Hemos registrado el contacto correctamente');
    </script>";
echo "<script>window.location=\"suscriptores.php\"</script>";
echo "Hemos registrado el contacto";

?>

<?php
include 'inc/head.php';
include 'inc/header_comoon.php';
//include 'conex.php';

$email=$_POST["email"];
$gobierno=$_POST["gobierno"];
$estado=$_POST["estado"];
$dependencia=$_POST["dependencia"];
$web=$_POST["web"];
$encargado=$_POST["encargado"];
$cargo=$_POST["cargo"];
$vigencia=$_POST["vigencia"];
$tel=$_POST["tel"];
$extencion=$_POST["extencion"];
$colonia=$_POST["colonia"];
$dir=$_POST["direccion"];
$numExterior=$_POST["numExterior"];
$cp=$_POST["cp"];
$fb=$_POST["fb"];
$tw=$_POST["tw"];
$comentarios=$_POST["comentarios"];

$date=date("Y-m-d");

//echo $gobierno,  $estado,  $dependencia,  $web,  $encargado,  $cargo,  $vigencia,  $tel,  $extencion,  $email,  $colonia,  $dir,  $numExterior,  $cp,  $fb,  $tw,  $comentarios,  $date;

$conexion=mysqli_connect("localhost","anprorgm_admin", "Admin_*2016", "anprorgm_registros");
if(!$conexion){
  die ("Error de conexión");
}
else {
  $sql="INSERT INTO todo( gobierno, estado, dependencia, web, nombreEncargado, cargo, vigencia, telefono, extencion, email, colonia, direccion, numExterior, cp, Fb, Tw, comentarios, fechaCaptura )
VALUES ('$gobierno',  '$estado',  '$dependencia',  '$web',  '$encargado',  '$cargo',  '$vigencia',  '$tel',  '$extencion',  '$email',  '$colonia',  '$dir',  '$numExterior',  '$cp',  '$fb',  '$tw',  '$comentarios',  '$date')";
  mysqli_query($conexion,$sql);

  echo"<script language='JavaScript'>
          alert('Hemos registrado al nuevo contacto correctamente');
      </script>";
  echo "<script>window.location=\"index.php\"</script>";

}



?>

<?php
include "inc/clases.php";


$categoria=$_POST["categoria"];
$revista = $_POST["revista"];
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$empresa=$_POST["empresa"];
$cargo=$_POST["cargo"];
$web=$_POST["web"];
$vigencia=$_POST["vigencia"];
$tel=$_POST["tel"];
$extencion=$_POST["extencion"];
$cel=$_POST["cel"];
$pais=$_POST["origen"];
$estado=$_POST["estado"];
$municipio=$_POST["municipio"];
$colonia=$_POST["colonia"];
$direccion=$_POST["direccion"];
$cp=$_POST["cp"];
$fb=$_POST["fb"];
$tw=$_POST["tw"];
$comentarios=$_POST["comentarios"];
// $usuario=$_SESSION['user'];
$date=date("Y-m-d");

//echo $gobierno,  $estado,  $dependencia,  $web,  $encargado,  $cargo,  $vigencia,  $tel,  $extencion,  $email,  $colonia,  $dir,  $numExterior,  $cp,  $fb,  $tw,  $comentarios,  $date;
// $conectar=mysqli_connect("localhost","root","", "anprorgm_registros");
// mysqli_set_charset($conectar,"utf8");
// if(!$conectar){
//   die ("Error en la conexión a la Base de Datos");
// }
// else{
$registro= new Agenda();

$nuevoRegistro = $registro->registrarContacto($categoria, $revista, $nombre,  $email, $tel, $extencion,  $cel,
                              $empresa,  $cargo,  $web,  $vigencia, $pais,  $estado,
                              $municipio, $colonia, $direccion, $cp, $fb, $tw,
                              $comentarios, $date);

if($nuevoRegistro){
  echo"<script language='JavaScript'>
      alert('Contacto Registrado');
      </script>";
echo "<script>window.history.go(-1);</script>";
}
else{
  echo"<script language='JavaScript'>
      alert('Error: No pudimos Registrar');
      </script>";
echo "<script>window.history.go(-1);</script>";
}
//   $sql="INSERT INTO datos( categoria_id, nombre, email, tel, ext, cel, empresa, cargo, web, vigencia, pais, estado, municipio, colonia, direccion, cp, fb, tw, comentario, usuario, fecha_captura )
// VALUES ('$categoria',  '$nombre',  '$email', '$tel', '$extencion',  '$cel', '$empresa',  '$cargo',  '$web',  '$vigencia',  '$pais',  '$estado',  '$municipio',  '$colonia', '$direccion', '$cp',  '$fb',  '$tw',  '$comentarios', '$usuario',  '$date')";
//
//   mysqli_query($conectar,$sql);
//
//   echo"<script language='JavaScript'>
//           alert('Hemos registrado al nuevo contacto correctamente');
//       </script>";
//   echo "<script>window.location=\"index.php\"</script>";
//
// }
?>

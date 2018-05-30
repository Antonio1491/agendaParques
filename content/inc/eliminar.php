<?php

$folio=$_GET["folio"];
if(isset($_GET["folio"]) and $_GET["folio"]<>"")
{
$conectar=mysqli_connect("mysql.hostinger.mx","u582611776_2","Admin_*2016","u582611776_agend");
  mysqli_set_charset($conectar,"utf8");
  if(!$conectar){
    die ("Error en la conexión a la Base de Datos");
  }
  else{
    $sql="DELETE FROM datos WHERE contact_id='$folio'";
    if(!$resultado = $conectar->query($sql))
    {
      die('Ocurrio un error ejecutando el query [' . $conectar->error . ']');
    }
  else{
      echo"<script language='JavaScript'>
        alert('Registro Eliminado');
        </script>";
      echo "<script>window.location=\"../agenda.php\"</script>";
    }
  }
}
?>

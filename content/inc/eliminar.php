<?php
include '../conex.php';
$folio=$_GET["folio"];
if(isset($_GET["folio"]) and $_GET["folio"]<>""){
  $sql="DELETE FROM todo WHERE folio='$folio'";
  if(mysql_query($sql)){
    echo"<script language='JavaScript'>
      alert('Registro Eliminado');
      </script>";
    echo "<script>window.location=\"../desplegar-agenda.php\"</script>";
  }
  else{
    echo"<script language='JavaScript'>
      alert('No se pudo eliminar el Registro');
      </script>";
    echo "<script>window.location=\"../desplegar-agenda.php\"</script>";
  }
}
else{
  echo "No especifico que desea Borrar";
}

 ?>

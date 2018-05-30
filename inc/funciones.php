<?php
//verificamo el usuario y contraseña
function login($nombre, $clave){
$link=mysqli_connect("mysql.hostinger.mx","u582611776_2","Admin_*2016","u582611776_agend");
 // $link = mysqli_connect('localhost', 'root', '','anpr');
  $sql="SELECT * FROM usuarios WHERE nombre='$nombre' AND contrasena = '$clave'";
  $result=mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);
  if  ($count > 0){
      return $nombre;
    }
    else{
      $error = "Usuario no encontrado";
      return $error;
    }
}
?>

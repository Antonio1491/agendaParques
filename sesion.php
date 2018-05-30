<?php
session_start();
include 'inc/funciones.php';

$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

$resultado = login($usuario, $contrasena);
if($resultado == $usuario)
{
$_SESSION['user']= $resultado;
header('Location: content/index.php');
  //echo "Hola ". $resultado;
}
else{
  echo $resultado;
}

?>

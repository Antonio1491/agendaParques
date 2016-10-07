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


/*$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$link = mysqli_connect('localhost', 'root', '','anpr');
$sql="SELECT * FROM usuarios WHERE nombre='$usuario' AND contrasena = '$contrasena'";
$result=mysqli_query($link, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$count = mysqli_num_rows($result);

if  ($count > 0){
    $_session['usuario']=$usuario;
    echo "Hola $usuario";
  }
  else{
  echo "Usuario no encontrado";
  }
*/

?>

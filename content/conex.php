<?php
$servidor="localhost";
//$servidor="localhost";
$baseDeDatos="anpr";
/*$baseDeDatos="anprorgm_registros";
$usuario="anprorgm_admin";
$contrasena="Admin_*2016";*/

$usuario="root";
$contrasena="";
$conectar=mysqli_connect($servidor, $usuario, $contrasena, $baseDeDatos);
mysqli_set_charset($conectar,"utf8");
?>

<?php
//$servidor="localhost";
$servidor="localhost";
//$baseDeDatos="anpr";
$baseDeDatos="anprorgm_registros";
$usuario="anprorgm_admin";
$contrasena="Admin_*2016";
//$usuario="root";
//$contrasena="";

$conectar=mysql_connect($servidor, $usuario, $contrasena);
if (!$conectar) {
	echo "Error: Imposible conectar con la Base de Datos";
}
else{
mysql_query("SET NAMES utf8");
	mysql_select_db($baseDeDatos);
}

?>
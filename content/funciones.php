<?php
include"conex.php";

function ejecutar_sql($sql){
	$resultado = mysql_query($sql);
	if (!$resultado) {
		echo "Error";
		return $resultado;
		# code...
	}
}

function conectarBase($servidor, $usuario, $constrasena, $baseDeDatos){
	if(!$enlace=@mysqli_connect($servidor, $usuario, $constrasena, $baseDeDatos)){
		return false;
	}
	elseif (!mysqli_select_db($baseDeDatos)) {
		return false;
	}
	else{
		return true;
	}
}


function consultar($consulta){
	if (!$datos=mysqli_query($consulta) or mysql_num_rows($datos)<1){
		return false;
	}
	else{
		return $datos;
	}
}


function verificarVacio($valor){
	if($valor == "" ){
		echo "Campo Vacio";
	}
	else{
		echo "listo";
	}

}

?>

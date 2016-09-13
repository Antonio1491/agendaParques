<?php

function ejecutar_sql($sql){
	$resultado = mysql_query($sql);
	if (!$resultado) {
		echo "Error";
		return $resultado;
		# code...
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

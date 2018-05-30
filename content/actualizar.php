
<?php

// $conectar=mysqli_connect("localhost","root","", "anprorgm_registros");
//Conexión online
$conectar=mysqli_connect("mysql.hostinger.mx","u582611776_2","Admin_*2016","u582611776_agend");
mysqli_set_charset($conectar,"utf8"); //Soluciono los problemas de visualización e inserción de acentos
if(!$conectar){
  die("Error de conexión");
}
else{
  $sql="UPDATE datos SET categoria_id='$_POST[categoria]', nombre ='$_POST[nombre]', email ='$_POST[email]',
	tel ='$_POST[tel]', ext ='$_POST[extencion]', cel ='$_POST[cel]',
	empresa ='$_POST[empresa]', cargo ='$_POST[cargo]', web ='$_POST[web]', vigencia ='$_POST[vigencia]',
	pais ='$_POST[pais]', estado ='$_POST[estado]', municipio ='$_POST[municipio]',
	colonia ='$_POST[colonia]', direccion ='$_POST[direccion]', cp ='$_POST[cp]', fb ='$_POST[fb]', tw ='$_POST[tw]', comentario ='$_POST[comentarios]', revista = '$_POST[revista]'
  WHERE contact_id = '$_POST[folio]' ";

	if(!$resultado = $conectar->query($sql)){
	die('Ocurrio un error ejecutando el query [' . $conectar->error . ']');
	}
else{
  echo"<script language='JavaScript'>
                  alert('Hemos actualizado los datos para el contacto');
                  </script>";
  echo "<script>window.history.go(-1);</script>";
	}
}

 ?>
<!--
nombre ='".utf8_decode($_POST['nombre'])."', empresa ='".utf8_decode($_POST['empresa'])."' ,
      cargo ='".utf8_decode($_POST['cargo'])."', web ='".utf8_decode($_POST['web'])."', email ='".utf8_decode($_POST['email'])."',
      tel ='".utf8_decode($_POST['tel'])."', extencion ='".utf8_decode($_POST['extencion'])."',cel ='".utf8_decode($_POST['cel'])."',
      direccion ='".utf8_decode($_POST['direccion'])."', ciudad ='".utf8_decode($_POST['localidad'])."',
      cpostal ='".utf8_decode($_POST['cpostal'])."', pais ='".utf8_decode($_POST['pais'])."', Fb ='".utf8_decode($_POST['fb'])."',
      Tw ='".utf8_decode($_POST['tw'])."',comentarios ='".utf8_decode($_POST['comentarios'])."'

-->

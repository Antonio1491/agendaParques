<?php
include 'conex.php';
include 'funciones.php';

$gobierno=$_POST['gobierno'];
$estado=$_POST['estado'];
$web=$_POST['web'];
$encargado=$_POST['encargado'];
$cargo=$_POST['cargo'];
$vigencia=$_POST['vigencia'];
$tel=$_POST['tel'];
$extencion=$_POST["extencion"];
$email=$_POST['email'];
$email2=$_POST['email2'];
$colonia=$_POST['colonia'];
$dir=$_POST['direccion'];
$numExterior=$_POST['numExterior'];
$cp=$_POST['cp'];

$fecha=date("Y-m-d");


$sql="INSERT INTO todo (gobierno, estado, web, nombreEncargado, cargo, vigencia, telefono, extencion, email, emailOpcional, colonia, direccion, numExterior, cp, fechaCaptura) VALUES ('$gobierno', '$estado', '$web', '$encargado', '$cargo', '$vigencia', '$tel', '$extencion', '$email','$email2', '$colonia', '$dir','$numExterior','$cp','$fecha')";

ejecutar_sql($sql);

echo"<script language='JavaScript'> 
                alert('Hemos registrado al nuevo contacto correctamente'); 
                </script>";
echo "<script>window.location=\"index.php\"</script>";

?>
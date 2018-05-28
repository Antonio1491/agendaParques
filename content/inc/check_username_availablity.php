<?php
sleep(1);

$conectar=mysqli_connect("localhost","anprorgm_admin","Admin_*2016","anprorgm_registros");
mysqli_set_charset($conectar,"utf8");

if($_REQUEST)
{
	$email 	= $_REQUEST['email'];
	$query = "SELECT * FROM datos WHERE email = '".strtolower($email)."'";
	$results = mysqli_query($conectar, $query) or die('ok');

	if(mysqli_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">Usuario ya existente</div>';
	}
	else
	{
		echo '<div id="Success">Disponible</div>';
	}

}?>

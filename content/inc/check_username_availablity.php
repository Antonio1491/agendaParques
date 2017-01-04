<?php
sleep(1);
include('../conex.php');
if($_REQUEST)
{
	$email 	= $_REQUEST['email'];
	$query = "select * from todo where email = '".strtolower($email)."'";
	$results = mysql_query( $query) or die('ok');

	if(mysql_num_rows(@$results) > 0) // not available
	{
		echo '<div id="Error">Usuario ya existente</div>';
	}
	else
	{
		echo '<div id="Success">Disponible</div>';
	}

}?>

<?php session_start(); ?>
<aside >
	<div class="col s12 m4 l2 light-green lighten-5" id="app-aside">	<!-- Panel de menú-->
		<?php echo "<h6>Hola: ".$_SESSION['user']. "</h6>"; ?>
		<figure><a href="#"><img src="img/anprLogo.png" id="logo" class="responsive-img"></a></figure>
		<ul id="gobiernos" class="dropdown-content">
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
		</ul>
		<ul id="menu">
			<li><a class="dropdown-button" href="#!" data-activates="gobiernos"><i class="tiny material-icons">perm_identity</i> GOBIERNOS</a></li>
			<!--<li><a href="" >Empresas/ONG/Universidades</a></li>
			<li><a href="" >Proveedores</a></li>-->
			<li><a href="suscriptores.php"><i class="tiny material-icons">perm_identity</i> CONTACTOS</a></li>
			<li><a href="extranjeros.php"><i class="tiny material-icons">perm_identity</i> EXTRANJEROS</a></li>
		</ul>
		<br>
				<a href="inc/closet.php" id="closet"><i class="tiny material-icons">power_settings_new</i> SALIR</a>
	</div>
</aside>

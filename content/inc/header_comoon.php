<?php session_start(); ?>
<header>
	<ul id="opciones" class="dropdown-content">
		<li><a href="inc/closet.php"><i class="tiny material-icons">power_settings_new</i>Salir</a></li>
	</ul>
	<ul id="gobiernos" class="dropdown-content">
		<li><a href="index.php">Agregar</a></li>
		<li><a href="desplegar-agenda.php">Visualizar</a></li>
	</ul>
	<ul id="contactos" class="dropdown-content">
		<li><a href="suscriptores.php">Agregar</a></li>
		<li><a href="desplegar-contactos.php">Visualizar</a></li>
	</ul>
	<nav class="light-blue darken-4">
		<div class="nav-wrapper">
	      <a href="index.php" class="brand-logo" id="anpr">Agenda Parques de México</a>
				<ul class="right hide-on-med-and-down">
					
					<li><a href="#"><i class="material-icons">search</i></a></li>
					<li><a class="dropdown-button" href="#!" data-activates="gobiernos">GOBIERNOS<i class="material-icons right">arrow_drop_down</i></a></li>
					<li><a class="dropdown-button" href="#!" data-activates="contactos">CONTACTOS<i class="material-icons right">arrow_drop_down</i></a></li>
	      <!-- <li><a href="#"><i class="material-icons">refresh</i></a></li>-->
	        <li><a href="#" class="dropdown-button" data-activates="opciones"><i class="tiny material-icons">more_vert</i></a></li>
	      </ul>
	    </div>
	</nav>
	<div class="" id="informacionDeUsuario">
			<?php echo "<p>Hola ".$_SESSION['user']. "</p>"; ?>
	</div>
</header>

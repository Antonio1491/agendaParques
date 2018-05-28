<?php session_start();?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
<head>
	<meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>
  <link rel="stylesheet" href="css/foundation-flex.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/css.css">

	<script src="js/vendor/jquery.js"></script>
 	<script src="js/vendor/what-input.js"></script>
 	<script src="js/vendor/foundation.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  </head>
	<?php include "conex.php"; ?>
  <body>
    <header>
      <div class="row expanded">
        <div class="column">
          <small>Agenda Parques de México</small>
        </div>
        <div class="column">
          <ul class="menu">
            <li><a href="index.php">Registrar</a></li>
            <li><a href="agenda.php">Visualizar</a></li>
          </ul>
        </div>
				<div class="column">
          <?php

          echo "<p>Hola ".$_SESSION['user']. "</p>";
          ?>
        </div>

				<div class="column medium-2">
					<form class="" action="" method="post">
		        Buscar:
		        <input type="search" value="" onkeyup="busqueda(this.value)"></input>
				</div>
		    </form>

      </div>
    </header>
    <!--<form class="" action="" method="post">
      <div class="row column medium-2 small-8 buscar">
        <div class="column shrink" id="bus">Buscar:</div>
        <div class="column"><input type="search" value="" onkeyup="busqueda(this.value)"></input></div>
      </div>
    </form>-->
    <div class="" id="contenido">

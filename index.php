<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Sistema de Registros</title>
	<link type="text/css" rel="stylesheet" href="assets/style.css";>
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
</head>
<body>
	<div class="row ">
		<div class="col s10 m5 l3" id="login">
			<div class="row logo l4">
				<figure><img src="assets/img/anpr100x100.png"></figure>
			</div>
			<form method="post" action="sesion.php">
				<div class="row">
	        <div class="input-field col s12 m11 l11">
	          <i class="material-icons prefix">account_circle</i>
	          <input id="icon_prefix" name="usuario" type="text" class="validate"></input>
	          <label for="icon_prefix">Recreador</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12 m11 l11">
	          <i class="material-icons prefix">lock</i>
	          <input id="password" name="contrasena" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	      </div>
	      <div class="btnEntrar">
	      <button class="btn waves-effect waves-light" type="submit" name="action">LOGIN</button>
	      </div>
			</form>
		</div>
	</div>

<!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</body>
</html>

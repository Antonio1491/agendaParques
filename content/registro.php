<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Registro</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="css/registro.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<nav id="app-nav">	
		<h1>SR-ANPR</h1>
	</nav>
	<header id="app-header">
		
	</header>
	<div class="container">
		<section id="app-section">
			<form action="registrar.php" method="POST">
				<div class="row">
					<div class="col-xs-12 col-md-4 form-group">
						<label>Nombre</label>
						<input type="text" class="form-control" id="nombrePersona" name="nombrePersona"></input>
					</div>
					<div class="col-xs-12 col-md-4 form-group">
						<label>Apellido Paterno</label>
						<input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno"></input>
					</div>
					<div class="col-xs-12 col-md-4 form-group">
						<label>Apellido Materno</label>
						<input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno"></input>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4 form-group">
					<label>Puesto/Cargo</label>
						<select class="form-control" name="puesto">
							<option>Administrativo</option>
							<option>Operativo</option>
						</select>
					</div>
					<div class="col-xs-12 col-md-8 form-group">
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" name="tipoUsuario[]" value="suscriptor"> Suscriptor
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" name="tipoUsuario[]" value="colaborador"> Colaborador
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" id="inlineCheckbox1" name="tipoUsuario[]" value="representante"> Representante de Empresa
					</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4 form-group">
					<label>País</label>
						<select class="form-control" name="pais">
							<option value="México">México</option>
							<option value="E.U.">E.U.</option>
						</select>
					</div>
					<div class="col-xs-12 col-md-4 form-group">
					<label>Estado</label>
						<input type="text" class="form-control" id="estado" name="estado"></input>
					</div>
					<div class="col-xs-12 col-md-4 form-group">
					<label>Ciudad/Municipio</label>
						<input type="text" class="form-control" id="ciudad" name="ciudad"></input>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4 form-group">
						<label>Colonia</label>
						<input type="text" class="form-control" id="colonia" name="colonia"></input>
					</div>
					<div class="col-xs-12 col-md-4 form-group">
						<label>Dirección</label>
						<input type="text" class="form-control" id="direccion" name="direccion"></input>
					</div>
					<div class="col-xs-6 col-md-2 form-group">
						<label>Núm. Exterior</label>
						<input type="text" class="form-control" id="numExterior" name="numExterior"></input>
					</div>
					<div class="col-xs-6 col-md-2 form-group">
						<label>C.P.</label>
						<input type="text" class="form-control" id="cp" name="cp"></input>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-4 form-group">
						<label>Tel. Oficina</label>
						<input type="text" class="form-control" id="telOficina" name="telOficina"></input>
					</div>				
					<div class="col-xs-12 col-md-4 form-group">
						<label>Tel. Celular</label>
						<input type="text" class="form-control" id="telCelular" name="telCelular"></input>
					</div>
					<div class="col-xs-12 col-md-4 form-group">
						<label>Email</label>
						<input type="email" class="form-control" id="email" name="email"></input>
					</div>
				</div>
				<div class="row btn-form">
					<input type="submit" class="form-control btn btn-info" id="registrar" value="Registrar">
					</input>
				</div>
			</form>
			
		</section>
	</div>
	<footer id="app-footer">
		
	</footer>
</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>
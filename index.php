<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SR-ANPR</title>
	<!-- Compiled and minified CSS -->
	<?php include'inc/head.php'; ?>
	<body>
  	<?php    include 'inc/header_comoon.php';  	?> <!-- header azul-->
	<div class="row">
	<?php include 'inc/aside.php'; ?>
		<section>
			<div class="col s12 m8 l10">	<!-- contenido de registros-->
				<article>
					<h3 class="center-align">Registro de Gobierno</h3>
					<div class="row">
					<form method="POST" action="registrar.php">
						<div class="input-field col s12 m6 l4">
							<input id="" type="text" class="validate" autofocus required autocomplete="on" name="gobierno">
							<label for="">Municipio/Delegación:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l4">
							<input id="" type="text" class="validate" required autocomplete="on" name="estado">
							<label for="">Estado:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l4">
							<input id="" type="text" class="validate" required autocomplete="on" name="dependencia">
							<label for="">Dependencia:</label>
							</input>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6 l4">
							<input id="" name="web" type="text" class="" autocomplete="off">
							<label for="">Sitio web:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l4">
							<input id="" name="encargado" type="text" class="validate" required autocomplete="off">
							<label for="">Nombre del Encargado:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l4">
							<input id="" name="cargo" type="text" class="">
							<label for="">Cargo:</label>
							</input>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6 l2">
							<label form="" > Año de Vigencia</label>
							<input id="" type="number" class="validate"  name="vigencia" min="2016" max="2030">
							
							</input>
						</div>
						<div class="input-field col s12 m6 l2">
							<input id="" name="tel" type="text" class="" autocomplete="off">
							<label for="">Teléfono:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l2">
							<input id="" name="extencion" type="text" class="" autocomplete="off">
							<label for="">Ext.:</label>
							</input>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 m6 l2">
							<input id="" name="email" type="text" class="validate" required autocomplete="off">
							<label for=""  >E-mail:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l2">
							<input id="" name="email2" type="text" class=""  autocomplete="off">
							<label for=""  >E-mail opcional:</label>
							</input>
						</div>
					</div>
				
					<div class="row">
						<div class="input-field col s12 m6 l4">
							<input id="" name="colonia" type="text" class="validate" required autocomplete="off">
							<label for="">Colonia:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l4">
							<input name="direccion" id="" type="text" class="validate" required >
							<label for="">Dirección:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l2">
							<input id="" name="numExterior" type="text" class="validate" >
							<label for="">Núm. Exterior:</label>
							</input>
						</div>
						<div class="input-field col s12 m6 l2">
							<input id="" name="cp" type="text" class="validate" required >
							<label for="">C.P.:</label>
							</input>
						</div>
					</div>
					<div class="row  center-align">
						<button class="btn waves-effect waves-light" type="submit" name="action">Registrar
					    	<i class="material-icons right">send</i>
					  	</button>
					</div>
					</form>
				</article>
			</div>
		</section>
	</div>
<?php include'inc/footer.php';?>
</body>
</html>
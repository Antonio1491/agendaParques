<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Suscriptores</title>
	<?php include'inc/head.php'; ?>
<body>
<?php include'inc/header_comoon.php'; ?>
	<div class="row ">
		<section class="formulario">
			<div class="col s12 m12 l12">	<!-- contenido de registros-->
			<h3 class="center-align">Registro de Contactos</h3>
			<form method="POST" action="registroContactos.php">
				<div class="row">
					<div class="input-field col s12 m6 l1">
						<label></label>
						<select class="browser-default" name="tipo">
							<option value="" disabled selected>Tipo</option>
							<option value="Persona">Persona</option>
							<option value="Empresa">Empresa</option>
						</select>
					</div>
					<div class="input-field col s12 m6 l3">
						<input type="text" id="empresa" name="empresa" class="validate"></input>
						<label>Empresa/Dependencia:</label>
					</div>
					<div class="input-field col s12 m6 l2">
						<input id="email" name="email" type="text" class="validate" required autocomplete="off"></input>
						<label for=""  >E-mail:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l3">
						<input type="text" id="nombre" name="nombre" class="validate"></input>
						<label>Nombre:</label>
					</div>
					<div class="input-field col s12 m6 l2">
						<input type="text" id="cargo" name="cargo" class="validate"></input>
						<label>Cargo/Puesto:</label>
					</div>
					<div class="input-field col s12 m6 l2">
						<input type="text" id="web" name="web" class="validate"></input>
						<label>Sitio web:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l2">
						<input id="tel" name="tel" type="tel" class="validate" autocomplete="off"></input>
						<label for="">Teléfono:</label>
					</div>
					<div class="input-field col s12 m6 l1">
						<input id="extencion" name="extencion" type="tel" class="validate" autocomplete="off"></input>
						<label for="">Extención:</label>
					</div>
					<div class="input-field col s12 m6 l2">
						<input id="cel" name="cel" type="tel" class="validate" autocomplete="off"></input>
						<label for="">Móvil:</label>
					</div>
					<div class="input-field col s12 m6 l2">
						<input id="pais" name="pais" type="text" class="validate" autocomplete="on"></input>
						<label for="">País:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l2">
						<input id="localidad" name="localidad" type="text" class="validate" autocomplete="on" required></input>
						<label for="">Localidad:</label>
					</div>
					<div class="input-field col s12 m6 l3">
						<input id="direccion" name="direccion" type="text" class="validate" autocomplete="off" required></input>
						<label for="">Dirección:</label>
					</div>
					<div class="input-field col s12 m6 l2">
						<input id="cpostal" name="cpostal" type="text" class="validate" autocomplete="on" required></input>
						<label for="">C.P.:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l7">
						<textarea id="comentarios" class="materialize-textarea" length="300" name="comentarios"></textarea>
            <label for="textarea1">Comentarios:</label>
					</div>
				</div>
				<div class="row  center-align">
					<button class="btn waves-effect waves-light" type="submit"  name="action" >Registrar</button>
					<!--<input class="btn waves-effect waves-light" type="button" value="Registrar" onclick="enviarDatos()">-->
				</div>
			</form>
			<div id="mensaje"></div>
			</div>
		</section>
	</div>
<?php include'inc/footer.php'; ?>
</body>
</html>

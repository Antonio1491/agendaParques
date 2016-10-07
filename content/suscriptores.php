<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Suscriptores</title>
	<?php include'inc/head.php'; ?>
<body>
<?php include'inc/header_comoon.php'; ?>
	<div class="row">
		<?php include 'inc/aside.php'; ?>
		<section>
			<div class="col s12 m8 l10">	<!-- contenido de registros-->
			<h3 class="center-align">Registro de Contactos</h3>
			<form method="POST" action="registroContactos.php">
				<div class="row">
					<div class="input-field col s12 m6 l4">
						<input type="text" id="nombre" name="nombre" class="validate"></input>
						<label>Nombre completo:</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input type="text" id="empresa" name="empresa" class="validate"></input>
						<label>Empresa:</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input type="text" id="cargo" name="cargo" class="validate"></input>
						<label>Cargo:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l4">
						<input type="text" id="web" name="web" class="validate"></input>
						<label>Sitio web:</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="email" name="email" type="text" class="validate" required autocomplete="off"></input>
						<label for=""  >E-mail:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l3">
						<input id="tel" name="tel" type="tel" class="validate" autocomplete="off"></input>
						<label for="">Teléfono:</label>
					</div>
					<div class="input-field col s12 m6 l1">
						<input id="extencion" name="extencion" type="tel" class="validate" autocomplete="off"></input>
						<label for="">Extención:</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="cel" name="cel" type="tel" class="validate" autocomplete="off"></input>
						<label for="">Móvil:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l4">
						<input id="direccion" name="direccion" type="text" class="validate" autocomplete="off" required></input>
						<label for="">Dirección:</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="ciudad" name="ciudad" type="text" class="validate" autocomplete="on" required></input>
						<label for="">Ciudad:</label>
					</div>
					<div class="input-field col s12 m6 l4">
						<input id="estado" name="estado" type="text" class="validate" autocomplete="on"></input>
						<label for="">Estado:</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m6 l2">
						<input id="cpostal" name="cpostal" type="text" class="validate" autocomplete="on" required></input>
						<label for="">C.P.:</label>
					</div>
					<div class="input-field col s12 m6 l2">
						<input id="pais" type="text" name="pais" class="validate" autocomplete="on" required></input>
						<label for="">País:</label>
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

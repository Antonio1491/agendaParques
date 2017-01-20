<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>SR-ANPR</title>
	<!-- Compiled and minified CSS -->
	<?php include'inc/head.php'; ?>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#email').blur(function(){

			$('#Info').html('<img src="inc/loader.gif" alt="" />').fadeOut(1000);

			var email = $(this).val();
			var dataString = 'email='+email;

			$.ajax({
	            type: "POST",
	            url: "inc/check_username_availablity.php",
	            data: dataString,
	            success: function(data) {
					$('#Info').fadeIn(1000).html(data);
					//alert(data);
	            }
	        });
	    });
	});
	</script>
	<body>
  	<?php    include 'inc/header_comoon.php';  	?> <!-- header azul-->
	<div class="row">
		<section class="formulario ">
			<div class="col s12 m12 l12">	<!-- contenido de registros-->
				<article>
					<h3 class="center-align">Registro de Gobierno</h3>
					<form method="POST" action="registrar.php">
						<div id="Info" class="row"></div>
						<div class="row">
							<div class="input-field col s12 m6 l2 offset-l1">
								<input id="email" name="email" type="text" class="validate" required autocomplete="off">
								<label for=""  >E-mail:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l2">
								<input id="" type="text" class="validate" autofocus required autocomplete="on" name="gobierno">
								<label for="">Municipio/Delegación:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l2">
								<input id="" type="text" class="validate" required autocomplete="on" name="estado">
								<label for="">Estado:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l2">
								<input id="" type="text" class="validate" required autocomplete="on" name="dependencia">
								<label for="">Dependencia:</label>
								</input>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m6 l2 offset-l1">
								<input id="" name="web" type="text" class="" autocomplete="off">
								<label for="">Sitio web:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l2">
								<input id="" name="encargado" type="text" class="validate" required autocomplete="off">
								<label for="">Nombre del Encargado:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l2">
								<input id="" name="cargo" type="text" class="">
								<label for="">Cargo:</label>
								</input>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m6 l2 offset-l1">
								<label form="" > Año de Vigencia</label>
								<input id="" type="number" class="validate"  name="vigencia" min="2016" max="2030">
								</input>
							</div>
							<div class="input-field col s12 m6 l2">
								<input id="" name="tel" type="text" class="" autocomplete="off">
								<label for="">Teléfono:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l1">
								<input id="" name="extencion" type="text" class="" autocomplete="off">
								<label for="">Ext.:</label>
								</input>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m6 l2 offset-l1">
								<input id="" name="colonia" type="text" class="validate" required autocomplete="off">
								<label for="">Colonia:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l2">
								<input name="direccion" id="" type="text" class="validate" required >
								<label for="">Dirección:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l1">
								<input id="" name="numExterior" type="text" class="validate" >
								<label for="">Núm. Exterior:</label>
								</input>
							</div>
							<div class="input-field col s12 m6 l1">
								<input id="" name="cp" type="text" class="validate" required >
								<label for="">C.P.:</label>
								</input>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m6 l3 offset-l1">
								<input id="fb" name="fb" type="text" class="validate" autocomplete="off" ></input>
								<label for="">Facebook:</label>
							</div>
							<div class="input-field col s12 m6 l3">
								<input id="tw" name="tw" type="text" class="validate" autocomplete="off" ></input>
								<label for="">Twitter:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m6 l7 offset-l1">
								<textarea id="comentarios" class="materialize-textarea" length="500" name="comentarios"></textarea>
								<label for="textarea1">Comentarios:</label>
							</div>
						</div>
						<div class="row  center-align">
								<button class="btn waves-effect waves-light" type="submit"  name="action" >Registrar</button>
						</div>
					</form>
				</article>
			</div>
		</section>
	</div>
</div><!-- fin de id resultado-->
<?php include'inc/footer.php';?>
</body>
</html>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agenda</title>
<?php include 'inc/head.php';

?>
	<!-- Compiled and minified CSS -->
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
	<?php
	require_once 'inc/encabezado.php';
	?>
		<section class="formulario ">
			<div class="">	<!-- contenido de registros-->
				<article>
					<h3 class="text-center">Registro</h3>
					<form method="POST" action="registrar.php">
						<div id="Info" class="row"></div>
            <div class="row">
              <div class="column medium-2">
								<label for=""><span>*</span>Categoría:</label>
								<select name="categoria" required>
								<?php
                //$conectar=mysqli_connect("localhost","anprorgm_admin","Admin_*2016","anprorgm_registros");
                $conectar=mysqli_connect("localhost","root","", "anprorgm_registros");
                mysqli_set_charset($conectar,"utf8");
                if(!$conectar){
                  die ("Error en la conexión a la Base de Datos");
                }
                else{
								$sql="SELECT * FROM categoria ORDER BY categoria_id DESC";
								$resultado= mysqli_query($conectar, $sql);
								while($fila= mysqli_fetch_array($resultado)){
									echo "<option value=".$fila['categoria_id'].">".$fila['nombre']."</option>";
									}
                }
								 ?>
								</select>
							</div>
              <div class="column medium-3">
                <label for="">*Asignar Revista:</label>
                <input type="radio" name="revista" value="1"> Sí
                <input type="radio" name="revista" value="0"> No
              </div>
            </div>
						<div class="row">

							<div class="column">
								<label for=""><span>*</span>Nombre:</label>
								<input id="" name="nombre" type="text" class="validate" required autocomplete="off">
								</input>
							</div>
							<div class="column medium-4">
								<label for=""  ><span>*</span>E-mail:</label>
								<input id="email" name="email" type="text" class="validate" autocomplete="off" required>
								</input>
							</div>

						</div>
						<div class="row">
							<div class="column">
								<label for="">Dependencia/Empresa:</label>
								<input id="" type="text" class="validate"  autocomplete="on" name="empresa">
								</input>
							</div>
							<div class="column">
								<label for="">Cargo/Puesto:</label>
								<input id="" name="cargo" type="text" class=""></input>
							</div>
							<div class="column">
								<label for="">Sitio web:</label>
								<input id="" name="web" type="text" class="" autocomplete="off">
								</input>
							</div>
							<div class="column medium-2">
								<label form="" >Vigencia del cargo</label>
								<input id="" type="text" class="validate"  name="vigencia" placeholder="Año" >
								</input>
							</div>
						</div>
						<div class="row">
							<div class="column column medium-3">
								<label for="">Teléfono:</label>
								<input id="" name="tel" type="text" class="" autocomplete="off"></input>
							</div>
							<div class="column medium-2">
								<label for="">Ext.:</label>
								<input id="" name="extencion" type="text" class="" autocomplete="off"></input>
							</div>
							<div class="column column medium-3">
								<label for="">Móvil:</label>
								<input id="cel" name="cel" type="tel" class="validate" autocomplete="off"></input>
							</div>
							<div class="column">
								<label for="">Origen:</label>
							     <select name="origen">
                     <option value="Nacional">Nacional</option>
                     <option value="Extranjero">Extranjero</option>
                  </select>
							</div>
						</div>

						<div class="row">
							<div class="column">
								<label for="">Estado:</label>
								<input id="" type="text" class="validate"  autocomplete="on" name="estado">
								</input>
							</div>
							<div class="column">
								<label for="">Ciudad/Municipio/Delegación:</label>
								<input id="" type="text" class="validate"  autocomplete="on" name="municipio">
								</input>
							</div>
							<div class="column">
								<label for="">Colonia:</label>
								<input id="" name="colonia" type="text" class="validate"  autocomplete="off">
								</input>
							</div>
						</div>

						<div class="row">
							<div class="column medium-5">
								<label for="">Dirección:</label>
								<input name="direccion" id="" type="text" class="validate"  placeholder="Calle | # | Cruzamientos | Referencias"></input>
							</div>
							<div class="column medium-2">
								<label for="">C.P.:</label>
								<input id="" name="cp" type="text" class="validate"  ></input>
							</div>
						</div>
						<div class="row">
							<div class="column">
								<label for="">Facebook:</label>
								<input id="fb" name="fb" type="text" class="validate" autocomplete="off" ></input>

							</div>
							<div class="column">
								<label for="">Twitter:</label>
								<input id="tw" name="tw" type="text" class="validate" autocomplete="off" ></input>
							</div>
						</div>
						<div class="row">
							<div class="column">
								<label for="textarea1">Comentarios:</label>
								<textarea id="comentarios" class="" length="500" name="comentarios" placeholder="Proyectos | Giro de la empresa | Palabras clave | Productos que ofrece"></textarea>
							</div>
						</div>
						<div class="row align-center">
								<button class="button large" type="submit"  name="action" >Registrar</button>
						</div>
					</form>
				</article>
			</div>
		</section>

</div><!-- fin de id resultado del header_comoon-->
<?php include'inc/footer.php';?>
</body>
</html>

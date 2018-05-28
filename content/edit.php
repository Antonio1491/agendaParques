<?php
//conexion online
//$conexion=mysqli_connect("localhost", "anprorgm_admin", "Admin_*2016", "anprorgm_registros" ) ;
$conectar=mysqli_connect("localhost","root","", "anprorgm_registros");
mysqli_set_charset($conectar,"utf8");
$sql= "SELECT *
			FROM datos AS a
			LEFT JOIN categoria AS b ON b.categoria_id = a.categoria_id
			WHERE a.contact_id = ".$_GET['folio']."";

			if(!$resultado = $conectar->query($sql)){
			die('Ocurrio un error ejecutando el query [' . $conectar->error . ']');
			}

		while($row=$resultado->fetch_array()){

			echo'
			<form method="POST" action="actualizar.php">';

			echo'
				<div id="Info" class="row"></div>
				<div class="row">
					<div class="column medium-1">
						<label>Folio:</label>
						<input id="" value="'.$row[0].'" name="folio" type="text" class="validate" readonly="readonly"></input>
					</div>
					<div class="column medium-2">
						<label for=""><span>*</span>Categoría:</label>
						<select name="categoria" required>
						<option></option>
						';
						$sql="SELECT * FROM categoria ORDER BY categoria_id DESC";
						$resultado= mysqli_query($conectar, $sql);
						while($fila= mysqli_fetch_array($resultado)){
							echo "<option value=".$fila[0].">".$fila[1]."</option>";
							}
						 echo'
						</select>
					</div>
					<div class="column">
						<label for=""><span>*</span>Nombre:</label>
						<input id="" value="'.$row[2].'" name="nombre" type="text" class="validate" required autocomplete="off">
						</input>
					</div>
					<div class="column medium-4">
						<label for=""  ><span>*</span>E-mail:</label>
						<input id="email" value="'.$row[3].'" name="email" type="text" class="validate" autocomplete="off" required>
						</input>
					</div>
				</div>

				<div class="row">
					<div class="column">
						<label for="">Dependencia/Empresa:</label>
						<input id="" value="'.$row[7].'" type="text" class="validate"  autocomplete="on" name="empresa">
						</input>
					</div>
					<div class="column">
						<label for="">Cargo/Puesto:</label>
						<input id="" value="'.$row[8].'" name="cargo" type="text" class=""></input>
					</div>
					<div class="column">
						<label for="">Sitio web:</label>
						<input id="" value="'.$row[9].'" name="web" type="text" class="" autocomplete="off">
						</input>
					</div>
					<div class="column medium-2">
						<label form="" >Vigencia del cargo</label>
						<input id="" value="'.$row[10].'" type="text" class="validate"  name="vigencia" placeholder="Año" >
						</input>
					</div>
				</div>

				<div class="row">
					<div class="column column medium-3">
						<label for="">Teléfono:</label>
						<input id="" value="'.$row[4].'" name="tel" type="text" class="" autocomplete="off"></input>
					</div>
					<div class="column medium-2">
						<label for="">Ext.:</label>
						<input id="" value="'.$row[5].'" name="extencion" type="text" class="" autocomplete="off"></input>
					</div>
					<div class="column column medium-3">
						<label for="">Móvil:</label>
						<input id="cel" value="'.$row[6].'" name="cel" type="tel" class="validate" autocomplete="off"></input>
					</div>
					<div class="column">
						<label for="">País:</label>
						<input id="pais" value="'.$row[11].'" name="pais" type="text" class="validate" autocomplete="on"></input>
					</div>
				</div>

				<div class="row">
					<div class="column">
						<label for="">Estado:</label>
						<input id="" value="'.$row[12].'" type="text" class="validate"  autocomplete="on" name="estado">
						</input>
					</div>
					<div class="column">
						<label for="">Ciudad/Municipio/Delegación:</label>
						<input id="" value="'.$row[13].'" type="text" class="validate"  autocomplete="on" name="municipio">
						</input>
					</div>
					<div class="column">
						<label for="">Colonia:</label>
						<input id="" value="'.$row[14].'" name="colonia" type="text" class="validate"  autocomplete="off">
						</input>
					</div>
				</div>
				<div class="row">
					<div class="column medium-5">
						<label for="">Dirección:</label>
						<input name="direccion" value="'.$row[15].'" id="" type="text" class="validate"  placeholder="Calle | # | Cruzamientos | Referencias"></input>
					</div>
					<div class="column medium-2">
						<label for="">C.P.:</label>
						<input id="" value="'.$row[16].'" name="cp" type="text" class="validate"  ></input>
					</div>
				</div>
				<div class="row">
					<div class="column">
						<label for="">Facebook:</label>
						<input id="fb" value="'.$row[17].'" name="fb" type="text" class="validate" autocomplete="off" ></input>

					</div>
					<div class="column">
						<label for="">Twitter:</label>
						<input id="tw" value="'.$row[18].'" name="tw" type="text" class="validate" autocomplete="off" ></input>
					</div>
				</div>
				<div class="row">
					<div class="column">
						<label for="textarea1">Comentarios:</label>
						<textarea id="comentarios" value="'.$row[19].'" class="materialize-textarea" length="500" name="comentarios" placeholder="Proyectos | Giro de la empresa | Palabras clave | Productos que ofrece"></textarea>
					</div>
				</div>
				<div class="row align-center">
						<button class="button large" type="submit"  name="action" >Actualizar</button>
				</div>
			</form>
			';
  }
 ?>

<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agenda</title>
<?php include 'inc/head.php'; ?>
<script type="text/javascript">
  function editar(id)
  {
    var xmlhttp;
    xmlhttp= new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
    {
      if(xmlhttp.readyState == 4 && xmlhttp.status==200){
        document.getElementById("edicion").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","edit.php?folio="+id, true);
    xmlhttp.send();
  }
</script>
<body>
  <?php include 'inc/encabezado.php';?>
    <h5 class="text-center">Tarjeta de Contacto</h5>
    <div id="edicion">
  		<div class="column" id="tarjeta-contacto">
        <?php
        if(isset($_GET['folio']) and $_GET['folio']<>""){
          $folio=$_GET['folio'];
          $conectar=mysqli_connect("localhost","root","", "anprorgm_registros");
          //$conectar=mysqli_connect("localhost","anprorgm_admin","Admin_*2016","anprorgm_registros");
    			mysqli_set_charset($conectar,"utf8");
          if(!$conectar){
            die ("Error en la conexión a la Base de Datos");
          }
          else{
            $sql= "SELECT *
      						FROM datos AS a
      						LEFT JOIN categoria AS b ON b.categoria_id = a.categoria_id
      						WHERE a.contact_id = '$folio'";

      						$resultado=mysqli_query($conectar,$sql);
                  while($fila=mysqli_fetch_array($resultado))
                  {
                    echo "
                    <div class='row column'><small class='tarjeta-titulo'>Información</small></div>
                    <hr>

                    <div class='row column'>
                      <span>Nombre: </span>".($fila[2])."
                    </div>
                    <div class='row column'>
                       <span>Categoría: </span> ".($fila[23])."
                    </div>
                    <div class='row column'>
                      <span>Email: </span>".($fila[3])."
                    </div>
                    <div class='row column'>
                      <span>Teléfono: </span>".($fila[4])."
                    </div>
                    <div class='row column'>
                      <span> Ext.:</span> ".($fila[5])."
                    </div>
                    <div class='row column'>
                      <span>Móvil: </span>".($fila[6])."
                    </div>
                    <div class='row column'>
                      <span>Empresa: </span>".($fila[7])."
                    </div>
                    <div class='row column'>
                      <span>Cargo: </span>".($fila[8])."
                    </div>
                    <div class='row column'>
                      <span>Sitio web: </span>".($fila[9])."
                    </div>
                    <div class='row column'>
                      <span>Vigencia: </span>".($fila[10])."
                    </div>
                    <div class='row column'>
                      <span>País: </span>".($fila[11])."
                    </div>
                    <div class='row column'>
                      <span>Estado: </span>".($fila[12])."
                    </div>
                    <div class='row column'>
                      <span>Municipio: </span>".($fila[13])."
                    </div>
                    <div class='row column'>
                      <span>Colonia: </span>".($fila[14])."
                    </div>
                    <div class='row column'>
                      <span>Dirección:</span>".($fila[15])."
                    </div>
                    <div class='row column'>
                      <span>C.P.: </span>".($fila[16])."
                    </div>
                    <div class='row column'>
                      <span>Facebook: </span>".($fila[17])."
                    </div>
                    <div class='row column'>
                      <span>Twitter: </span>".($fila[18])."
                    </div>
                    <div class='row column'>
                      <span>Comentarios: </span>".($fila[19])."
                    </div>
                    <br>
                    <div class='row column'>
                      <span id='revista'>Revista: </span>";
                        if($fila[21] == 0){
                          echo "<i class='fi-x'> </i>";
                        }
                        else{
                          echo "<i class='fi-check'></i>";
                        }
                    echo"</div>

                    <hr><br>";
                    echo "
                        <div  class='row align-center'>
                          <button type='button' onclick='editar(". $fila[1].")' class='button large'><i class='fi-clipboard-pencil'></i> Editar</button>
                        </div>
                        ";
                  }
      }
    }
        ?>
      </div>
    </div>
 </div>
 </body>
 </html>

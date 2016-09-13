<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro de contactos extranjeros</title>
</head>
<?php include'inc/head.php'; ?>
<body>
<?php include'inc/header_comoon.php'; ?>
<div class="row">
  <?php include 'inc/aside.php'; ?>
  <section>
    <div class="col s12 m8 l10">	<!-- contenido de registros-->
    <h3 class="center-align">Registro de Extranjeros</h3>
    <form method="POST" action="registroExtranjeros.php">
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
        <div class="input-field col s12 m12 l6">
          <input id="direccion" name="direccion" type="text" class="validate" autocomplete="off" required></input>
          <label for="">Dirección:</label>
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

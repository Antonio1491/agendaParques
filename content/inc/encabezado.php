
<header>
  <div class="row expanded">
    <div class="column">
      <small>Agenda Parques de México</small>
    </div>
    <div class="column">
      <ul class="menu">
        <li><a href="index.php"><i class="fi-torsos-all"></i>Registrar</a></li>
        <li><a href="agenda.php"><i class="fi-list"></i>Visualizar</a></li>
        <li><a href="ventana-mod.php"><i class="fi-list"></i>Temporal</a></li>
        <li><a href="inc/closet.php"><i class="fi-x-circle"></i>Salir</a></li>
      </ul>
    </div>
    <div class="column">
      <?php
      echo "<p>Hola ".$_SESSION['user']. "</p> ";

      ?>
    </div>
    <div class="column">
      <form class="" action="" method="post">
        Buscar:
        <input type="search" value="" onkeyup="busqueda(this.value)"></input>
      </form>
    </div>
  </div>
</header>
<div class="" id="contenido">

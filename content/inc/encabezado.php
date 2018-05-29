
<header>
  <div class="row ">
    <div class="column">
      <h4>AGENDA</h4>
    </div>
    <div class="column">
      <ul class="menu">
        <li><a href="index.php"><i class="fi-torsos-all"></i>Registrar</a></li>
        <li><a href="agenda.php"><i class="fi-list"></i>Visualizar</a></li>
        <li><a href="inc/closet.php"><i class="fi-x-circle"></i>Salir</a></li>
      </ul>
    </div>
    <div class="column">
      <?php
      echo "".$_SESSION['user']. "";

      ?>
    </div>
    <div class="column">
      <form class="" action="" method="post">
        <input type="search" value="" onkeyup="busqueda(this.value)" placeholder="Buscar:"></input>
      </form>
    </div>
  </div>
</header>
<div class="" id="contenido">

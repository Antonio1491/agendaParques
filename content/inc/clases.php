<?php
require "conexion.php";

class Agenda extends Conexion{

public function desplegarAgenda(){

    parent::__construct();

  }

  public function desplegar(){

    $lista = $this->conexion_db->query('SELECT b.nombre, a.contact_id, a.email, a.nombre, a.tel, a.cel, a.empresa, a.web, a.estado
                                FROM datos AS a
                                LEFT JOIN categoria AS b ON b.categoria_id = a.categoria_id
                                ORDER BY a.nombre ASC ');

    $desplegarLista=$lista->fetch_all(MYSQLI_ASSOC);

    return $desplegarLista;

  }

}

 ?>

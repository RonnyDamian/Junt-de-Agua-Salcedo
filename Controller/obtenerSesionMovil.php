<?php

require_once("../Model/Sesiones.php");
$obj= new Sesiones();

$fecha = "2020-09-04";

echo json_encode(Sesiones::obtenerSesionMovil($fecha));
die();

?>

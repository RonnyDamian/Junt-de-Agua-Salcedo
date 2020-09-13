<?php

require_once("../Model/Sesiones.php");
$obj= new Sesiones();

$idSesion = $_POST['idSesion'];

echo json_encode(Sesiones::obtenerSesion($idSesion));

?>

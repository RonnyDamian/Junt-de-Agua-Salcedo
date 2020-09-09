<?php

require_once("../Model/Parametro.php");
$obj= new Parametro();

$idParametro = $_POST['idParametro'];

echo json_encode(Parametro::obtenerParametros($idParametro));

?>

<?php

require_once("../Model/Gasto.php");
$obj= new Gasto();

$idGastos = $_POST['idGastos'];

echo json_encode(Gasto::obtenerGastos($idGastos));

?>

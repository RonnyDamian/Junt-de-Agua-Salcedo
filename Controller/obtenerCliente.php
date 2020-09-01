<?php

require_once("../Model/Cliente.php");
$obj= new Cliente();

$idCliente = $_POST['idCliente'];

echo json_encode(Cliente::obtenerCliente($idCliente));

?>

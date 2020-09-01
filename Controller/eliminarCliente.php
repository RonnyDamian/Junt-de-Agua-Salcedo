<?php

require_once "../Model/Cliente.php";

$idCliente=$_POST['idCliente'];

echo Cliente::eliminarCliente($idCliente);

?>

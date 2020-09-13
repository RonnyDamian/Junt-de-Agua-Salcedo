<?php

require_once("../Model/Cliente.php");
$obj= new Cliente();
 echo json_encode(Cliente::mostrarClientes());




?>

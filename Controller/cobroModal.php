<?php

require_once("../Model/Cobros.php");
$obj = new Cobros();

$idCliente=$_POST['id_cliente'];

echo json_encode(Cobros::cobroModal($idCliente));


?>

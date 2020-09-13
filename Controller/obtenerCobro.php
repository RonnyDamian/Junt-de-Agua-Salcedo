<?php

require_once("../Model/Lote.php");
$obj = new Lote();

$searchParam=$_POST['searchParam'];

    echo json_encode(Lote::obtenerCobro($searchParam));

?>

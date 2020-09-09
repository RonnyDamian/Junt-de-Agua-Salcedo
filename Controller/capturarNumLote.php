<?php

require_once("../Model/Lote.php");
$obj = new Lote();

$idLote=$_POST['idLote'];

echo json_encode(Lote::capturaNumLote($idLote));


?>

<?php

require_once("../Model/Lote.php");
$obj = new Lote();

$idLote=$_POST['idLoteu'];

echo json_encode(Lote::capturaNumLote($idLote));


?>

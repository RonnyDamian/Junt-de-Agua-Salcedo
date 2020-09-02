<?php

require_once "../Model/Lote.php";

$idLote=$_POST['idLote'];

echo Lote::eliminarLote($idLote);

?>

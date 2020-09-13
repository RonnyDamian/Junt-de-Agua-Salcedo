<?php

require_once "../Model/Gasto.php";

$idGastos=$_POST['idGastos'];

echo Gasto::eliminarGastos($idGastos);

?>

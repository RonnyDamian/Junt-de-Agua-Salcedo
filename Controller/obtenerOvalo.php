<?php

require_once("../Model/Ovalo.php");
$obj = new Ovalo();

$idOvalo=$_POST['idOvalo'];

echo json_encode(Ovalo::obtenerOvalo($idOvalo));

?>

<?php

require_once("../Model/HorarioRiego.php");
$obj=new HorarioRiego();

$idHoraRiego = $_POST['idHoraRiego'];

echo json_encode(HorarioRiego::obtenerHoraRiego($idHoraRiego));

?>

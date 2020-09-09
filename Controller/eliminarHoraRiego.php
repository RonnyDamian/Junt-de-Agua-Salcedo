<?php

require_once "../Model/HorarioRiego.php";

$idHoraRiego=$_POST['idHoraRiego'];

echo HorarioRiego::eliminarHoraRiego($idHoraRiego);

?>

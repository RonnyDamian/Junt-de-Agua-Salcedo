<?php

require_once "../Model/Mingas.php";

$idMinga=$_POST['idMinga'];

echo Mingas::eliminarMinga($idMinga);

?>

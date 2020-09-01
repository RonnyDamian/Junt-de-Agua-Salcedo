<?php

require_once "../Model/Ovalo.php";

$idOvalo=$_POST['idOvalo'];

echo Ovalo::eliminarOvalo($idOvalo);

?>

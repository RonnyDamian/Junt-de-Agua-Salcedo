<?php
 require_once ("../Model/HorarioRiego.php");


 $obj = new HorarioRiego();

$horaInicio = floatval($_POST['horaInicio1']);
$horaFin=floatval($_POST['horaFin1']);
$horaInicio2 = floatval($_POST['horaInicio2']);
$horaFin2=floatval($_POST['horaFin2']);
$hora1 = $horaFin-$horaInicio;
$hora2 =$horaFin2-$horaInicio2;
 $data= array(
     "idCliente"=>$_POST['idCliente'],
     "idOvalo"=>$_POST['idOvalo'],
     "idLote"=>$_POST['idLote'],
     "horaInicio1"=>$_POST['horaInicio1'],
     "horaFin1"=>$_POST['horaFin1'],
     "diaRiego1"=>$_POST['diaRiego1'],
     "horaInicio2"=>$_POST['horaInicio2'],
     "horaFin2"=>$_POST['horaFin2'],
     "diaRiego2"=>$_POST['diaRiego2'],
     "horaRiego"=>$hora1
 );


if(($horaInicio>=$horaFin) || ($horaInicio2>=$horaFin2)){
echo 2;
}elseif(($hora1!=$hora2)){
 echo 3;
}
else{
 echo $obj->agregarHoraRiego($data);
}

?>

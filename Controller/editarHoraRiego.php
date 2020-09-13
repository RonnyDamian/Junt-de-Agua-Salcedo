<?php
 require_once ("../Model/HorarioRiego.php");

 $obj = new HorarioRiego();
$horaInicio = floatval($_POST['horaInicio1u']);
$horaFin=floatval($_POST['horaFin1u']);
$horaInicio2 = floatval($_POST['horaInicio2u']);
$horaFin2=floatval($_POST['horaFin2u']);
$hora1 = $horaFin-$horaInicio;
$hora2 =$horaFin2-$horaInicio2;
 $data= array(
     "idCliente"=>$_POST['idClienteu'],
     "idOvalo"=>$_POST['idOvalou'],
     "idLote"=>$_POST['idLoteu'],
     "horaInicio1"=>$_POST['horaInicio1u'],
     "horaFin1"=>$_POST['horaFin1u'],
     "diaRiego1"=>$_POST['diaRiego1u'],
     "horaInicio2"=>$_POST['horaInicio2u'],
     "horaFin2"=>$_POST['horaFin2u'],
     "diaRiego2"=>$_POST['diaRiego2u'],
     "idHoraRiego"=>$_POST['idHoraRiego'],
     "horaRiego"=>$hora1
 );
if(($horaInicio>=$horaFin) || ($horaInicio2>=$horaFin2)){
 echo 2;
}elseif(($hora1!=$hora2)){
 echo 3;
}
else{
 echo $obj->editarHoraRiego($data);
}
?>

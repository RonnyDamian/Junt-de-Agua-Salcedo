<?php
 require_once ("../Model/Lote.php");

 $obj = new Lote();
 $data= array(
     "idCliente"=>$_POST['idCliente'],
     "clave"=>$_POST['clave'],
     "numLote"=>$_POST['numLote'],
     "superficie"=>$_POST['superficie'],
     "idOvalo"=>$_POST['idOvalo']
 );

$result=$obj->valida_clave_numLote_Repetido($data);
if(is_array($result)==true and count($result)==0){
 echo $obj->agregarLote($data);
}else{
 echo 2;
}





?>

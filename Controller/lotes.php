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


 echo  $obj->agregarLote($data);



?>

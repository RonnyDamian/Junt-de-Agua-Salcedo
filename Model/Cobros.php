 <?php
 require_once("../config/Conexion.php");
error_reporting(0);


 class Cobros extends Conexion{


     public static function cobroModal($idCliente){
         //Obtener total de Lotes
         $sql6 = "SELECT l.numLote, l.precio*8 AS tarifa
                 FROM   t_clientes AS c INNER JOIN t_lotes AS l
                 ON     c.idCliente =l.idCliente
                 WHERE  c.idCliente =?;";
         $sql6=Conexion::conectar()->prepare($sql6);
         $sql6->bindValue(1, $idCliente,PDO::PARAM_INT);
         $sql6->execute();
         $query=$sql6->fetchAll(PDO::FETCH_ASSOC);
         $select='<label for="listLotes">Lote(s) a pagar</label>
                 <select class="form-control" name="listLotes" id="listLotes">
                 <option selected disabled>-- Seleccione una opción</option>';
         foreach ($query as $in){
             $select=$select."<option value=".$in['numLote'].">N° lote: ".$in['numLote']." tarifa: $".$in['tarifa']."</option>";
         }
         $select=$select."</select>";


         $sql="SELECT * FROM t_cobros WHERE idCliente=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idCliente, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         $query['select']=$select;
         return $query;
     }

     public function editarCobro($data){

         $total=floatval($data['totalPago']);
         $abono=floatval($data['valorPago']);
         $total-=$abono;
         if($total==0){
             $data['estadoActual']="PAGADO";
         }
         $data['totalPago']=$total;

         $sql="UPDATE t_cobros
              SET 
                  numLote=?,
                  estado=?,
                  total=?                                    
             WHERE 
                  idCobro=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['numLote'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['estadoActual'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['totalPago'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['idCobro'], PDO::PARAM_INT);
         $query=$sql->execute();
         if($query==11){
            session_start();
            $_SESSION['idCliente']= $data['idCliente'];
            $_SESSION['numLote']= $data['numLote'];
            $_SESSION['estadoActual']= $data['estadoActual'];
            $_SESSION['totalPago']=$data['totalPago'];
            $_SESSION['valorPago']=$data['valorPago'];
            $_SESSION['idCobro']=$data['idCobro'];
            header("location:../View/recibo.php");
         }else{
             return $query;
         }

     }
     public static function eliminarCliente($idCliente){
         $sql="DELETE FROM t_clientes WHERE idCliente=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idCliente, PDO::PARAM_INT);
         return $query->execute();
     }
     /* *****WEBSERVICES**********
      * Método para comunicar la app movil con la web
     */

     public static function obtenerClienteMovil(){
         $sql="SELECT * FROM t_clientes";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetch();
         print_r($query);
         return $query;
     }

 }

 ?>
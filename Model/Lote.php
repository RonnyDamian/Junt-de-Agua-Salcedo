 <?php
 require_once("../config/Conexion.php");
 error_reporting(0);


 class Lote extends Conexion{


     public static function valida_Lote_Repetido($data){
         $sql ="SELECT * FROM t_lotes WHERE clave=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$data['clave'],PDO::PARAM_STR);
         $sql->execute();
         $query=$sql->fetchAll(PDO::FETCH_ASSOC);
         return $query;
     }

     public static function agregarLote($data){
         $sql="INSERT INTO t_lotes (clave,numLote,superficie,precio,idCliente,idOvalo)
                      VALUES (?,?,?,?,?,?)";
         $sql=Conexion::conectar()->prepare($sql);
         $sperficie2=$data['superficie'];
         $precio=(floatval($sperficie2)/10000);
         $data1=bcdiv($precio,'1','2');
         $sql->bindValue(1, $data['clave'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['numLote'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['superficie'], PDO::PARAM_STR);
         $sql->bindValue(4, $data1);
         $sql->bindValue(5, $data['idCliente'], PDO::PARAM_INT);
         $sql->bindValue(6, $data['idOvalo'], PDO::PARAM_INT);
         $query=$sql->execute();
        return $query;
     }
     public function mostrarLoteConcat(){
        $sql="SELECT clave FROM t_lotes ";
        $sql=Conexion::conectar()->prepare($sql);
        $sql->execute();
        $query=$sql->fetchAll();
        return $query;
     }
     public function mostrarLote(){
         $sql="SELECT 
                            l.idLote,
                            l.clave,
                            l.numLote,
                            l.superficie,
                            l.precio,
                            l.idCliente,
                            l.idOvalo,
                            c.idCliente,
                            c.nombre,
														c.apellido,
														o.idOvalo,
														o.toma,
														o.derivacion,
														o.canalDer,
														o.subDer
               FROM t_lotes AS l
                            INNER JOIN 
                    t_clientes AS c
                    ON l.idCliente=c.idCliente 
										INNER JOIN  t_ovalos AS o
										ON l.idOvalo=o.idOvalo;
                                         ";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }

     public function mostrarOvaloConcat(){
         $sql="SELECT idOvalo, CONCAT(toma,'-',derivacion,'-',canalDer,'-',subDer) AS numeroOvalo FROM t_ovalos;";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }
     public static function obtenerLote($idOvalo){
         $sql="SELECT * FROM t_lotes WHERE idLote=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idOvalo, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }

     public function editarLote($data){
         $sql="UPDATE t_lotes
              SET clave=?,
                  numLote=?,
                  superficie=?,
                  precio=?,
                  idCliente=?,                  
                  idOvalo=?
             WHERE 
                  idLote=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sperficie2=$data['superficie'];
         $precio=(floatval($sperficie2)/10000);
         $data1=bcdiv($precio,'1','2');
         $sql->bindValue(1, $data['clave'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['numLote'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['superficie'], PDO::PARAM_STR);
         $sql->bindValue(4, $data1);
         $sql->bindValue(5, $data['idCliente'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['idOvalo'], PDO::PARAM_INT);
         $sql->bindValue(7, $data['idLote'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarLote($idLote){
         $sql="DELETE FROM t_lotes WHERE idLote=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idLote, PDO::PARAM_INT);
         return $query->execute();
     }



 }

 ?>
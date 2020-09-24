 <?php
 require_once("../config/Conexion.php");
 error_reporting(0);



 class Lote extends Conexion{


     public static function valida_clave_numLote_Repetido($data){
         $sql ="SELECT * FROM t_lotes WHERE clave=? OR numLote=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$data['clave'],PDO::PARAM_STR);
         $sql->bindValue(2,$data['numLote'],PDO::PARAM_STR);
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
        $sql="SELECT idLote, clave FROM t_lotes ";
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

    public static function capturaNumLote($idLote){

         $sql ="SELECT numLote FROM t_lotes WHERE idLote=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idLote, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         $data=$query[0];
         echo $data;
         die();
    }
    public static function obtenerCobro($searchParam){
         /*CALCULO VALOR A PAGAR POR LA HORA DE RIEGO*/


         $sql2 = "				SELECT
								c.cedula,
								c.idCliente,
								h.idCliente,
								h.horaRiego, SUM(h.horaRiego)*0.5	as valor_riego
			FROM t_clientes as c inner join t_horariego as h
			ON c.idCliente=h.idCliente
			WHERE c.cedula=?";

        $sql2=Conexion::conectar()->prepare($sql2);
        $sql2->bindValue(1, $searchParam,PDO::PARAM_INT);
        $sql2->execute();
        $query=$sql2->fetch();
        $valorRiego=$query['valor_riego'];

        /*CALCULA VALOR A PAGAR POR SESIÓN*/

        $sql4="SELECT c.idCliente,
			    c.cedula,	
			    CONCAT(nombre,' ',apellido) AS NOMBRE_COMPLETO,
			    COUNT(s.estado)*5 AS VALOR_SESION,
			    s.idCliente,
			    s.fecha,
			    s.idSesion
                FROM t_clientes AS c INNER JOIN t_sesiones AS s
                ON c.idCliente=s.idCliente 
                WHERE c.cedula=? AND s.estado='NO';";
                $sql4=Conexion::conectar()->prepare($sql4);
                $sql4->bindValue(1, $searchParam,PDO::PARAM_INT);
                $sql4->execute();
                $query=$sql4->fetch();
                $valorSesion=$query['VALOR_SESION'];

        /*CALCULO VALOR A PAGAR POR LA MINGA*/

        $sql3="SELECT c.idCliente,
                      c.cedula, 
                      CONCAT(nombre,'',apellido) AS NOMBRE_COMPLETO,
                      COUNT(m.estado)*10 AS VALOR_MINGA,
                      m.idCliente,
                      m.fecha,
                      m.idMinga
                     FROM t_clientes AS c INNER JOIN t_mingas AS m
                     ON c.idCliente=m.idCliente
                     WHERE c.cedula=? AND m.estado='NO';";
                    $sql3=Conexion::conectar()->prepare($sql3);
                    $sql3->bindValue(1, $searchParam,PDO::PARAM_INT);
                    $sql3->execute();
                    $query=$sql3->fetch();
                    $valorMinga=$query['VALOR_MINGA'];


        $sql="SELECT  c.cedula,
				c.nombre,
				c.apellido,
				c.idCliente,
				l.idCliente,
				l.precio,
				SUM(precio)*8 AS TARIFA
				FROM t_clientes AS c INNER JOIN t_lotes AS l
  			ON c.idCliente=l.idCliente
				WHERE c.cedula=?;";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $searchParam,PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         $query['valor_riego']=$valorRiego;
         $query[7]=$valorRiego;
         $query['valor_sesion']=$valorSesion;
         $query[8]=$valorSesion;
         $query['valor_minga']=$valorMinga;
         $query[9]=$valorMinga;
        $fecha=date('Y');
        if($fecha>2020){
           $valorMora=10;
        }elseif($fecha==2020){
            $valorMora=0;
        }else{
            $valorMora= -1;
        }
        $query['valor_mora']=$valorMora;
        $query[10]=$valorMora;
        $total=$query['TARIFA']+$query['valor_riego']+$query['valor_sesion']+$query['valor_minga']+$query['valor_mora'];
        $query['valor_total']=$total;
        $query[11]=$total;


        $cliente=$query['nombre'] ." ".$query['apellido'];
        $tarifaCobro=$query['TARIFA'];
        $valor_riego=$query['valor_riego'];
        $multaSesion=$query['valor_sesion'];
        $multaMinga=$query['valor_minga'];
        $valor_mora=$query['valor_mora'];
        $valor_total=$query['valor_total'];
        $id_cliente=$query['idCliente'];


        $sqlCC="SELECT * FROM t_cobros WHERE idCliente =?";
        $sqlCC=Conexion::conectar()->prepare($sqlCC);
        $sqlCC->bindValue(1,$id_cliente,PDO::PARAM_INT);
        $sqlCC->execute();
        $queryCC= $sqlCC->fetch();
        if(!(is_array($queryCC)==true and count($queryCC)>1)){
            $sqlCobro="INSERT INTO t_cobros VALUES (null,?,?,?,?,?,?,?,?,?,now())";
            $sqlCobro =Conexion::conectar()->prepare($sqlCobro);
            $sqlCobro->bindValue(1,$cliente,PDO::PARAM_STR);
            $sqlCobro->bindValue(2,$tarifaCobro ,PDO::PARAM_STR);
            $sqlCobro->bindValue(3,$valor_riego, PDO::PARAM_STR);
            $sqlCobro->bindValue(4,$multaSesion, PDO::PARAM_STR);
            $sqlCobro->bindValue(5,$multaMinga, PDO::PARAM_STR);
            $sqlCobro->bindValue( 6,$valor_mora, PDO::PARAM_STR);
            $sqlCobro->bindValue( 7,"PENDIENTE", PDO::PARAM_STR);
            $sqlCobro->bindValue( 8,$valor_total, PDO::PARAM_STR);
            $sqlCobro->bindValue( 9,$id_cliente, PDO::PARAM_INT);
            $queryCobros=$sqlCobro->execute();

        }
        return $query;
    }


 }

 ?>
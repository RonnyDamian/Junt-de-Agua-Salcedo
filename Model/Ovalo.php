 <?php

 require_once("../config/Conexion.php");


 class Ovalo extends Conexion{


     /*public static function validaEmail_Usuario($data){
         $sql ="SELECT * FROM t_usuarios WHERE email=? or usuario=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$data['email'],PDO::PARAM_STR);
         $sql->bindValue(2,$data['usuario'],PDO::PARAM_STR);
         $sql->execute();
         $query=$sql->fetchAll(PDO::FETCH_ASSOC);
         return $query;
     }*/

     public static function agregarOvalo($data){
         $sql="INSERT INTO t_ovalos (toma,derivacion,canalDer,subDer,dotacion,superficie,caudal)
                      VALUES (?,?,?,?,?,?,?)";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['toma'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['derivacion'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['canalDer'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['subDer'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['dotacion'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['superficie'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['caudal'], PDO::PARAM_STR);
         $query=$sql->execute();
        return $query;
     }
     public function mostrarOvalo(){
         $sql="SELECT * FROM t_ovalos";
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
     public static function obtenerOvalo($idOvalo){
         $sql="SELECT * FROM t_ovalos WHERE idOvalo=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idOvalo, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }

     public function editarOvalo($data){
         $sql="UPDATE t_ovalos
              SET toma=?,
                  derivacion=?,
                  canalDer=?,
                  subDer=?,
                  dotacion=?,
                  superficie=?,
                  caudal=?
             WHERE 
                  idOvalo=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['toma'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['derivacion'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['canalDer'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['subDer'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['dotacion'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['superficie'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['caudal'], PDO::PARAM_STR);
         $sql->bindValue(8, $data['idOvalo'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarOvalo($idOvalo){
         $sql="DELETE FROM t_ovalos WHERE idOvalo=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idOvalo, PDO::PARAM_INT);
         return $query->execute();
     }



 }

 ?>
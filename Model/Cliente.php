 <?php
 require_once("../config/Conexion.php");
error_reporting(0);


 class Cliente extends Conexion{

     public static function validaEmail($data){
         $sql ="SELECT * FROM t_clientes WHERE email=? ";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$data['email'],PDO::PARAM_STR);
         $sql->execute();
         $query=$sql->fetchAll(PDO::FETCH_ASSOC);
         return $query;
     }


     public static function agregarCliente($data){
         $sql="INSERT INTO t_clientes (nombre,apellido,cedula,sexo,direccion,celular,email)
                      VALUES (?,?,?,?,?,?,?)";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['nombre'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['apellido'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['cedula'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['sexo'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['direccion'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['celular'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['email'], PDO::PARAM_STR);
         $query=$sql->execute();
         return $query;
     }
     public function mostrarClientes(){
         $sql="SELECT * FROM t_clientes";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }

     public function mostrarClientesConcat(){
         $sql="SELECT CONCAT(nombre,' ',apellido) AS nombreApellido FROM t_clientes";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }
     public static function obtenerCliente($idCliente){
         $sql="SELECT * FROM t_clientes WHERE idCliente=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idCliente, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
         return $query;
     }

     public function editarCliente($data){
         $sql="UPDATE t_clientes
              SET nombre=?,
                  apellido=?,
                  cedula=?,
                  sexo=?,                  
                  direccion=?,
                  celular=?,
                  email=?
             WHERE 
                  idCliente=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['nombre'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['apellido'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['cedula'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['sexo'], PDO::PARAM_STR);
         $sql->bindValue(6, $data['direccion'], PDO::PARAM_STR);
         $sql->bindValue(5, $data['celular'], PDO::PARAM_STR);
         $sql->bindValue(7, $data['email'], PDO::PARAM_STR);
         $sql->bindValue(8, $data['idCliente'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarCliente($idCliente){
         $sql="DELETE FROM t_clientes WHERE idCliente=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idCliente, PDO::PARAM_INT);
         return $query->execute();
     }


 }

 ?>
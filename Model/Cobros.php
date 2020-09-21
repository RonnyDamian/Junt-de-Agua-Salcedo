 <?php
 require_once("../config/Conexion.php");
error_reporting(0);


 class Cobros extends Conexion{

     public static function valida_Email_Cedula($data){
         $sql ="SELECT * FROM t_clientes WHERE email=? OR cedula=? ";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$data['email'],PDO::PARAM_STR);
         $sql->bindValue(2,$data['cedula'],PDO::PARAM_STR);
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
         $sql="SELECT idCliente, CONCAT(nombre,' ',apellido) AS nombreApellido, idCLiente FROM t_clientes";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->execute();
         $query=$sql->fetchAll();
         return $query;
     }
     public static function cobroModal($idCliente){
         $sql="SELECT * FROM t_cobros WHERE idCliente=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1,$idCliente, PDO::PARAM_INT);
         $sql->execute();
         $query=$sql->fetch();
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
                  estado=?,
                  total=?,
                  lote=?                  
             WHERE 
                  idCobro=?";
         $sql=Conexion::conectar()->prepare($sql);
         $sql->bindValue(1, $data['estadoActual'], PDO::PARAM_STR);
         $sql->bindValue(2, $data['totalPago'], PDO::PARAM_STR);
         $sql->bindValue(3, $data['lotePago'], PDO::PARAM_STR);
         $sql->bindValue(4, $data['idCobro'], PDO::PARAM_INT);
         $query=$sql->execute();
         return $query;
     }
     public static function eliminarCliente($idCliente){
         $sql="DELETE FROM t_clientes WHERE idCliente=?";
         $query=Conexion::conectar()->prepare($sql);
         $query->bindValue(1,$idCliente, PDO::PARAM_INT);
         return $query->execute();
     }
     public static function validaCedula($strCedula)
     {
        //aqui explico la logica de la validacion de una cedula de ecuador
        //El decimo Digito es un resultante de un calculo
        //Se trabaja con los 9 digitos de la cedula
        //Cada digito de posicion impar se lo duplica, si este es mayor que 9 se resta 9
        //Se suman todos los resultados de posicion impar
        //Ahora se suman todos los digitos de posicion par
        //se suman los dos resultados
        //se resta de la decena inmediata superior
        //este es el decimo digito
        //si la suma nos resulta 10, el decimo digito es cero

         if(is_null($strCedula) || empty($strCedula)){//compruebo si que el numero enviado es vacio o null
             echo "Por Favor Ingrese la Cedula";
         }else{//caso contrario sigo el proceso
             if(is_numeric($strCedula)){
                 $total_caracteres=strlen($strCedula);// se suma el total de caracteres
                 if($total_caracteres==10){//compruebo que tenga 10 digitos la cedula
                     $nro_region=substr($strCedula, 0,2);//extraigo los dos primeros caracteres de izq a der
                     if($nro_region>=1 && $nro_region<=24){// compruebo a que region pertenece esta cedula//
                         $ult_digito=substr($strCedula, -1,1);//extraigo el ultimo digito de la cedula
//extraigo los valores pares//
                         $valor2=substr($strCedula, 1, 1);
                         $valor4=substr($strCedula, 3, 1);
                         $valor6=substr($strCedula, 5, 1);
                         $valor8=substr($strCedula, 7, 1);
                         $suma_pares=($valor2 + $valor4 + $valor6 + $valor8);
//extraigo los valores impares//
                         $valor1=substr($strCedula, 0, 1);
                         $valor1=($valor1 * 2);
                         if($valor1>9){ $valor1=($valor1 - 9); }else{ }
                         $valor3=substr($strCedula, 2, 1);
                         $valor3=($valor3 * 2);
                         if($valor3>9){ $valor3=($valor3 - 9); }else{ }
                         $valor5=substr($strCedula, 4, 1);
                         $valor5=($valor5 * 2);
                         if($valor5>9){ $valor5=($valor5 - 9); }else{ }
                         $valor7=substr($strCedula, 6, 1);
                         $valor7=($valor7 * 2);
                         if($valor7>9){ $valor7=($valor7 - 9); }else{ }
                         $valor9=substr($strCedula, 8, 1);
                         $valor9=($valor9 * 2);
                         if($valor9>9){ $valor9=($valor9 - 9); }else{ }

                         $suma_impares=($valor1 + $valor3 + $valor5 + $valor7 + $valor9);
                         $suma=($suma_pares + $suma_impares);
                         $dis=substr($suma, 0,1);//extraigo el primer numero de la suma
                         $dis=(($dis + 1)* 10);//luego ese numero lo multiplico x 10, consiguiendo asi la decena inmediata superior
                         $digito=($dis - $suma);
                         if($digito==10){ $digito='0'; }else{ }//si la suma nos resulta 10, el decimo digito es cero
                         if ($digito==$ult_digito){//comparo los digitos final y ultimo
                             return  "CedulaCorrecta";
                         }else{
                             return "CedulaIncorrecta";
                         }
                     }else{
                         echo "Este Nro de Cedula no corresponde a ninguna provincia del ecuador";
                     }


                 }else{
                     echo "Es un Numero y tiene solo".$total_caracteres;
                 }
             }else{
                 echo "Esta Cedula no corresponde a un Nro de Cedula de Ecuador";
             }
         }
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
<?php
session_start();

include_once '../config/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

//recepción de datos enviados mediante POST desde ajax
$usuario  = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';


$consulta = "SELECT * FROM t_usuarios WHERE usuario='$usuario' AND password='$password' ";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
 $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
 $_SESSION["s_usuario"] = $usuario;

}else{
 $_SESSION["s_usuario"] = null;
 $data=null;
}

print json_encode($data);
$conexion=null;

//usuarios de pruebaen la base de datos
//usuario:admin pass:12345
//usuario:demo pass:demo
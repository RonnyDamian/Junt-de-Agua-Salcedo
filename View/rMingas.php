<title>Reporte de Cobros</title>
<?php  require_once("header.php")?>

<!--Inicio página Clientes -->

<!--Inicia contenido de la página  registraUsuarios-->
<!-- Begin Page Content -->
<div class="container-fluid ">

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12  ">
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h3 class="m-0 font-weight-bold text-primary ">Reporte de Sesiones</h3>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                            <!--Inicio formulario registro usuarios -->
                            <div class="row mt-2 mb-4">
                                <div class="col-lg-4">
                                    <label for="nombre"><strong>Parametro de busca</strong></label>
                                    <select name="searchParam" id="searchParam" class="form-control">
                                         <option value="0" selected="selected">Todos los registros</option>
                                         <option value="1">Asistidos</option>
s                                        <option value="2">Sin Asistir</option>
                                    </select>
                                </div>
                                <div class="col-lg4">
                                    <br>
                                    <button type=submit class="btn btn-success py-sm-2 mt-2 float left form-control " name="enviar"> <i class="fa fa-search"> Buscar</i></button>
                                </div>
                            </div>
                    </form>
                    <hr class="sidebar-divider">
                    <div id="contPDF">

                         <h2 class="text-center"><u>Junta de Agua Pilalo - Reporte de Sesiones</u></h2>
                        <img  src="../public/img/juntagua.jpeg" alt=""  width="600" height="150" style="margin-left: 20%;border-radius: 10%;margin-bottom: 15px;"> <br>

                        <label for="fecha"><strong>Fecha:</strong></label>
                        <input type="text" class="border-0 mt-5" id="fecha" style="width: 320px" readonly>
                        <div class="row">

                            <!-- **********   Inicio Tabla Sesiones   **********-->

                            <div class="col">
                                <?php
                                error_reporting(0);
                                $rRegistros=0 ;
                                $total=0;
                                $si=0;
                                $no=0;
                                if(isset($_POST['enviar'])){
                                    require_once ("../config/Conexion.php");
                                    $parametro = $_POST['searchParam'];
                                    if($parametro==0){
                                        /* ******Consulta sesión sin parametros******* */
                                        $sql="SELECT  
                                            CONCAT(c.nombre,' ', c.apellido) AS cliente,
                                            s.estado,
                                            s.fecha				
                                           FROM T_SESIONES  AS S INNER JOIN T_CLIENTES AS C
                                           ON S.idCliente=c.idCliente";
                                        $sql=Conexion::conectar()->prepare($sql);
                                        $sql->execute();
                                        $response=$sql->fetchAll();

                                        $tabla='<br> <h2>Resumen Lote</h2>  <table class="table-bordered table mt-3 ">
                                        <thead class="bg-dark text-white text-center">
                                    <tr>
                                <th>Cliente</th>
                                <th>Asistencia</th>
                                <th>Fecha</th>                                
                    </tr>
                    </thead>
                              <tbody>';
                                        $datosTabla="";

                                        foreach ($response as $key => $value ){

                                            if($value['estado']=="SI"){
                                                $si++;
                                            }else{
                                                $no++;
                                            }
                                            $datosTabla=$datosTabla.'
                                      
                                <tr class="text-center">
                                    <td>'.$value['cliente'].'</td>
                                    <td >'.$value['estado'].'</td>
                                    <td>'.$value['fecha'].'</td>                                                                                                                                                                                                                                                 
                                </tr>';
                                            $rRegistros++;
                                        }

                                        echo $tabla.$datosTabla.'
                                </tbody>
                                <tfoot class="bg-dark text-white">
                                   <td   class="text-center"><strong>TOTAL REGISTROS '.$rRegistros.' </strong ></td>
                                   <td class="text-center"><strong >TOTAL ASISTIDOS '.$si.'</strong></td>
                                   <td class="text-center"><strong >TOTAL AUSENTES '.$no.'</strong></td>
                                </tfoot>
                                </table>';
                                        $rRegistros=0;
                                        $si=0;
                                        $no=0;
                                    }elseif ($parametro==1){

                                        /* ********** Consulta sesión con parametro SI ********** */

                                        $sql="SELECT  
                                            CONCAT(c.nombre,' ', c.apellido) AS cliente,
                                            s.estado,
                                            s.fecha				
                                           FROM T_SESIONES  AS S INNER JOIN T_CLIENTES AS C
                                           ON S.idCliente=c.idCliente
                                           WHERE estado='SI'";
                                        $sql=Conexion::conectar()->prepare($sql);
                                        $sql->execute();
                                        $response=$sql->fetchAll();

                                        $tabla='<br> <h2>Resumen Sesiones asistidas</h2>  <table class="table-bordered table mt-3 ">
                                        <thead class="bg-dark text-white text-center">
                                    <tr>
                                <th>Cliente</th>
                                <th>Asistencia</th>
                                <th>Fecha</th>                                
                    </tr>
                    </thead>
                              <tbody>';
                                        $datosTabla="";
                                        $rRegistros=0 ;
                                        foreach ($response as $key => $value ){
                                            $datosTabla=$datosTabla.'
                                      
                                <tr class="text-center">
                                    <td>'.$value['cliente'].'</td>
                                    <td >'.$value['estado'].'</td>
                                    <td>'.$value['fecha'].'</td>                                                                                                                                                                                                                                                 
                                </tr>';
                                            $rRegistros++;
                                        }

                                        echo $tabla.$datosTabla.'
                                </tbody>
                                <tfoot class="bg-dark text-white">
                                   <td colspan="3" class="text-center"><strong>TOTAL REGISTROS '.$rRegistros.' </strong ></td>                                   
                                </tfoot>
                                </table>';
                                    }elseif ($parametro==2){

                                        /* ********** Consulta sesión con parametro SI ********** */

                                        $sql="SELECT  
                                            CONCAT(c.nombre,' ', c.apellido) AS cliente,
                                            s.estado,
                                            s.fecha				
                                           FROM T_SESIONES  AS S INNER JOIN T_CLIENTES AS C
                                           ON S.idCliente=c.idCliente
                                           WHERE estado='NO'";
                                        $sql=Conexion::conectar()->prepare($sql);
                                        $sql->execute();
                                        $response=$sql->fetchAll();

                                        $tabla='<br> <h2>Resumen sesiones no asistidas</h2>  <table class="table-bordered table mt-3 ">
                                        <thead class="bg-dark text-white text-center">
                                    <tr>
                                <th>Cliente</th>
                                <th>Asistencia</th>
                                <th>Fecha</th>                                
                    </tr>
                    </thead>
                              <tbody>';
                                        $datosTabla="";
                                        foreach ($response as $key => $value ){
                                            $total+=5;
                                            $datosTabla=$datosTabla.'
                                      
                                <tr class="text-center">
                                    <td>'.$value['cliente'].'</td>
                                    <td >'.$value['estado'].'</td>
                                    <td>'.$value['fecha'].'</td>                                                                                                                                                                                                                                                 
                                </tr>';
                                            $rRegistros++;
                                        }
                                        echo $tabla.$datosTabla.'
                                </tbody>
                                <tfoot class="bg-dark text-white">
                                   <td colspan="2" class="text-center"><strong>TOTAL REGISTROS '.$rRegistros.' </strong ></td>
                                   <td colspan="2" class="text-center"><strong>TOTAL A PAGAR $'.$total.' DOLARES'.' </strong ></td>                                   
                                </tfoot>
                                </table>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="form-row text-center">
                        <div class="col-lg-12">
                            <a href="#" class=" btn btn-danger mb-4" id="report"><i class="fa fa-print">Generar Reporte</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<!--Fin página Clientes -->s


<?php require_once ("footer.php")?>
<script>
    $(document).ready(function(){

        let dias=new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
        let meses=new Array('Enero','Febrero','Marzos','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
        let now=new Date();
        let day = dias[now.getDay()]+ ' '+ now.getDate();
        let month=meses[now.getMonth()];
        let today= day +' de ' + month +' de ' + now.getFullYear();
        $("#fecha").val(today);
    });

</script>
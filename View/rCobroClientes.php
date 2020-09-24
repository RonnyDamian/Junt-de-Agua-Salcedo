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
                    <h3 class="m-0 font-weight-bold text-primary ">Reporte de Cobros</h3>
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
                                    <label for="nombre"><strong>Cédula</strong></label>
                                    <input type="search" class="form-control" name="searchParam" id="searchParam" minlength="10" maxlength="10" required="required" >

                                </div>
                                <div class="col-lg4">
                                    <br>
                                    <button type=submit class="btn btn-success py-sm-2 mt-2 float left form-control " name="enviar"> <i class="fa fa-search"> Buscar</i></button>
                                </div>
                            </div>
                    </form>
                    <hr class="sidebar-divider">
                    <div id="contPDF">


                            <!-- **********   Inicio Tabla Lotes   **********-->

                            <div class="col-lg-12">
                                <?php
                                error_reporting(0);
                                $total=0;
                                $totalH=0;
                                $totalSesion=0;
                                $totalMinga=0;
                                if(isset($_POST['enviar'])){
                                    require_once ("../config/Conexion.php");
                                    $cedula = $_POST['searchParam'];


                                    $sql="SELECT  DISTINCT(h.horaRiego),
                                c.idCliente,
                                CONCAT(c.nombre,' ',c.apellido) AS Cliente  ,
                                c.cedula,
                                l.idCliente,
                                l.numLote,
                                l.precio*8 AS Tarifa,				
                                h.idCliente				
                                FROM 
                                 t_clientes AS c INNER JOIN t_lotes AS l
                                     ON c.idCliente=l.idCliente
                                  INNER JOIN t_horaRiego AS h
                                 ON c.idCliente=h.idCliente AND c.idCliente =h.idCliente
                            WHERE
                                  c.cedula=?";
                                    $sql=Conexion::conectar()->prepare($sql);
                                    $sql->bindValue(1,$cedula,PDO::PARAM_STR);
                                    $sql->execute();
                                    $response=$sql->fetchAll();
                                    $cliente=$response['Cliente'];

                                    echo '<table class="table-bordered table-responsive-lg table table-success">
                            <tr>
                                <th colspan="5" class="text-center  " style="font-size: 25px;"><strong>Junta de Agua Pilalo</strong></th>
                            </tr>
                            <tr class="">
                                <th >Fecha:</th>
                                <td class=""><input type="text" class="border-0 " id="fecha" style="width: 320px;color:#858796;background-color: #bff0de;" readonly></td>
                                <th >Ciudad</th>
                                <td class="col-sm-3">Salcedo, Cotopaxi, Ecuador</td>
                                <td rowspan="2"><img src="../public/img/juntagua.jpeg" alt="Imagen de prueba" width="100" height="100"></td>

                            </tr>
                            <tr class="col-lg-4">
                                <th >Cliente</th>
                                <td>'.$response[2][2].'</td>
                                <th >Reporte</th>
                                <td>Cobros</td>
                            </tr>

                        </table>';
                                    $tabla='<br> <h2>Resumen Lote</h2>  <table class="table-bordered table mt-3 ">
                            <thead class="bg-success text-white text-center">
                    <tr>
                                <th>Cliente</th>
                                <th>N° de Lote</th>
                                <th>Tarifa</th>
                                <th>Hora de Riego</th>
                    </tr>
                    </thead>
                              <tbody>';
                                    $datosTabla="";

                                    foreach ($response as $key => $value ){
                                        $total+=$value['Tarifa'];
                                        $totalH+=$value['horaRiego']*0.5;
                                        $datosTabla=$datosTabla.'
  
                                <tr class="text-center">
                                    <td>'.$value['Cliente'].'</td>
                                    <td >'.$value['numLote'].'</td>
                                    <td>'.$value['Tarifa'].'</td>
                                    <td>'.$value['horaRiego'].' horas'.'</td>                                                                                                                                                                                                             
                                </tr>';
                                    }
                                    echo $tabla.$datosTabla.'
                                </tbody>
                                <tfoot class="bg-success text-white">
                                   <td colspan=3  class="text-center"><strong>TOTAL PAGO LOTES $'.$total.' </strong ></td>
                                   <td class="text-center"><strong >TOTAL PAGO RIEGO $'.$totalH.'</strong></td>
                                </tfoot>
                                </table>';
                                }
                                ?>
                            </div>


                            <!--**********  Inicio tabla sesiones   **********-->
                            <div class="col">
                                <?php
                                if(isset($_POST['enviar'])){
                                    require_once ("../config/Conexion.php");


                                    $sql2="SELECT  
                                CONCAT(c.nombre,' ',c.apellido) AS Cliente,
                                c.idCliente,
                                s.idCliente,    
                                s.estado as Asistencia,
                                s.fecha
                                FROM t_sesiones AS s INNER JOIN t_clientes AS c
                                ON  c.idCliente = s.idCliente
                                WHERE c.cedula=? AND s.estado='NO'";
                                    $sql2=Conexion::conectar()->prepare($sql2);
                                    $sql2->bindValue(1,$cedula,PDO::PARAM_STR);
                                    $sql2->execute();
                                    $response2=$sql2->fetchAll();
                                    $tabla='<br> <h2>Resumen Sesiones</h2>  <table class="table-bordered table mt-3 ">
                            <thead class="bg-warning text-white text-center">
                    <tr>
                                <th>Cliente</th>
                                <th>Asistencia</th>
                                <th>Tarifa</th>
                                <th>Fecha</th>                                
                    </tr>
                    </thead>
                              <tbody>';
                                    $datosTabla="";

                                    foreach ($response2 as $key => $value2 ){
                                        $totalSesion+=5.00;
                                        $datosTabla=$datosTabla.'
                                     
                                <tr class="text-center">
                                    <td>'.$value2['Cliente'].'</td>
                                    <td >'.$value2['Asistencia'].'</td>
                                    <td>5.00</td>
                                    <td>'.$value2['fecha'].'</td>                                                                                                                                                                                                             
                                </tr>';
                                    }
                                    echo $tabla.$datosTabla.'
                                </tbody>
                                <tfoot class="bg-warning text-white">
                                   <td colspan=4  class="text-center"><strong>TOTAL PAGO POR INASISTENCIA EN LAS SESIONES: $'.$totalSesion.' </strong ></td>                                   
                                </tfoot>
                                </table>';
                                }
                                ?>
                            </div>
                        </div>

                        <!--**********   Inicio Tabla Mingas   **********-->
                       <div class="row">
                        <div class="col-lg-12">
                        <?php
                        if(isset($_POST['enviar'])){
                            require_once ("../config/Conexion.php");


                            $sql3="SELECT  
                                CONCAT(c.nombre,' ',c.apellido) AS Cliente,
                                c.idCliente,
                                m.idCliente,
                                m.estado as Asistencia,
                                m.fecha
                                FROM t_mingas AS m INNER JOIN t_clientes AS c
                                ON  c.idCliente = m.idCliente
                                WHERE c.cedula=? AND m.estado='NO'";
                            $sql3=Conexion::conectar()->prepare($sql3);
                            $sql3->bindValue(1,$cedula,PDO::PARAM_STR);
                            $sql3->execute();
                            $response3=$sql3->fetchAll();
                            $tabla='<br> <h2>Resumen Mingas</h2>  <table class="table-bordered table mt-3 ">
                            <thead class="bg-info text-white text-center">
                    <tr>
                                <th>Cliente</th>
                                <th>Asistencia</th>
                                <th>Tarifa</th>
                                <th>Fecha</th>                                
                    </tr>
                    </thead>
                              <tbody>';
                            $datosTabla="";

                            foreach ($response3 as $key => $value3 ){
                                $totalMinga+=10.00;
                                $datosTabla=$datosTabla.'
                                     
                                <tr class="text-center">
                                    <td>'.$value3['Cliente'].'</td>
                                    <td >'.$value3['Asistencia'].'</td>
                                    <td>10.00</td>
                                    <td>'.$value3['fecha'].'</td>                                                                                                                                                                                                             
                                </tr>';
                            }
                            echo $tabla.$datosTabla.'
                                </tbody>
                                <tfoot class="bg-info text-white">
                                   <td colspan=4  class="text-center"><strong>TOTAL PAGO POR INASISTENCIA EN LAS MINGAS $'.$totalMinga.' </strong ></td>                                   
                                </tfoot>
                                </table>';
                        }
                        ?>
                           </div>
                            <div class="col">
                        <!--*********  Resume ntabla cobros *********-->
                        <?php
                        if(isset($_POST['enviar'])){
                            require_once ("../config/Conexion.php");

                            $sqlCo="SELECT 
                                     c.idCliente,	    
                                     co.cliente,
                                     co.numLote,
                                     co.total,
                                     co.estado
                                   FROM t_clientes AS c INNER JOIN t_cobros AS co
                                   ON c.idCliente=co.idCliente
                                   WHERE c.cedula=?";
                            $sqlCo=Conexion::conectar()->prepare($sqlCo);
                            $sqlCo->bindValue(1,$cedula,PDO::PARAM_STR);
                            $sqlCo->execute();
                            $responseCo=$sqlCo->fetchAll();
                            $tabla='<br> <h2>Resumen Pagos</h2>  <table class="table-bordered table mt-3 ">
                            <thead class="bg-dark text-white text-center">
                    <tr>
                                <th>Cliente</th>
                                <th>Lote(s) Pagado(s)</th>
                                <th>Deuda actual</th>
                                <th>Estado Deuda</th>                                
                    </tr>
                    </thead>
                              <tbody>';
                            $datosTabla="";

                            foreach ($responseCo as $key => $valueCo ){
                                    $totalCobro=$valueCo['total'];
                                $datosTabla=$datosTabla.'
                                     
                                <tr class="text-center">
                                    <td>'.$valueCo['cliente'].'</td>
                                    <td >'.$valueCo['numLote'].'</td>
                                    <td >'.$valueCo['total'].'</td>
                                    <td>'.$valueCo['estado'].'</td>                                                                                                                                                                                                             
                                </tr>';
                            }
                            echo $tabla.$datosTabla.'
                                </tbody>
                                <tfoot class="bg-dark text-white">
                                   <td colspan=4  class="text-center"><strong>SITUACIÓN ACTUAL DE DEUDA  $'.$totalCobro.' </strong ></td>                                   
                                </tfoot>
                                </table>';
                        }
                        ?>
                       </div>
                       </div>
                    </div>
                    <div class="form-row text-center">
                        <div class="col-lg-12 mb-4">
                            <a href="#" class=" btn btn-danger" id="report"><i class="fa fa-print">Generar Reporte</i></a>
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
        let meses=new let meses=new Array('Enero','Febrero','Marzos','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
        let now=new Date();
        let day = dias[now.getDay()]+ ' '+ now.getDate();
        let month=meses[now.getMonth()];
        let today= day +' de ' + month +' de ' + now.getFullYear();
        $("#fecha").val(today);
    });

</script>
<?php
/*Llamado del archivo header
 *contenedor del menu
*/
require_once("header.php");
?>

    <style>
        @media  (max-width: 1075px){
            img{
                  width:  250px;
                height: 150px;
                margin:auto;
            }
        }
        @media  (max-width: 884px){
            img{
                width:  200px;
                height: 100px;
                margin:auto;
            }
        }
        @media  (max-width: 768px){
            img{
                width:  400px;
                height: 200px;
                margin:auto;
            }
        }
        @media  (max-width: 590px){
            img{
                width:  300px;
                height: 150px;
                margin:auto;
            }
        }
        @media  (max-width: 488px){
            img{
                width:  150px;
                height: 90px;
                margin:auto;
            }
        }
    </style>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Página Principal</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><strong>San Andres de Pilalo</strong></h4></div>
                                <div class="col-auto form-row">
                                    <img src="../public/img/juntagua.jpeg" alt="Junta de Agua Pilalo" width="450" height="200" class="mt-3">
                                </div>
                                <p class="text-justify mt-3 mb-3">El Barrio San Andrés de Pílalo perteneciente
                                    a la parroquia rural Cusubamba del Cantón
                                    Salcedo, se encuentra ubicado en uno de los
                                    pliegues de la Cordillera Occidental Andina
                                    con un clima andino de 14°C en promedio, ap
                                    roximadamente cuenta con 400 moradores en el
                                    sector.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><strong>Junta de Agua Pilalo</strong></h4></div>
                                <div class="col-auto form-row">
                                    <img src="../public/img/canal.jpeg" alt="Junta de Agua Pilalo" width="450" height="200" class="mt-3">
                                </div>
                                <p class="text-justify mt-3 mb-3">
                                    San Andrés de Pilaló fue fundada el 27 de noviembre
                                    de 1862, para dar acogida a una gran cantidad de per
                                    sonas emprendedoras y comerciantes de productos agrí
                                    colas, se caracteriza por el cultivo de alfalfa, maíz,
                                    cebolla, papas entre otros, el producto predominante e
                                    s el tomate de riñón, los productos se expenden en los
                                    mercados mayoristas de las provincias de Cotopaxi y Tun
                                    gurahua generándoles así un ingreso económico de 500 dó
                                    lares semanalmente.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->



<?php
/*Llamado del archivo footer
 *contenedor del pie de pagi
 * y modal cierre de sesión
 *  */
require_once("footer.php");
?>
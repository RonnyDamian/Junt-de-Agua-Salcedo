<?php  require_once ("header.php")?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Parametros</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead class="bg-primary text-center" style="color:#ffffff">
                    <tr>
                      <th>Tarifa</th>
                      <th>Valor Riego</th>
                      <th>Multa Sesión</th>
                      <th>Multa Minga</th>
                      <th>Valor Mora</th>
                      <th>Edtar Valores</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <th>8.00</th>
                      <th>0.50</th>
                      <th>5.00</th>
                      <th>10.00</th>
                      <th>0.20</th>
                      <th class="text-center"><button class="btn btn-warning" data-toggle="modal" data-target="#editarParametros">
                              <i class="fa fa-pencil-alt"></i>
                              Editar
                          </button></th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
<?php require_once("modalParamemtros.php")?>
<?php require_once ("footer.php")?>
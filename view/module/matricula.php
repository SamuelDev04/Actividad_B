<input type="hidden" id="icode" name="icode">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Matricula
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="#"><i class="fa fa-mortar-board"></i> Matricula</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Ingreso de matricula</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>

      <div class="box-body">
        <form method="POST" id="formMatricula">

          <!-- ROW 1 CONTIENE FECHA Y NOMBRE CENTRO-->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Fecha de Matricula</span>
                <input id="fechaMatricula" name="fechaMatricula" type="date" class="form-control">
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Nombre del Centro</span>
                <input id="nombreCentro" name="nombreCentro" type="text" class="form-control">
              </div>
            </div>
          </div>
          <br>
          <!-- ROW 2 CONTIENE COSTO Y ESTADO-->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Costo</span>
                <input id="costo" name="costo" type="text" class="form-control">
              </div>
<<<<<<< HEAD
=======
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Estado</span>
                  <select class="form-control" id="estado" name="estado">
                      <option value="0" selected disabled hidden>Seleccione su estado</option>
                      <option value="1">Disponible</option>
                      <option value="2">No disponible</option>
                    </select>
                </div>
              </div>
              <!-- ./col -->
>>>>>>> david2
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Estado</span>
                <select class="form-control" id="estado" name="estado">
                  <option value="" selected disabled hidden>Seleccione su estado</option>
                  <option value="1">Disponible</option>
                  <option value="2">No disponible</option>
                </select>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <br>
          <!-- ROW 3 CONTIENE CODIGO PROGRAMA Y APRENDIZ-->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Codigo Programa</span>
                <input id="codigoPrograma" name="codigoPrograma" type="number" class="form-control">
              </div>
            </div>
<<<<<<< HEAD
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Codigo Aprendiz</span>
                <input id="codigoAprendiz" name="codigoAprendiz" type="number" class="form-control">
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button class="btn btn-app bg-blue" type="submit" onclick="validateMatricula(event)">
              <i class="fa fa-save"></i> Guardar
            </button>
            <button class="btn btn-app bg-blue" type="submit" onclick="getGenerarReporte(event)">
              <i class="fa fa-print"></i> Reporte
            </button>
          </div>
          <!-- /.box-footer-->
        </form>
=======
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-app bg-blue" type="submit" onclick="validateMatricula(event)">
            <i class="fa fa-save"></i> Guardar
          </button>
          <button class="btn btn-app bg-gray" type="submit" onclick="getGenerarReporteMatricula(event)">
            <i class="fa fa-print"></i> Reporte
          </button>
        </div>
        <!-- /.box-footer-->
      </form>
>>>>>>> david2
      </div>
      <?php
      if (isset($_POST['fechaMatricula'])) {
        $objCtrMatricula = new MatriculaController();
        $objCtrMatricula->setInsertMatricula($_POST['fechaMatricula'], $_POST['nombreCentro'], $_POST['costo'], $_POST['estado'], $_POST['codigoPrograma'], $_POST['codigoAprendiz']);
      }
      ?>

    </div>
    <!-- /.box -->

    <!-- Otro box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Matriculas</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
        </div>
      </div>
      <div class="box-body">

        <table id="users" class="table table-bordered table-striped table-hover">
          <thead>
            <!-- Este tr sirve para los títulos -->
            <tr>
              <th class="text-center">Codigo</th>
              <th class="text-center">Fecha Matricula</th>
              <th class="text-center">Nombre Centro</th>
              <th class="text-center">Costo</th>
              <th class="text-center">Estado</th>
              <th class="text-center">Codigo Programa</th>
              <th class="text-center">Codigo Aprendiz</th>
              <th class="text-center">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <form action="" method="post">
              <?php

              $objCtrMatriculaAll = new MatriculaController();
              if (gettype($objCtrMatriculaAll->getSearchAllMatricula()) == 'boolean') {
                echo '
                      <tr>
                        <td colspan = "5">No hay datos que mostrar</td>
                      </tr>';
              } else {
                foreach ($objCtrMatriculaAll->getSearchAllMatricula() as $key => $value) {
                  echo '
                        <tr>
                          <td>' . $value["codigoMatricula"] . '</td>
                          <td>' . $value["fechaMatricula"] . '</td>
                          <td>' . $value["nombreCentro"] . '</td>
                          <td>' . $value["costo"] . '</td>
                          <td>' . $value["estado"] . '</td>
                          <td>' . $value["codigoPrograma"] . '</td>
                          <td>' . $value["codigoAprendiz"] . '</td>
                          <td class="text-center">
                            <button class="btn btn-social-icon btn-google" onclick="eraseMat(this.parentElement.parentElement)"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-social-icon bg-blue" onclick="getDataMat(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></button>
                            </td>
                            </tr>';
                }
              }
              ?>
            </form>
          </tbody>
        </table>
      </div>

      <!-- /.box-body -->
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal para guardar -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-blue">
        <h4 class="modal-title">Modificar Matricula 😜</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST" id="formMatriculam">
          <input type="hidden" name="codigoMatriculam" id="codigoMatriculam">
          <!-- ROW 1 MOD CONTIENE FECHA Y NOMBRE CENTRO-->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Fecha de Matricula</span>
                <input id="fechaMatriculam" name="fechaMatriculam" type="date" class="form-control">
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Nombre del Centro</span>
                <input id="nombreCentrom" name="nombreCentrom" type="text" class="form-control">
              </div>
            </div>
          </div>
          <br>
          <!-- ROW 2 MOD CONTIENE COSTO Y ESTADO-->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Costo</span>
                <input id="costom" name="costom" type="text" class="form-control">
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Estado</span>
                <select class="form-control" id="estadom" name="estadom">
                  <option value="" selected disabled hidden>Seleccione su estado</option>
                  <option value="1">Disponible</option>
                  <option value="2">No disponible</option>
                </select>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <br>





          <!-- ROW 3 MOD CONTIENE CODIGO PROGRAMA Y APRENDIZ-->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Codigo Programa</span>
                <input id="codigoProgramam" name="codigoProgramam" type="number" class="form-control">
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Codigo Aprendiz</span>
                <input id="codigoAprendizm" name="codigoAprendizm" type="number" class="form-control">
              </div>
            </div>
            <!-- ./col -->
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button class="btn btn-google bg-blue" type="submit" onclick="validateMatriculaMod(event)">
          <i class="fa fa-save"></i> Guardar
        </button>
        <?php
        if (isset($_POST['fechaMatriculam'])) {
          $objCtrMatricula = new MatriculaController();
          $objCtrMatricula->setUpdateMatricula($_POST['codigoMatriculam'], $_POST['fechaMatriculam'], $_POST['nombreCentrom'], $_POST['costom'], $_POST['estadom'], $_POST['codigoProgramam'], $_POST['codigoAprendizm']);
        }
        ?>
        <button type="button" class="btn btn-google bg-red" data-dismiss="modal">
          <i class="fa fa-close"></i> Cerrar
        </button>
      </div>

    </div>
  </div>
</div>
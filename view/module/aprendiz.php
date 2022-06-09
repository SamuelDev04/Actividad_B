<input type="hidden" id="icodeApre" name="icodeApre">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Aprendiz
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-pencil"></i> Aprendiz</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ingreso de aprendices</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        
      <div class="box-body">  
      <form method="POST" id="formuAprendiz">

          <!-- ROW 1 -->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Nombre</span>
                  <input id="inameApre" name="inameApre" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Fecha Nacimiento</span>
                  <input id="naciApre" name="naciApre" type="date" class="form-control">
                </div>
              </div>
            </div>

            <br>

          <!-- ROW 2 -->  
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <!--<div class="input-group">
                  <span class="input-group-addon">Sexo</span>
                  <input id="iname" name="iname" type="text" class="form-control">
                </div>-->
                <div class="input-group">
                  <span class="input-group-addon">Sexo</span>
                  <select class="form-control" id="sexApren" name="sexApren" onchange="fillBook();">
                    <option value="" selected disabled hidden></option>
                    <option value="1">Mujer</option>
                    <option value="2">Hombre</option>
                    <option value="3">Otro</option>
                  </select>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Ciudad</span>
                  <input id="ciuApren" name="ciuApren" type="text" class="form-control">
                </div>
              </div>
            </div>
          <br>
        
        <div class="box-footer">
          <button class="btn btn-app bg-blue" type="submit" onclick="validateApren(event)">
            <i class="fa fa-save"></i> Guardar
          </button>
          <button class="btn btn-app bg-blue" type="submit" onclick="getGenerarReporte(event)">
            <i class="fa fa-print"></i> Reporte
          </button>
        </div>
        <!-- /.box-footer-->
      </form>
      </div>
      <?php
        if (isset($_POST['inameApre'])){
          $objCtrAprendiz = new AprendController();
          $objCtrAprendiz -> setInsertAprendiz($_POST['inameApre'], $_POST['naciApre'], $_POST['sexApren'], $_POST['ciuApren']);
        }
      ?>
    </div>
    <!-- /.box -->

    <!-- Otro box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Usuarios</h3>
        
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="users" class="table table-bordered table-striped table-hover">
              <thead>
                <!-- Este tr sirve para los títulos -->
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Fecha de Nacimiento</th>
                  <th class="text-center">Sexo</th>
                  <th class="text-center">Ciudad</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <form action="" method="post">
                  <?php
                    $objCtrAprendizAll = new AprendController();

                    if (gettype($objCtrAprendizAll -> getSearchAllAprendiz()) == 'boolean') {
                      echo '
                      <tr>
                        <td colspan = "5">No hay datos que mostrar</td>
                      </tr>';  
                    } else {
                      foreach ($objCtrAprendizAll -> getSearchAllAprendiz() as $key => $value) {
                        echo '
                        <tr>
                          <td>'. $value["codigo"] .'</td>
                          <td>'. $value["nombre"] .'</td>
                          <td>'. $value["fechaNacimiento"] .'</td>
                          <td>'. $value["sexo"] .'</td>
                          <td>'. $value["ciudad"] .'</td>
                          <td class="text-center">
                            <button class="btn btn-social-icon btn-google" onclick="eraseApren(this.parentElement.parentElement)"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-social-icon bg-blue" onclick="getDataApren(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></button>
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
          <h4 class="modal-title">Modificar usuario 😜</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        <form method="POST" id="modifiAprendiz">
          <input type="hidden" name="icodeAprem" id="icodeAprem">
        <!-- ROW 1 -->
          <div class="row">
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Nombre</span>
                <input id="inameAprem" name="inameAprem" type="text" class="form-control">
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-6 col-xs-6">
              <!-- small box -->
              <div class="input-group">
                <span class="input-group-addon">Fecha Nacimiento</span>
                <input id="naciAprem" name="naciAprem" type="text" class="form-control">
              </div>
            </div>
          </div>
        <br>
        <!-- ROW 2 -->
        <div class="row">
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="input-group">
              <span class="input-group-addon">Sexo</span>
              <input id="sexAprenm" name="sexAprenm" type="text" class="form-control">
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="input-group">
              <span class="input-group-addon">Ciudad</span>
              <input id="ciuAprenm" name="ciuAprenm" type="text" class="form-control">
            </div>
          </div>
          <!-- ./col -->
        </div>
        </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-app bg-blue" type="submit" onclick="validateModApren(event)">
            <i class="fa fa-save"></i> Guardar
          </button>
          <?php
            if (isset($_POST['inamem'])){
              $objCtrAprendiz = new AprendController();
              $objCtrAprendiz -> setUpdateAprendiz($_POST['icodeAprem'], $_POST['inameAprem'], $_POST['naciAprem'], $_POST['sexAprenm'], $_POST['ciuAprenm']);
            }
          ?>
          <button type="button" class="btn btn-app bg-red" data-dismiss="modal">
          <i class="fa fa-close"></i> Cerrar
          </button>
        </div>

      </div>
    </div>
  </div>
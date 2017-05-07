<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $datos[0]->nombre; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table  class="table table-hover">
                      <tbody>
                        <?php if($datos[0]->nombre!=''){ ?>
                          <tr>
                            <th>Nombre</th>
                            <td><?php echo $datos[0]->nombre; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->cupos!=''){ ?>
                          <tr>
                            <th>Cupos</th>
                            <td><?php echo $datos[0]->cupos; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->clases!=''){ ?>
                          <tr>
                            <th>Clases</th>
                            <td><?php echo $datos[0]->clases; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->horas!=''){ ?>
                          <tr>
                            <th>Horas por clase</th>
                            <td><?php echo $datos[0]->horas; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->fecha_inicio!=''){ ?>
                          <tr>
                            <th>Fecha de inicio</th>
                            <td><?php echo date("d-M-Y",strtotime($datos[0]->fecha_inicio)); ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->fecha_final!=''){ ?>
                          <tr>
                            <th>Fecha final</th>
                            <td><?php echo date("d-M-Y",strtotime($datos[0]->fecha_final)); ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->fecha_limite!=''){ ?>
                          <tr>
                            <th>Fecha limite</th>
                            <td><?php echo date("d-M-Y",strtotime($datos[0]->fecha_limite)); ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->entidad!=''){ ?>
                          <tr>
                            <th>Entidad</th>
                            <td><?php echo $datos[0]->entidad; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->doc_encargado!=''){ ?>
                          <tr>
                            <th>Documento del encargado</th>
                            <td><?php echo $datos[0]->doc_encargado; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->estado!=''){ ?>
                          <tr>
                            <th>Estado</th>
                            <td><?php echo $datos[0]->estado; ?></td>
                          </tr>
                          <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cursos</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-hover">
                      <thead>
                        <tr>
                          <th>Número de documento</th>
                          <th>Nombre</th>
                          <th>Municipio</th>
                          <th>Estado</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($usuarios as $usuario) { ?>
                          <tr>
                            <td><?php echo $usuario->numero_documento; ?></td>
                            <td><?php echo $usuario->nombres.' '.$usuario->apellidos; ?></td>
                            <td><?php echo $usuario->municipio; ?></td>
                            <td><?php echo $usuario->estado;
                            if($usuario->estado == 'Aprobado'){ ?>
                              <span class="glyphicon glyphicon-ok" style="color:green;"></span>
                            <?php }
                            elseif ($usuario->estado == 'No aprobado') { ?>
                              <span class="glyphicon glyphicon-remove" style="color:red;"></span>
                            <?php }
                            else{ ?>
                              <span class="glyphicon glyphicon-refresh" style="color:blue;"></span>
                            <?php } ?>
                            </td>
                          </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <a class="btn btn-primary"href="<?php echo base_url(); ?>index.php/cursos/buscar">Atrás</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

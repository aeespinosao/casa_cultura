<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $datos[0]->nombres.' '.$datos[0]->apellidos; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table  class="table table-hover">
                      <tbody>
                        <?php if($datos[0]->tipo_documento!=''){ ?>
                          <tr>
                            <th>Tipo de documento</th>
                            <td><?php echo $datos[0]->tipo_documento; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->numero_documento!=''){ ?>
                          <tr>
                            <th>Número de documento</th>
                            <td><?php echo $datos[0]->numero_documento; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->municipio!=''){ ?>
                          <tr>
                            <th>Municipio</th>
                            <td><?php echo $datos[0]->municipio; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->fecha_nacimiento!=''){ ?>
                          <tr>
                            <th>Fecha de nacimiento</th>
                            <td><?php echo date("d-M-Y",strtotime($datos[0]->fecha_nacimiento)); ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->comuna!=''){ ?>
                          <tr>
                            <th>Comuna</th>
                            <td><?php echo $datos[0]->comuna; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->barrio!=''){ ?>
                          <tr>
                            <th>Barrio</th>
                            <td><?php echo $datos[0]->barrio; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->edad!=''){ ?>
                          <tr>
                            <th>Edad</th>
                            <td><?php echo $datos[0]->edad; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->genero!=''){ ?>
                          <tr>
                            <th>Género</th>
                            <td><?php echo $datos[0]->genero; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->direccion!=''){ ?>
                          <tr>
                            <th>Dirección</th>
                            <td><?php echo $datos[0]->direccion; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->telefono!=''){ ?>
                          <tr>
                            <th>Teléfono</th>
                            <td><?php echo $datos[0]->telefono; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->celular!=''){ ?>
                          <tr>
                            <th>Celular</th>
                            <td><?php echo $datos[0]->celular; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->correo!=''){ ?>
                          <tr>
                            <th>Correo electrónico</th>
                            <td><?php echo $datos[0]->correo; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->tipo_sanguineo!=''){ ?>
                          <tr>
                            <th>Tipo sanguineo</th>
                            <td><?php echo $datos[0]->tipo_sanguineo; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->eps!=''){ ?>
                          <tr>
                            <th>EPS</th>
                            <td><?php echo $datos[0]->eps; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->etnia!=''){ ?>
                          <tr>
                            <th>Etnia</th>
                            <td><?php echo $datos[0]->etnia; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->discapacidad!=''){ ?>
                          <tr>
                            <th>Discapacidad</th>
                            <td><?php echo $datos[0]->discapacidad; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->diversidad_sexual!=''){ ?>
                          <tr>
                            <th>Diversidad sexual</th>
                            <td><?php echo $datos[0]->diversidad_sexual; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->intereses!=''){ ?>
                          <tr>
                            <th>Intereses</th>
                            <td><?php echo $datos[0]->intereses; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->documento_acudiente!=''){ ?>
                          <tr>
                            <th>Documento acudiente</th>
                            <td><?php echo $datos[0]->documento_acudiente; ?></td>
                          </tr>
                          <?php } ?>
                          <?php if($datos[0]->parentesco_acudiente!=''){ ?>
                          <tr>
                            <th>Parentesco acudiente</th>
                            <td><?php echo $datos[0]->parentesco_acudiente; ?></td>
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
                          <th>Nombre</th>
                          <th>Entidad</th>
                          <th>Estado</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($cursos as $curso) { ?>
                          <tr>
                            <td><?php echo $curso->nombre; ?></td>
                            <td><?php echo $curso->entidad; ?></td>
                            <td><?php echo $curso->estado;
                            if($curso->estado == 'Aprobado'){ ?>
                              <span class="glyphicon glyphicon-ok" style="color:green;"></span>
                            <?php }
                            elseif ($curso->estado == 'No aprobado') { ?>
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
                      <a class="btn btn-primary"href="<?php echo base_url(); ?>index.php/usuarios/buscar">Atrás</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

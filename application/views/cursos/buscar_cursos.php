<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buscar cursos</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                    if($this->session->flashdata('success')) {?>
                      <div class="alert alert-success">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <?php echo $this->session->flashdata('success');?>
                      </div>
                    <?php }
                    elseif($this->session->flashdata('danger')) {?>
                      <div class="alert alert-danger">
                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                        <?php echo $this->session->flashdata('success');?>
                      </div>
                    <?php } ?>
                    <table id="datatable" class="table">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Cupos</th>
                          <th>Fecha de inicio</th>
                          <th>Fecha de finalización</th>
                          <th>Fecha limite</th>
                          <th>Entidad</th>
                          <th>Nombre persona a cargo</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($datos as $dato) { ?>
                          <tr>
                            <td><?php echo $dato->nombre; ?></td>
                            <td><?php echo $dato->cupos; ?></td>
                            <td><?php echo $dato->fecha_inicio; ?></td>
                            <td><?php echo $dato->fecha_final; ?></td>
                            <td><?php echo $dato->fecha_limite; ?></td>
                            <td><?php echo $dato->entidad; ?></td>
                            <td><?php echo $dato->nombres.' '.$dato->apellidos; ?></td>
                            <td><a  class="btn btn-success" style="height:20px; width:20px; padding:0px;"name="buscar" href="<?php echo base_url();?>index.php/cursos/buscar_cursos/<?php echo $dato->codigo; ?>"><span class="glyphicon glyphicon-user"></span> </a></td>
                          </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>

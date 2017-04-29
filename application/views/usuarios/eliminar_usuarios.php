<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Eliminar usuarios</h2>
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
                          <th>Número de documento</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Municipio</th>
                          <th>Comuna</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($datos as $dato) { ?>
                          <tr>
                            <td><?php echo $dato->numero_documento; ?></td>
                            <td><?php echo $dato->nombres; ?></td>
                            <td><?php echo $dato->apellidos; ?></td>
                            <td><?php echo $dato->municipio; ?></td>
                            <td><?php echo $dato->barrio; ?></td>
                            <td><a data-toggle="confirmation" data-btn-ok-label="Eliminar" data-btn-ok-icon="glyphicon glyphicon-ok-circle"
                                data-btn-ok-class="btn-success" data-btn-cancel-label="Cancelar" data-btn-cancel-icon="glyphicon glyphicon-remove-circle"
                                data-btn-cancel-class="btn-danger" data-title="Eliminar" data-content="¿Desea eliminar el usuario <?php echo $dato->numero_documento;?> ? "
                                class="btn btn-danger" style="height:20px; width:20px; padding:0px;" name="eliminar" href="<?php echo base_url();?>index.php/usuarios/eliminar_usuario/<?php echo $dato->numero_documento; ?>">
                                <span class="glyphicon glyphicon-remove"></span> </a></td>
                          </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>

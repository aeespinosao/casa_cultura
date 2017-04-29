<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Editar usuarios</h2>
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
                            <td><a  class="btn btn-primary" style="height:20px; width:20px; padding:0px;"name="editar" href="<?php echo base_url();?>index.php/usuarios/editar_usuario/<?php echo $dato->numero_documento; ?>"><span class="glyphicon glyphicon-pencil"></span> </a></td>
                          </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>

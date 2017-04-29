<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buscar usuarios</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
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
                            <td><a  class="btn btn-success" style="height:20px; width:20px; padding:0px;"name="editar" href="<?php echo base_url();?>index.php/usuarios/buscar_usuario/<?php echo $dato->numero_documento;?>"><span class="glyphicon glyphicon-user"></span> </a></td>
                          </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
          

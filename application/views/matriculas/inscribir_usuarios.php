<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Inscribir usuarios</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php echo form_open('matriculas/guardar_inscripcion',array('class' => 'form-horizontal form-label-left', 'id' => 'inscribir')); ?>
                    <div class="form-group">
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
                              <td>
                                <div class="checkbox" style="margin:0px;">
                                  <label style="padding-left:0px;">
                                    <input type="checkbox" class="flat" style="height:20px; width:20px; padding:0px;" name="inscritos[]" value="<?php echo $dato->numero_documento;?>">
                                  </label>
                                </div>
                              </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    <div><br><br>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <button type="submit" class="btn btn-success">Inscribir</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

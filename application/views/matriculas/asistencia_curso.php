<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Asistencia de usuarios</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php echo form_open('matriculas/guardar_asistencia/'.$datos[0]->codigo_curso,array('class' => 'form-horizontal form-label-left', 'id' => 'asistencia')); ?>
                    <div class="form-group">
                      <table id="datatable" class="table">
                        <thead>
                          <tr>
                            <th>Número de documento</th>
                            <?php for ($i=0; $i < intval($datos[0]->clases) ; $i++) { ?>
                              <th>Clase <?php echo $i+1; ?></th>
                            <?php } ?>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($datos as $dato) { ?>
                            <tr>
                              <td><?php echo $dato->numero_documento; ?></td>
                              <?php for ($i=0; $i < intval($datos[0]->clases) ; $i++) { ?>
                                <td>
                                  <div class="checkbox" style="margin:0px; margin-left: 25%;">
                                    <label style="padding-left:0px;">
                                      <input type="checkbox" class="flat" style="height:20px; width:20px; padding:0px; color:red;" name="asistencias[]" value="<?php echo $dato->numero_documento;?>/<?php echo $dato->codigo_curso;?>/<?php echo $i+1;?>"
                                        <?php foreach ($asistencias as $asistencia){
                                          if($asistencia->numero_documento == $dato->numero_documento AND $asistencia->clase == $i+1){
                                            echo "checked";
                                          }
                                         } ?>>
                                    </label>
                                  </div>
                                </td>
                              <?php } ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    <div><br><br>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-7 col-sm-7 col-xs-12">
                        <button type="submit" class="btn btn-success">Guardar asistencia</button>
                        <a href="<?php echo base_url();?>matriculas/cerrar_curso" type="submit" class="btn btn-success" data-toggle="confirmation" data-btn-ok-label="Cerrar curso" data-btn-ok-icon="glyphicon glyphicon-ok-circle"
                            data-btn-ok-class="btn-success" data-btn-cancel-label="Cancelar" data-btn-cancel-icon="glyphicon glyphicon-remove-circle"
                            data-btn-cancel-class="btn-danger" data-title="Cerrar curso" data-content="¿Desea cerrar el curso? Solo debe cerrar el curso cuando este haya finalizado.">Cerrar curso</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

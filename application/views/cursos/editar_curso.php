<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear curso nuevo</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                    if($this->session->flashdata('success')) {?>
                      <div class="alert alert-success">
                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                        <?php echo $this->session->flashdata('success');?>
                      </div>
                    <?php } ?>
                    <br/>
                    <!--<form id="" data-parsley-validate class="form-horizontal form-label-left">-->
                      <?php echo form_open('cursos/editar_curso',array('class' => 'form-horizontal form-label-left', 'id' => 'crear_cursos')); ?>
                      <div class="form-group">
                        <?php echo form_error('nombre'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre del curso <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12" value="<?php echo $datos[0]->nombre; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('cupos'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cupos <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="number" id="cupos" name="cupos"  class="form-control col-md-7 col-xs-12" value="<?php echo $datos[0]->cupos; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('clases'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cantidad de clases <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="number" id="clases" name="clases"  class="form-control col-md-7 col-xs-12" value="<?php echo $datos[0]->clases; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('horas'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Horas por clase <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="horas" class="form-control col-md-7 col-xs-12" type="number" name="horas" value="<?php echo $datos[0]->horas; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('fechas'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de inicio y finalización <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div class="control-group">
                            <div class="controls">
                              <div class="input-prepend input-group  col-sm-12">
                                <input type="text" name="fechas" id="reservation" class="form-control" value="<?php date('m/d/Y',strtotime($datos[0]->fecha_inicio)).' - '.date('m/d/Y',strtotime($datos[0]->fecha_final)) ?>" />
                                <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('fecha_limite'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha limite de inscripción <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div class="input-group date col-sm-12"  class="col-md-7 col-xs-12" style="margin:0px;">
                               <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>

                                <div class="control-group">
                                  <div class="controls">
                                    <div class="col-sm-12 xdisplay_inputx form-group has-feedback" style="padding:0px; margin-bottom:0px;">
                                      <input name="fecha_limite" style="text-align:left; padding:6px 10px;"type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="Fecha de nacimiento" aria-describedby="inputSuccess2Status3" value="<?php echo date('m/d/Y',strtotime($datos[0]->fecha_limite)); ?>">
                                      <span class="fa fa-calendar-o form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                  </div>
                                </div>
                              <!--<input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar">
                                  </span>
                              </span>-->
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('entidad'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Entidad encargada del curso <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="entidad" class="form-control col-md-7 col-xs-12" type="text" name="entidad" value="<?php echo $datos[0]->entidad; ?>">
                        </div>
                      </div>
                    <hr>
                      <div class="x_title">
                        <h2>Datos del resposable del curso</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('doc_encargado'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número de documento </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="doc_encargado" name="doc_encargado"  class="form-control col-md-7 col-xs-12" value="<?php echo $datos[0]->doc_encargado; ?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-3">
                          <a class="btn btn-primary" type="button" href="<?php echo base_url();?>">Cancel</a>
						              <button class="btn btn-primary" type="reset" id="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Actualizar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

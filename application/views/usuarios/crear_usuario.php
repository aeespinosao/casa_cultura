<!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Crear usuario nuevo</h2>
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
                    <br/>
                    <!--<form id="" data-parsley-validate class="form-horizontal form-label-left">-->
                      <?php echo form_open('usuarios/crear',array('class' => 'form-horizontal form-label-left', 'id' => 'crear_usuarios')); ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tipo de documento <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" id="" name="tipo_doc">
                            <option value="CC" <?php if ($datos['tipo_documento']=='CC') echo 'selected'; ?>>Cedula de ciudadanía</option>
                            <option value="TI" <?php if ($datos['tipo_documento']=='TI') echo 'selected'; ?>>Tarjeta de identidad</option>
                            <option value="CE" <?php if ($datos['tipo_documento']=='CE') echo 'selected'; ?>>Cedula de extrajería</option>
                            <option value="RC" <?php if ($datos['tipo_documento']=='RC') echo 'selected'; ?>>RC</option>
                            <option value="P" <?php if ($datos['tipo_documento']=='P') echo 'selected'; ?>>Pasaporte</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('doc'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número de documento <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="doc" name="doc" class="form-control col-md-7 col-xs-12" value="<?php echo $datos['documento']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('nombres'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombres <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="nombres" name="nombres"  class="form-control col-md-7 col-xs-12" value="<?php echo $datos['nombres']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('apellidos'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="apellidos" name="apellidos"  class="form-control col-md-7 col-xs-12" value="<?php echo $datos['apellidos']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('municipio'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Municipio de nacimiento <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="municipio" class="form-control col-md-7 col-xs-12" type="text" name="municipio" value="<?php echo $datos['municipio']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('fecha_nacimiento'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de nacimiento <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div class="input-group date col-sm-12"  class="col-md-7 col-xs-12" style="margin:0px;">
                               <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" name="daterangepicker_start" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>

                                <div class="control-group">
                                  <div class="controls">
                                    <div class="col-sm-12 xdisplay_inputx form-group has-feedback" style="padding:0px; margin-bottom:0px;">
                                      <input name="fecha_nacimiento" style="text-align:left; padding:6px 10px;"type="text" class="form-control has-feedback-left" id="single_cal3" placeholder="Fecha de nacimiento" aria-describedby="inputSuccess2Status3" value="<?php echo $datos['fecha_nacimiento']; ?>">
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Comuna<span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <select class="form-control col-md-7 col-xs-12" id="" name="comuna">
                            <option value="1" <?php if ($datos['comuna']=='1') echo 'selected'; ?>>Comuna 1: Popular</option>
                            <option value="2" <?php if ($datos['comuna']=='2') echo 'selected'; ?>>Comuna 2: Santa cruz</option>
                            <option value="3" <?php if ($datos['comuna']=='3') echo 'selected'; ?>>Comuna 3: Manrique</option>
                            <option value="4" <?php if ($datos['comuna']=='4') echo 'selected'; ?>>Comuna 4: Aranjuez</option>
                            <option value="5" <?php if ($datos['comuna']=='5') echo 'selected'; ?>>Comuna 5: Castilla</option>
                            <option value="6" <?php if ($datos['comuna']=='6') echo 'selected'; ?>>Comuna 6: Doce de octubre</option>
                            <option value="7" <?php if ($datos['comuna']=='7') echo 'selected'; ?>>Comuna 7: Robledo</option>
                            <option value="8" <?php if ($datos['comuna']=='8') echo 'selected'; ?>>Comuna 8: Villa hermosa</option>
                            <option value="9" <?php if ($datos['comuna']=='9') echo 'selected'; ?>>Comuna 9: Buenos aires</option>
                            <option value="10" <?php if ($datos['comuna']=='10') echo 'selected'; ?>>Comuna 10: La candelaria</option>
                            <option value="11" <?php if ($datos['comuna']=='11') echo 'selected'; ?>>Comuna 11: Laureles-Estadio</option>
                            <option value="12" <?php if ($datos['comuna']=='12') echo 'selected'; ?>>Comuna 12: La américa</option>
                            <option value="13" <?php if ($datos['comuna']=='13') echo 'selected'; ?>>Comuna 13: San javier</option>
                            <option value="14" <?php if ($datos['comuna']=='14') echo 'selected'; ?>>Comuna 14: El poblado</option>
                            <option value="15" <?php if ($datos['comuna']=='15') echo 'selected'; ?>>Comuna 15: Guayabal</option>
                            <option value="16" <?php if ($datos['comuna']=='16') echo 'selected'; ?>>Comuna 16: Belén</option>
                            <option value="50" <?php if ($datos['comuna']=='50') echo 'selected'; ?>>San Sebastián de Palmitas</option>
                            <option value="60" <?php if ($datos['comuna']=='60') echo 'selected'; ?>>San Cristóbal</option>
                            <option value="70" <?php if ($datos['comuna']=='70') echo 'selected'; ?>>Altavista</option>
                            <option value="80" <?php if ($datos['comuna']=='80') echo 'selected'; ?>>San Antonio de Prado</option>
                            <option value="90" <?php if ($datos['comuna']=='90') echo 'selected'; ?>>Santa Elena</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('barrio'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Barrio <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="barrio" class="form-control col-md-7 col-xs-12" type="text" name="barrio" value="<?php echo $datos['barrio']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('edad'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Edad <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="edad" class="form-control col-md-7 col-xs-12" type="number" name="edad" min="0" value="<?php echo $datos['edad']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('genero'); ?>
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Género <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default <?php if($datos['genero']=="masculino"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="genero" id="genero" value="masculino"> &nbsp; Masculino &nbsp;
                            </label>
                            <label class="btn btn-default <?php if($datos['genero']=="femenino"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="genero" id="genero" value="femenino"> Femenino
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('direccion'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Dirección <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="direccion" class="form-control col-md-7 col-xs-12" type="text" name="direccion" value="<?php echo $datos['direccion'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('telefono'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Telefono fijo <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="telefono" class="form-control col-md-7 col-xs-12" type="text" name="telefono" value="<?php echo $datos['telefono'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <?php echo form_error('celular'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Celular <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="celular" class="form-control col-md-7 col-xs-12" type="text" name="celular" value="<?php echo $datos['celular'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Correo electrónico
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="correo" class="form-control col-md-7 col-xs-12" type="email" name="correo" value="<?php echo $datos['correo'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo sanguineo <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <select id="tipo_sanguineo" name="tipo_sanguineo" class="form-control">
                              <option value="A+" <?php if ($datos['tipo_sanguineo']=='A+') echo 'selected'; ?>>A+</option>
                              <option value="A-" <?php if ($datos['tipo_sanguineo']=='A-') echo 'selected'; ?>>A-</option>
                              <option value="B+" <?php if ($datos['tipo_sanguineo']=='B+') echo 'selected'; ?>>B+</option>
                              <option value="B-" <?php if ($datos['tipo_sanguineo']=='B-') echo 'selected'; ?>>B-</option>
                              <option value="AB+" <?php if ($datos['tipo_sanguineo']=='AB+') echo 'selected'; ?>>AB+</option>
                              <option value="AB-" <?php if ($datos['tipo_sanguineo']=='AB-') echo 'selected'; ?>>AB-</option>
                              <option value="O+" <?php if ($datos['tipo_sanguineo']=='O+') echo 'selected'; ?>>O+</option>
                              <option value="O-" <?php if ($datos['tipo_sanguineo']=='O-') echo 'selected'; ?>>O-</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">EPS
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input id="correo" class="form-control col-md-7 col-xs-12" type="text" name="eps" value="<?php echo $datos['eps'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Etnia
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div id="etnia" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default <?php if($datos['etnia']=="mestizo"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="etnia" id="etnia" value="mestizo"> Mestizo
                            </label>
                            <label class="btn btn-default <?php if($datos['etnia']=="blanco"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="etnia" id="etnia" value="blanco"> Blanco
                            </label>
                            <label class="btn btn-default <?php if($datos['etnia']=="indigena"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="etnia" id="etnia" value="indigena"> Indígena
                            </label>
                            <label class="btn btn-default <?php if($datos['etnia']=="afrodescendiente"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="etnia" id="etnia" value="afrodescendiente"> Afrodescendiente
                            </label>
                            <label class="btn btn-default <?php if($datos['etnia']=="raizal"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="etnia" id="etnia" value="raizal"> Raizal
                            </label>
                            <label class="btn btn-default <?php if($datos['etnia']=="gitano"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="etnia" id="etnia" value="Gitano"> Gitano
                            </label>
                            <label class="btn btn-default <?php if($datos['etnia']=="otro"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="etnia" id="etnia" value="otro"> Otro
                            </label>
                          </div>
                        </div>
                      </div><br>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Discapacidad
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div id="discapacidad" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default <?php if($datos['discapacidad']=="motriz"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="discapacidad" id="discapacidad" value="motriz"> Motriz
                            </label>
                            <label class="btn btn-default <?php if($datos['discapacidad']=="mental"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="discapacidad" id="discapacidad" value="mental"> Mental
                            </label>
                            <label class="btn btn-default <?php if($datos['discapacidad']=="auditiva"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="discapacidad" id="discapacidad" value="auditiva"> Auditiva
                            </label>
                            <label class="btn btn-default <?php if($datos['discapacidad']=="visual"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="discapacidad" id="discapacidad" value="visual"> Visual
                            </label>
                            <label class="btn btn-default <?php if($datos['discapacidad']=="comunicativa"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="discapacidad" id="discapacidad" value="comunicativa"> Comunicativa
                            </label>
                            <label class="btn btn-default <?php if($datos['discapacidad']=="multiples"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="discapacidad" id="discapacidad" value="multiples"> Multiples
                            </label>
                            <label class="btn btn-default <?php if($datos['discapacidad']=="otra"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="discapacidad" id="discapacidad" value="otra"> Otra
                            </label>
                          </div>
                        </div>
                      </div><br>
                      <div class="form-group">
                        <?php echo form_error('diversidad'); ?>
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Diversidad sexual <span style="color:red;">*</span>
                        </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <div id="diversidad" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default <?php if($datos['diversidad_sexual']=="heterosexual"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="diversidad" id="diversidad" value="heterosexual"> Heterosexual
                            </label>
                            <label class="btn btn-default <?php if($datos['diversidad_sexual']=="lesbiana"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="diversidad" id="diversidad" value="lesbiana"> Lesbiana
                            </label>
                            <label class="btn btn-default <?php if($datos['diversidad_sexual']=="gay"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="diversidad" id="diversidad" value="gay"> Gay
                            </label>
                            <label class="btn btn-default <?php if($datos['diversidad_sexual']=="transexual"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="diversidad" id="diversidad" value="transexual"> Transexual
                            </label>
                            <label class="btn btn-default <?php if($datos['diversidad_sexual']=="bisexual"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="diversidad" id="diversidad" value="bisexual"> Bisexual
                            </label>
                            <label class="btn btn-default <?php if($datos['diversidad_sexual']=="intersexual"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="diversidad" id="diversidad" value="intersexual"> Intersexual
                            </label>
                            <label class="btn btn-default <?php if($datos['diversidad_sexual']=="otro"){echo "active";}?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="diversidad" id="diversidad" value="otro"> Otro
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="control-group">
                          <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Intereses
                          </label>
                          <div class="col-md-7 col-sm-7 col-xs-12" style="margin-top:10px;">
                            <input id="tags_1" type="text" class="tags form-control" value="<?php echo $datos['intereses']; ?>" name="intereses"/>
                            <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                          </div>
                        </div>
                      </div><hr>
                      <div class="x_title">
                        <h2>Datos acudiente</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número de documento </label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="doc_acudiente" name="doc_acudiente"  class="form-control col-md-7 col-xs-12" value="<?php echo $datos['documento_acudiente'];?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Parentesco</label>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                          <input type="text" id="parentesco" name="parentesco"  class="form-control col-md-7 col-xs-12" value="<?php echo $datos['parentesco_acudiente'];?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-7 col-sm-7 col-xs-12 col-md-offset-3">
                          <a class="btn btn-primary" type="button" href="<?php echo base_url();?>">Cancel</a>
						              <button class="btn btn-primary" type="reset" id="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Crear</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

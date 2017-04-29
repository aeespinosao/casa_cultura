    </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>design/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>design/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>design/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>design/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery -->
    <script src="<?php echo base_url();?>design/vendors/bootstrap-confirmation/bootstrap-confirmation.min.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>design/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>design/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>design/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>design/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>design/vendors/skycons/skycons.js"></script>
    <!-- datetimepicker -->
    <script src="<?php echo base_url();?>design/vendors/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>design/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- jQuery autocomplete-->
    <script src="<?php echo base_url();?>design/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>

    <!-- Flot -->
    <script type="text/javascript">
      $('[data-toggle=confirmation]').confirmation({
        rootSelector: '[data-toggle=confirmation]'
      });
      $(function () {
          $('input[name="fecha_limite"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoUpdateInput: false,
            locale: {
                "monthNames": [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre"
                ]
            }
          });
          $('input[name="fechas"]').daterangepicker({
            "buttonClasses": "btn btn-sm",
            autoUpdateInput: false,
            "applyClass": "btn-success",
            "cancelClass": "btn-danger",
            locale: {
                applyLabel: 'Ingresar',
                cancelLabel: 'Cancelar',
                "monthNames": [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre"
                ]
            }
          });
          $('input[name="fecha_nacimiento"]').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true,
            autoUpdateInput: false,
            locale: {
                "monthNames": [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre"
                ]
            }
          });/*.datetimepicker({
            viewMode: 'months',
            pickTime: false,
            format: 'dd/mm/yyyy',
            pickerPosition: "bottom-left"
          });*/
          $("#reset").on("click",function(){
             $('input:radio').parent().removeClass("active");
          });
      });
  </script>
    <script src="<?php echo base_url();?>design/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>design/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>design/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>design/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>design/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>design/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>design/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>design/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>design/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url();?>design/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo base_url();?>design/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url();?>design/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>design/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>design/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>design/build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url();?>design/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  </body>
</html>

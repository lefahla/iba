
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
      
      </div>
      <!-- /.row (main row) -->
      <kbd>
          Ikaheng Buddies Association . <br>
           P.O Box 11556, Maseru 100 Lesotho 
              <br>
         <abbr title="Telephone"> Tel</abbr> : (+266) 62780233 
          </kbd>
          <br> Copyright <?php echo Date('Y');?>

    </section> 
  </div> 
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url('template/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('template/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script> 
<!-- Morris.js charts -->
<script src="<?php echo base_url('template/bower_components/raphael/raphael.min.js'); ?>"></script>
<script src="<?php echo base_url('template/bower_components/morris.js/morris.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js'); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?php echo base_url('template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('template/bower_components/jquery-knob/dist/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('template/bower_components/moment/min/moment.min.js'); ?>"></script>
<script src="<?php echo base_url('template/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>

<!-- Select2 -->
<script src="<?php echo base_url('template/bower_components/select2/dist/js/select2.min.js'); ?>"></script>

<!-- InputMask -->
<script src="<?php echo base_url('template/plugins/input-mask/jquery.inputmask.js');?>"></script>
<script src="<?php echo base_url('template/plugins/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
<script src="<?php echo base_url('template/plugins/input-mask/jquery.inputmask.extensions.js'); ?>"></script>

<!-- Datatables -->
<script src="<?php echo base_url('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ; ?>"></script>
<script src="<?php echo base_url('template/bower_components/datatables.net/js/jquery.dataTables.min.js') ; ?>"></script>

<!-- Slimscroll -->
<script src="<?php echo base_url('template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('template/plugins/iCheck/icheck.min.js'); ?>"></script>

<!-- FastClick -->
<script src="<?php echo base_url('template/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('template/dist/js/adminlte.min.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('template/dist/js/demo.js'); ?>"></script>
<script src="<?php echo base_url('template/dist/js/pages/dashboard.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrapValidator.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootbox.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/validateLoanRegistration.js'); ?>"></script>

<script>
  $(function () {
    
    $('#client_list').DataTable({
           'paging'      : true
    });

     $('.select2').select2({
      placeholder: 'Select client name',
      tags:true
     });

      //Money Euro
    $('[data-mask]').inputmask()


     //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    $('#Register').bootstrapValidator(); 

    $('[data-toggle="tooltip"]').tooltip();

  });
</script>

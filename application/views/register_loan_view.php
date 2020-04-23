
<?php include 'includes/header_view.php';?>

<title>  <?php echo $title['registerLoan'];?> | IBA <?php echo Date('Y');?></title>

</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php include 'includes/header_navigation_view.php';?>

  <?php include 'includes/aside_navigation_view.php'; ?>
 
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->

 <?php include 'includes/small_top_objects_contents_view.php';?>

 <?php include 'includes/small_top_objects_contents_view_registerLoan.php';?>

        <!-- /Loan registration form -->
        <div class="box-body" >  

        <?php if($msg = $this->session->flashdata('newLoan_response')): ?>
        <div class="col-md-10">     
                       <?php echo $msg;?>               
        </div>
        <?php endif;?> 
        
        <form action="<?php echo  base_url('index.php/dashboard/client_get_new_loan');  ?>" method="post" id="Register"> 
          <!-- Client name -->
               <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <i>Client name</i><!-- This name select should be from the ng-controller using ng-repeat directive -->
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-user-md"></i>
                      </div>
                      <select class="form-control select2 dropdown" style="width: 100%;" id="client_names">

                      </select>
                      <input type="hidden" id="selName" name="client_name">
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
              </div>
              </div>
            <!-- /Client name -->

            <!-- Funds paid for investment  -->
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                    <i>Funds paid for investment </i>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="funds_invested" name="funds_invested" readonly>

                    </div>
                    <!-- /.input group -->
                  </div>
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /funds paid for investment -->

                <!-- Subcription and Shares -->
              <div class="row">
                <!-- Subcription -->
                <div class="col-md-4">
                    <div class="form-group">
                    <i>Subscription</i>
                    <div class="input-group">
                      <div class="input-group-addon" style="padding: 4px 12px;">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="subscription" name="subscription" readonly>

                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                  <!-- /Subcription -->

                  <!-- Shares for investment -->
                  <div class="col-md-4">
                    <div class="form-group">
                    <i>Shares for investment</i>
                    <div class="input-group">
                      <div class="input-group-addon" style="padding: 4px 12px;">
                         <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="invested_shares" name="invested_shares" readonly>
                    </div>
                    <!-- /.input group -->
                    </div>
                  </div>
                  <!-- /Shares for investment -->
                </div>
                <!-- /Subscription and shares -->

                <!-- Previous loan and new loan  -->

              <div class="row">
                <!-- Previous loan -->
                <div class="col-md-4">
                    <div class="form-group">
                    <i>Previous loan</i>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="previous_loan" name="previous_loan" readonly> 

                    </div>
                    <!-- /.input group -->
                  </div>
                    </div>
                  <!-- /.Previous loan -->

                  <!-- New loan -->
                  <div class="col-md-4">
                    <div class="form-group">
                    <i><strong>Click checkbox</strong> to enable a new loan</i>

                    <div class="input-group">
                      <div class="input-group-addon" style="padding: 4px 12px;">

                         <input type="checkbox" class="minimal" id="get_loan">
                       </div>
                      <input type="number" class="form-control" id="new_loan" name="new_loan" disabled> 

                    </div>
                    <!-- /.input group -->
                    </div>
                 </div>
                  <!-- / New loan-->
                </div>
                <!-- /Previous loan and New Loan -->

                <!-- Total and Interest -->

                <div class="row">
                <!-- Total-->
                <div class="col-md-4">
                    <div class="form-group">
                    <i>Total</i>
                    <div class="input-group">
                      <div class="input-group-addon" style="padding: 4px 12px;">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="total" name="total" readonly> 

                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                  <!-- /Total -->

                  <!-- Interest -->
                  <div class="col-md-4">
                    <div class="form-group">
                    <i>Interest</i>

                    <div class="input-group">
                      <div class="input-group-addon" style="padding: 4px 12px;">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="interest" name="interest" readonly> 
                    </div>
                    <!-- /.input group -->
                    </div>
                 </div>
                  <!-- /Interest-->
                </div>
                <!-- /Total and new loan -->

                <!-- /New Total and Loan paid -->
                 <div class="row">
                <!-- New Total-->
                <div class="col-md-4">
                    <div class="form-group">
                    <i>New Total</i>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="new_total" name="new_total" readonly> 
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>
                  <!-- /new Total -->

                  <!-- Loan paid -->
                  <div class="col-md-4">
                    <div class="form-group">
                    <i>Loan paid</i>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="number" class="form-control" id="loan_paid" name="loan_paid">
                    </div>
                    <!-- /.input group -->
                    </div>
                 </div>
                  <!-- /Loan paid-->
                </div>
                <!-- /Total and new loan -->

                <div class="row">
                <!--Amount payable next month-->
                  <div class="col-md-4">
                    <div class="form-group">
                    <i>Amount payable next month</i>

                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="number" class="form-control" id="amount_due" name="amount_due" readonly>
                    </div>
                    <!-- /.input group -->
                    </div>
                 </div>
                  <!-- /Loan paid-->
                </div>
                <!-- /Amount payable next month-->
                 <?php echo form_submit(['value'=>'Get new loan','type'=>'submit','name'=>'reg_loan','class'=>'btn btn-info btn-alert']); ?>
                <?php echo form_reset(['value'=>'Reset the form','name'=>'reset','type'=>'reset','class'=>'btn btn-warning btn-alert']); ?>
            </form>
              </div><!-- End box -->
      </div>
      <!-- /Loan registration form -->
        <div class="box-footer">

        </div>
<?php include 'includes/footer_view.php';?>

</body>
</html>

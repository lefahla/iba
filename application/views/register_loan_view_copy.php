
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
        <div class="box-body" ng-app="" ng-controller="">

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
                      <!-- 
                      <select class="form-control select2" style="width: 100%;" id="client_names">
                        <option ng-repeat="name in names" value="{{name.data.name.firstname +' '+name.data.name.surname}}" id="client_name" name="client_name">{{name.name.firstname +' '+name.data.name.surname}} <i>:</i> {{name.data.name.id}}</option>
                      </select> -->
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
                      <input type="number" class="form-control" ng-model="funds_paid">
                       
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
                      <input type="text" value="{{subscription}}" class="form-control" id="subscription" >
                      
                    </div>
                    <!-- /.input group -->
                  </div>
                </div>        
                  <!-- /Subcription -->
                
                  <!-- Shares for investment -->
                  <div class="col-md-4">
                    <div class="form-group">
                    <i>Shares for investment </i>
                    <div class="input-group">
                      <div class="input-group-addon" style="padding: 4px 12px;">
                         <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" id="shares_for_investment" value="{{shares_for_investment}}">
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
                    <i>Previous loan </i>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                      </div>
                      <input type="text" class="form-control" value="{{previous_loan}}" id="previous_loan">
                    </div>
                    <!-- /.input group -->
                  </div>
                    </div>        
                  <!-- /.Previous loan -->

                  <!-- New loan -->
                  <div class="col-md-4">
                    <div class="form-group">
                    <i><tiny>Click checkbox to enable a new loan</tiny></i>

                    <div class="input-group">
                      <div class="input-group-addon" style="padding: 4px 12px;">
                        
                         <input type="checkbox" class="minimal" 
                                            ng-checked="register_new_loan"
                                            ng-init="register_new_loan = false"
                                            ng-model="register_new_loan"
                                            >                         
                       </div>
                      <input type="text" class="form-control" value="{{new_loan}}" id="new_loan">
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
                      <input type="text" class="form-control" value="{{total}}" id="total">
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
                      <input type="text" class="form-control" value="{{interest}}" id="interest">
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
                      <input type="text" class="form-control" value="{{new_total}}" id="new_total">
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
                      <input type="text" class="form-control" value="{{loan_paid}}" id="loan_paid">
                    </div>
                    <!-- /.input group -->
                    </div>
                 </div>                         
                  <!-- /Loan paid-->
                </div>
                <!-- /Total and new loan -->  
      </div>
      <!-- /Loan registration form --> 
        <div class="box-footer">
          Loan registration
        </div>

<?php include 'includes/footer_view.php';?>

</body>
</html>

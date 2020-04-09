
<?php include 'includes/header_view.php';?>

<title>  <?php echo $title['addClient'];?> | IBA <?php echo Date('Y');?></title>

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
  
<?php include 'includes/small_top_objects_contents_view_addClient.php';?>
        <div class="row">
        
        <div class="col-md-10">
           <?php if($msg = $this->session->flashdata('response')): ?>
                       <?php echo $msg;?>
               <?php endif;?> 
          <div>            
        
        <div class="box-body"">
        <form action="<?php echo base_url('index.php/dashboard/add_user'); ?>" method="post" id="Register" class="form-horizontal" 
                      data-bv-message="This value is not valid"
                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"                       
                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">  

          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-4">
              <i>Firstname : </i>
              <input type="text" id="firstname" name="firstname" placeholder="First Name" class="form-control form-element-input" 
                  required data-bv-notempty-message="The first name is required and cannot be empty" 
                   pattern="^[a-zA-Z\s]+$" data-bv-regexp-message="The firstname can only consist of alphabetical" 
                   data-toggle="tooltip" data-placement="left" title="Firstname" data-toggle="tooltip" data-placement="left" title="Provide firstname"/>
            </div> 
            <div class="col-sm-4">
              <i>Last name :</i>
              <input type="text" id="lastname" name="lastname" placeholder="Last Name" class="form-control  form-element-input"
                    required data-bv-notempty-message="The last name is required and cannot be empty"
                    pattern="^[a-zA-Z'\s]+$" data-bv-regexp-message="The last name can only consist of alphabetical"
                       data-toggle="tooltip" data-placement="right" title="Provide lastname" />
            </div>
          </div> 
          <div class="form-group">
            <!-- <div class="col-sm-4">
             <i> Select Gender :</i>
              <select >                             
                <option selected id="Gender" class=".female" value="Female">Female</option>
                <option id="Gender" value="Male">Male</option>
              </select>
            </div> -->
                <div class="col-sm-4">
                    <i>Gender :</i>
                    <select class="form-control select2" 
                            data-toggle="tooltip" 
                            data-placement="left" 
                            name="gender">
                      <option id="gender" name="gender" value="Male" selected="selected">Male</option>
                      <option id="gender" name="gender" value="Mafeteng">Female</option>
                    </select>
                </div>
               
              
              <div class="col-sm-4">
                <i>Phone numbers :</i>
              <input type="tel" placeholder="Phone Number" id="phone_number" name ="phone_number" class="form-control form-element-input"
                    required data-bv-notempty-message="The phone number can not be empty"
                    pattern="^((?:\+266|00266)|266)(\d{2})-?(\d{3})-?(\d{3})$" data-bv-regexp-message="Start with code [+266,00266,266] and then the 8 numbers"
                     data-toggle="tooltip" data-placement="left" title="Enter phone number"
                     data-inputmask='"mask": "+26699999999"' data-mask />

              <i>Other phone numbers :</i>
              <input type="tel" placeholder="Other Number" id="other_phone" name = "other_phone" class="form-control form-element-input"
                        pattern="^((?:\+266|00266)|266)(\d{2})-?(\d{3})-?(\d{3})$" data-bv-regexp-message="Start with code [+266,00266,266] and then the 8 numbers"
                         data-toggle="tooltip" data-placement="bottom" title="Enter other phone if available"
                          data-inputmask='"mask": "+26699999999"' data-mask />
           
            </div>

               <div class="col-sm-4">
                <i>Email :</i>
              <input   type="email" id="email" name="email" placeholder="Email" class="form-control form-element-input"  
                       data-toggle="tooltip" 
                       required data-bv-notempty-message="The email can not be empty"
                       data-placement="right" title="Email address" />
            </div>
          </div> 

<!-- Address Section -->
          <!-- Form Name -->
          <legend>Address Details</legend>
          <!-- Text input-->
           
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-9">
              <i>Home address :</i> 
              <div style="float: right; text-align: right;" id="feedback"></div>
              <textarea class="col-sm-12 form-control form-element-input" id="Address" id="physical_address" 
              name="physical_address" placeholder="Residential Address" cols="1" rows="7" maxlength="70"
                  required data-bv-notempty-message="Provide residential address" 
                        data-toggle="tooltip" data-placement="top"></textarea>
                 
             </div>            
          </div>
          <!-- Text input-->
          <div class="form-group">                         
                <div class="col-sm-4">
                    <i>City :</i>
                    <select class="form-control select2" 
                            required data-bv-notempty-message="Provide place of stay or ownership" 
                            data-toggle="tooltip" 
                            data-placement="left" 
                            title="Enter city" style="width: 100%;"
                            name="city">
                      <option name="city" id="city" value="Maseru" selected="selected">Maseru</option>
                      <option name="city" id="city" value="Mafeteng">Mafeteng</option>
                      <option name="city" id="city" value="Mohale's Hoek">Mohale's Hoek</option>
                      <option name="city" id="city" value="Quthing">Quthing</option>
                      <option name="city" id="city" value="Qacha's Nek">Qacha's Nek</option>
                      <option name="city" id="city" value="Thaba-Tseka">Thaba-Tseka</option>
                      <option name="city" id="city" value="Botha-Buthe">Botha-Buthe</option>
                      <option name="city" id="city" value="Mokhotlong">Mokhotlong</option>
                      <option name="city" id="city" value="Leribe">Leribe</option>
                      <option name="city" id="city" value="Berea">Berea</option>
                    </select>
                </div>
              </div>
          <!-- Command -->
           <div class="form-group" >
            <div class="col-lg-5" >
              <div class="pull-right" >

                <?php echo form_submit(['value'=>'Register Client','type'=>'submit','name'=>'reg_client','class'=>'btn btn-info btn-alert']); ?>
                <?php echo form_reset(['value'=>'Reset','name'=>'reset','type'=>'reset','class'=>'btn btn-warning btn-alert']); ?>

                 
                <!-- <button type="clear" id="ClearBtn" class="btn btn-default" 
                        data-toggle="tooltip" data-placement="left" title="Cancel entries">
                            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancel</button>
                <button type="button" id="AddBtn" class="btn btn-primary"
                        data-toggle="tooltip" data-placement="right" title="Save data">
                            <span class="glyphicon glyphicon-save" aria-hidden="true"></span> Save</button> -->
              </div>
            </div>
          </div>
        </form>
           
          </div>
            <!-- /.box-body -->
      </div>
    </div>         
  </div>
      <!-- /.row -->

<?php include 'includes/footer_view.php';?>


</body>
</html>

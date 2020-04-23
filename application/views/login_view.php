<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $title = $this->config->item('titles') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/imgs/login.ico');?>"/>
    

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/bootstrap-theme.min.css');?>">      
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/bootstrap-social.css');?>">      
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/templatemo_style.css');?>"> 

    <style type="text/css">
    	.templatemo-bg-image-1 
    	{
		background-color: rgb(60,60,60);
		background-image: url(<?php echo base_url('assets/imgs/templatemo-bg-1.jpg');?>);	
}
		.templatemo-bg-image-2 
		{
			background-color: rgb(70, 90, 40);
			background-image: url(<?php echo base_url('assets/imgs/templatemo-bg-2.jpg');?>);
}
    </style>
 
 <title>IBA | Login <?php echo Date('Y');?></title>
 
    <body class="templatemo-bg-image-1">
	<div class="container">
		<div class="col-md-12">			
			<form class="form-horizontal templatemo-login-form-2" role="form" action="#" method="post">
				<div class="row">
					<div class="col-md-12">
						 
						<h1>IBA | Login</h1>
					</div>
				</div>
				<div class="row">
					<div class="templatemo-one-signin col-md-6">
						<?php echo form_open('login/user_login');?>
				        <div class="form-group">
				          <div class="col-md-12">		          	
				            <label for="username" class="control-label">Username</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-user"></i>
				            	<?php echo form_input(
    							 		['name'=>'username','placeholder'=>'Username','class'=>'form-control','id'=>'username']
    							 		); ?>	
				            </div>		            		            		            
				          </div>              
				        </div>
				        <div class="form-group">
				          <div class="col-md-12">
				            <label for="password" class="control-label">Password</label>
				            <div class="templatemo-input-icon-container">
				            	<i class="fa fa-lock"></i>
				            		 	
    							 	<?php echo form_password(
    							 		['name'=>'password','placeholder'=>'Password','class'=>'form-control','id'=>'password','placeholder'=>'Password']
    							 		); ?>	
				            </div>
				          </div>
				        </div>				      
				        <div class="form-group">
				          <div class="col-md-12">
				          	<?php echo form_submit(['value'=>'SIGN IN','name'=>'submit','class'=>'btn btn-warning btn-alert']);?> 
				          </div>
				        </div>
				      <?php echo form_close();?>
					</div>
 
					<div class="templatemo-other-signin col-md-6">
						 						
						  <img style="width: inherit; height: 230px;" class="img-responsive" src="<?php echo base_url('assets/imgs/4.png');?>" >
						 
					</div>

					<footer style="margin-top: 50px;">
					
					<div class="row">
						<div class="col-md-12">						 
							<i style="font-style: italic;font-size:  10pt;">Thabo Nthako</i> . <?php echo $title['IBA'];?>
						</div>
					</div>
				</footer>
				</div>				 	
		      </form>	     		      
		</div> 
	</div> 
</body> 

 

 <!-- ================= JavaScript files    =======================  -->
 <script src="<?php echo base_url('/assets/jquery/jquery.js');?>"></script>
 <script src="<?php echo base_url('/assets/bootstrap/js/bootstrap.js');?>"></script>
 
    <script type="text/javascript" language="javascript">   
            function disableBackButton()
            {
                window.history.forward(-1);
            }   
                disableBackButton();  
                window.onload=disableBackButton();  
                window.onpageshow=function(evt) {

                 if(evt.persisted) disableBackButton() }  
                        window.onunload=function() { void(0) }  
        </script> 
</body>
</html>


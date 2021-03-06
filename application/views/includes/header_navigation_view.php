
    <header class="main-header">
      
    <a href="<?php echo base_url('/index.php/Dashboard'); ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IBA</b></span>
      <!-- logo for regular state and mobile devices -->
     
      <span class="logo-lg"><b>Ikaheng Buddies</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Hide menu</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('/template/dist/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php  echo $fullname;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('/template/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $title['IBA'];?>
                  <small>Member since Nov. 2012</small>

                </p>
              </li>
              
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat" disabled>Profile</a>
                </div>
                <div class="pull-right">
                  <?php echo anchor(
                                    'dashboard/logout','<i class="fa fa-sign-out"></i><span>Sign out</span>
                                    ',array('class'=>'btn btn-default btn-flat')
                                  );?>
                 
                </div>
              </li>
            </ul>
          </li> 
        </ul>
      </div>
    </nav>
  </header>

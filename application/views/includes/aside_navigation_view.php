<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('/template/dist/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php  echo $fullname;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> 
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        
        <!-- Add dashboard link -->
        <li>
            <?php echo anchor('Dashboard',' <i class="fa fa-dashboard"></i> <span>Dashboard</span>',array('title'=>'IBA | Dashboard'));?>
        </li>

        <!-- add user link -->
         <li>
            <?php echo anchor('dashboard/user_profile','<i class="fa fa-user-plus"></i><span>Add Client</span>',array('title'=>'IBA | Add Client'));?>
         </li>

        <!-- add register link -->
         <li>
             <?php echo anchor('dashboard/register_loan','<i class="fa fa-money"></i><span>Register Loan</span>',array('title'=>'IBA | Add Client'));?>
               </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
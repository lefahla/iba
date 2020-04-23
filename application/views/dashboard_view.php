
<?php include 'includes/header_view.php';?>

<title>  <?php echo $title['dashboard'];?> | IBA <?php echo Date('Y');?></title>

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
 
 <?php include 'includes/small_top_objects_contents_view_dashboard.php';?>
 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="client_list" style="cursor: pointer;" class="table table-bordered table-striped table-hover">
                 <thead >
                            <tr>
                                <th>#</th>
                                <th>Client ID</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>City</th>
                                <th>Registration Date</th>
                            </tr>
                        </thead>
                <tbody>                            
                             <?php if(count($records)):?>
                                <?php foreach($records as $record):?>
                                    <tr>
                            <!-- remember to use union in model_dashboard.php payments and alla_clients where clientIDare the same -->
                                        <td><?php echo $record->id;?></td>
                                        <td><?php echo $record->clientID;?></td>
                                        <td><?php echo $record->firstname;?></td>
                                        <td><?php echo $record->lastname;?></td>
                                        <td><?php echo $record->city;?></td>
                                        <td><?php echo $record->reg_date;?></td>                                        
                                    </tr>
                                 <?php endforeach;?>

                             <?php endif;?>
                        </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->

            <!-- 
              52 - 83
             -->

<?php include 'includes/footer_view.php';?>
<script type="text/javascript">
  var date = new Date();
  var year = date.getFullYear();
  var day  = date.getDate();
  var month = date.getMonth()+1;


  console.log('Your date is '+year+'/'+month+'/'+day);
  var todaysDate = date.setFullYear(year,month,day);
    console.log(typeof(todaysDate));
    console.log(todaysDate);
  console.log(todaysDate > todaysDate );

</script>


</body>
</html>

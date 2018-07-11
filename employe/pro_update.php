<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IHSAN_CRM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://localhost:8080/AdminLTE-2.3.0/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost:8080/AdminLTE-2.3.0/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="http://localhost:8080/AdminLTE-2.3.0/dist/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
 
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
     <header class="main-header">

        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>C</b>RM</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>IHSAN</b>CRM</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu" style="margin-right="20%">
            <ul class="nav navbar-nav">
              

              <!-- Notifications Menu -->
              
              <!-- Tasks Menu -->
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <a class="dropdown-toggle" href="http://localhost:8080/IHSAN_CRM/logout.php">logout</a>
        
                    
          
               

              </li>
                
              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar Menu -->
           <ul class="sidebar-menu">
            <li class="header">PAGES</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="http://localhost:8080/IHSAN_CRM/main_page_e.php"><i class="fa fa-link"></i> <span>HOME PAGE</span></a></li>
			<li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Products</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="http://localhost:8080/IHSAN_CRM/employe/add_pro.php">Add Product</a></li>
                <li><a href="http://localhost:8080/IHSAN_CRM/employe/product.php">Show All Products</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Offers</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="http://localhost:8080/IHSAN_CRM/employe/add_offer.php">Add Offer</a></li>
                <li><a href="http://localhost:8080/IHSAN_CRM/employe/offers.php">Show All Offers</a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>Coummunication</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="http://localhost:8080/IHSAN_CRM/employe/E-mail.php">E-mail</a></li>
                <li><a href="https://web.whatsapp.com/">Whatsapp</a></li>
				<li><a href="http://localhost:8080/IHSAN_CRM/employe/show_suggest.php">suggest</a></li>
				<li><a href="http://localhost:8080/IHSAN_CRM/employe/all_compliment.php">compliamente</a></li>
              </ul>
            </li>
			<li><a href="http://localhost:8080/IHSAN_CRM/employe/report.php"><i class="fa fa-link"></i> <span>Reports</span></a></li>
			<li><a href="http://localhost:8080/IHSAN_CRM/employe/accpet_orders.php"><i class="fa fa-link"></i> <span>order</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">update product</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
               <?php

include"connect.php";
$product_id=$_GET['product_id'];
$query=mysql_query("select * from product where product_id=$product_id")
or die (mysql_error());

$row=mysql_fetch_assoc($query);
if(isset($_POST['update']))
{
$product_name= $_POST['product_name'];
$par_code= $_POST['par_code'];
$production_company= $_POST['production_company'];
$product_price= $_POST['product_price'];
$p_date= $_POST['p_date'];
$e_date= $_POST['e_date'];
$discretion= $_POST['discretion'];




$update=mysql_query("update product set product_name='$product_name',par_code='$par_code',production_company='$production_company',product_price='$product_price',p_date='$p_date',e_date='$e_date',discretion='$discretion' where product_id=$product_id");
header('location:product.php');
					exit();
}
?>    
                <form action="" method="post" role="form">
                  <div class="box-body">
                    <div class="form-group">
                      <label>product name</label>
                      <input name="product_name" value="<?php echo $row['product_name'];?>" type="text" class="form-control" placeholder="Enter ..." autocomplete="on">
                    </div>
                    <div class="form-group">
                      <label>par code</label>
                      <input name="par_code" value="<?php echo $row['par_code'];?>" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                      <label>production company</label>
                      <input name="production_company" value="<?php echo $row['production_company'];?>" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                    <label>price</label>
                    <div class="input-group">   
                      <span class="input-group-addon">$</span>
                      <input name="product_price" value="<?php echo $row['product_price'];?>" type="text" class="form-control">
                      <span class="input-group-addon">.00</span>                  
                    </div>
                  <label>p.date</label>
                  <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input name="p_date" value="<?php echo $row['p_date'];?>" type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                    </div>
                    <label>e.date</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input name="e_date" value="<?php echo $row['e_date'];?>" type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                    </div>
                    <div class="form-group">
                      <label>descreption</label>
                      <textarea name="discretion"  class="form-control" ><?php echo $row['discretion'];?></textarea>
                    </div>
                    
                   
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" name="update" value="update" class="btn btn-primary">UPDATE</button>
                  </div>
                </form>
              </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          <a href="https//www.facebook.com/a641995">contect us</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2017 <a href="#">Alaa and Ahmed company</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="http://localhost:8080/AdminLTE-2.3.0/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="http://localhost:8080/AdminLTE-2.3.0/bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost:8080/AdminLTE-2.3.0/dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>

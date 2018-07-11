<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IHSAN_CRM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="http://localhost:8080/IHSAN_CRM/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost:8080/IHSAN_CRM/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://localhost:8080/IHSAN_CRM/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

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
        
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
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
        <?php

include"connect.php";

$product_id=$_GET['product_id'];
$query=mysql_query("select * from product where product_id=$product_id")
or die (mysql_error());

$row=mysql_fetch_assoc($query);{
$v1=$row['jan'];
$v2=$row['feb'];
$v3=$row['mar'];
$v4=$row['apr'];
$v5=$row['may'];
$v6=$row['jun'];
$v7=$row['sanaa'];
$v8=$row['taiz'];
$v9=$row['ibb'];}



?>    
		
		<section class="content-header">
          <h1>
            <?php echo $row['product_name'];?>
            
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
         

          <div class="row">
            

           
              <!-- Bar chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">sales in time</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div id="bar-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->

              <!-- Donut chart -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <i class="fa fa-bar-chart-o"></i>
                  <h3 class="box-title">sales in area</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div id="donut-chart" style="height: 300px;"></div>
                </div><!-- /.box-body-->
              </div><!-- /.box -->
            
          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->
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

    <!-- jQuery 2.1.4 -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="http://localhost:8080/IHSAN_CRM/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://localhost:8080/IHSAN_CRM/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost:8080/IHSAN_CRM/dist/js/demo.js"></script>
    <!-- FLOT CHARTS -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/flot/jquery.flot.min.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/flot/jquery.flot.resize.min.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/flot/jquery.flot.pie.min.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="http://localhost:8080/IHSAN_CRM/plugins/flot/jquery.flot.categories.min.js"></script>
    <!-- Page script -->
	
    <script>
      $(function () {
        

       

        

        /*
         * BAR CHART
         * ---------
         */

        var bar_data = {
          data: [["January", <?php echo $v1?>], ["February", <?php echo $v2?> ], ["March", <?php echo $v3?> ], ["April", <?php echo $v4?>  ], ["May", <?php echo $v5?>  ], ["June", <?php echo $v6?>  ]],
          color: "#3c8dbc"
        };
        $.plot("#bar-chart", [bar_data], {
          grid: {
            borderWidth: 1,
            borderColor: "#f3f3f3",
            tickColor: "#f3f3f3"
          },
          series: {
            bars: {
              show: true,
              barWidth: 0.5,
              align: "center"
            }
          },
          xaxis: {
            mode: "categories",
            tickLength: 0
          }
        });
        /* END BAR CHART */

        /*
         * DONUT CHART
         * -----------
         */
		 

        var donutData = [
          {label: "sanaa", data: <?php echo $v7?>  , color: "#3c8dbc"},
          {label: "taiz", data: <?php echo $v8?>  , color: "#0073b7"},
          {label: "ibb", data: <?php echo $v9?>  , color: "#00c0ef"}
        ];
        $.plot("#donut-chart", donutData, {
          series: {
            pie: {
              show: true,
              radius: 1,
              innerRadius: 0.5,
              label: {
                show: true,
                radius: 2 / 3,
                formatter: labelFormatter,
                threshold: 0.1
              }

            }
          },
          legend: {
            show: false
          }
        });
        /*
         * END DONUT CHART
         */

      });

      /*
       * Custom Label formatter
       * ----------------------
       */
      function labelFormatter(label, series) {
        return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
                + label
                + "<br>"
                + Math.round(series.percent) + "%</div>";
      }
    </script>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>DC++</title>
    <link rel="shortcut icon" href="dist/img/dcp.jpg" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-green sidebar-mini">

<?php
      $x = $_GET['user_name'];
      $y = $_GET['user_email'];
      $z = $_GET['user_password'];
?>

<?php
$con = mysql_connect("localhost","root","root");  
mysql_select_db('dcp',$con);
$query =  "INSERT INTO `dcp`.`user` (`name`, `email`, `password`) VALUES ('$x', '$y', '$z')";
$result = mysql_query($query,$con);

?>

    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
           <img src="dist/img/dcp.jpg" height="60px" style ="float:left" class="user-image" alt="User Image" />
                    <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>DC</b><i class="fa fa-plus"></i><i class="fa fa-plus"></i></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                
            
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                                
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="index2.html" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <!--<li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>-->
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
   
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="submit.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             </li>
            
            <li>
              <a href="view.php">
                <i class="fa fa-laptop"></i> <span>View</span>
                <small class="label pull-right bg-yellow">102</small>
              </a>
            </li>
            
            <li><a href="up.php"><i class="fa fa-upload"></i> <span>Upload</span></a></li>
           </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           <strong> Dashboard </strong>
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="submit.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-area-chart"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Site Traffic</span>
                  <span class="info-box-number">79<small>%</small></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Members</span>
                  <span class="info-box-number">155</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Monthly Upload data</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Data: 1 Jan, 2014 - 30 Jul, 2014</strong>
                      </p>
                      <div class="box-body">
                      <div class="row">
                        <div class="col-md-8">
                          <div class="chart-responsive">
                            <canvas id="pieChart" height="150"></canvas>
                          </div><!-- ./chart-responsive -->
                        </div><!-- /.col -->
                        <div class="col-md-4">
                          <ul class="chart-legend clearfix">
                            <li><i class="fa fa-circle-o text-red"></i>Movies</li>
                            <li><i class="fa fa-circle-o text-green"></i>Books</li>
                            <li><i class="fa fa-circle-o text-yellow"></i>Softwares</li>
                            <li><i class="fa fa-circle-o text-aqua"></i>Images</li>
                            
                          </ul>
                        </div><!-- /.col -->
                      </div><!-- /.row -->
                    </div><!-- /.box-body -->
                  </div><!-- /.col -->
                   </div>

                      <div class="chart">
                        <!-- Sales Chart Canvas -->
                       <canvas id="salesChart" height="70"></canvas>
                      </div><!-- /.chart-responsive -->
                      <div class="box box-default">
                      <div class="box-header with-border">
                        
                       <div class="col-md-4">
                    
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 13%</span>
                        <!--<h5 class="description-header">$35,210.43</h5>-->
                        <br>
                        <span class="description-text">TOTAL VIEWS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 42%</span>
                       <!-- <h5 class="description-header">$10,390.90</h5>-->
                      <br>
                        <span class="description-text">TOTAL UPLOADS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                       <!-- <h5 class="description-header">$24,813.53</h5>-->
                        <br>
                        <span class="description-text">TOTAL DOWNLOADS</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                   <!-- <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">1200</h5>
                        <span class="description-text">GOAL COMPLETIONS</span>
                      </div>--><!-- /.description-block -->
                    <!--</div>-->
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- MAP & BOX PANE -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Visitors Report</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad">
                        <!-- Map will be created here -->
                        <div id="world-map-markers" style="height: 325px;"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class="col-md-3 col-sm-4">
                      <div class="pad box-pane-right bg-green" style="min-height: 280px">
                        <div class="description-block margin-bottom">
                          <div class="sparkbar pad" data-color="#fff">20,40,100,23,12,4</div>
                          <h5 class="description-header">230</h5>
                          <span class="description-text">Visits</span>
                        </div><!-- /.description-block -->
                        
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <div class="row">
                
                
              </div><!-- /.row -->

              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Movies</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>IMDB Rating</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Popularity</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="#">7.4</a></td>
                          <td>Call of Duty IV</td>
                          <td><span class="label label-success">Uploaded</span></td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="#">8.0</a></td>
                          <td>Dark night rises</td>
                          <td><span class="label label-warning">Pending</span></td>
                          <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href="#">9.4</a></td>
                          <td>Inception</td>
                          <td><span class="label label-danger">Uploaded</span></td>
                          <td><div class="sparkbar" data-color="#f56954" data-height="20">90,80,90,70,100,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="#">8.2</a></td>
                          <td>Dabang</td>
                          <td><span class="label label-info">Uploaded</span></td>
                          <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
                        </tr>
                     </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <!--<div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
                </div>--><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-md-4">
              <!-- Info Boxes Style 2 -->
              <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="ion ion-ios-pricetag-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Inventory</span>
                  <span class="info-box-number">5,200</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 50%"></div>
                  </div>
                  <span class="progress-description">
                    50% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-green">
                <span class="info-box-icon"><i class="ion ion-ios-heart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Mentions</span>
                  <span class="info-box-number">92,050</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 20%"></div>
                  </div>
                  <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-red">
                <span class="info-box-icon"><i class="ion ion-ios-cloud-download-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Downloads</span>
                  <span class="info-box-number">114,381</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                  </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
              <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="ion-ios-chatbubble-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Direct Messages</span>
                  <span class="info-box-number">163,921</span>
                  <div class="progress">
                    <div class="progress-bar" style="width: 40%"></div>
                  </div>
                  <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->

              <div class="box box-default">
                
               
              </div><!-- /.box -->

              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Recently Added Files</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="http://www.paperlesschase.com/wp-content/uploads/2014/10/pdf-logo.png" alt="Product Image" />
                      </div>
                      <div class="product-info">
                        <a href="#" class="product-title">Maths_Assignment.pdf</a>
                    
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="http://www.paperlesschase.com/wp-content/uploads/2014/10/pdf-logo.png" alt="Product Image" />
                      </div>
                      <div class="product-info">
                        <a href="#" class="product-title">Pyhsics_Assignment.pdf</a>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
               </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Beta</b>Version1.0         
          </div>
        <strong>Copyright &copy; 2015-2016 <a href="http://www.iiits.ac.in/">IIIT-Sricity</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->

         

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>

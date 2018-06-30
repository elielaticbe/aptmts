<?php
error_reporting(0);
require 'functions/conect.php';
?>
<?php
session_start();
if(isset($_SESSION["userName"])){
$comp = $_SESSION["companyid"];
$compemail = $_SESSION["companyemail"];
$chiefmail = $_SESSION["chiefemail"];
}else{
	header('Location:index.php');
}
//pagination

//for admin details
	$total = "";
    $start = 0;
	$limit = 8;
if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$start = ($id-1) * $limit;
	}else{
		$id = 1;
	
	}
	
	//for bus details
	$btotal = "";
    $bstart = 0;
	$blimit = 8;
if(isset($_GET['bid']))
	{
		$bid = $_GET['bid'];
		$bstart = ($bid-1) * $blimit;
	}else{
		$bid = 1;
	
	}
	
	//for offers details
	$ototal = "";
    $ostart = 0;
	$olimit = 8;
if(isset($_GET['oid']))
	{
		$oid = $_GET['oid'];
		$ostart = ($oid-1) * $olimit;
	}else{
		$oid = 1;
	
	}
	
	//for events details
	$etotal = "";
    $estart = 0;
	$elimit = 8;
if(isset($_GET['eid']))
	{
		$eid = $_GET['eid'];
		$estart = ($eid-1) * $elimit;
	}else{
		$eid = 1;
	
	}
	
	//end pagination
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>APTMTS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="pictures/<?php echo"".$compemail; ?>.png" height="50px" width="200px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="pictures/<?php echo"".$compemail; ?>.png" height="50px" width="200px"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="pictures/<?php echo"".$chiefmail; ?>.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo"".$_SESSION["userName"] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="pictures/<?php echo"".$chiefmail; ?>.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION["userName"] ?> - Chief Administrator
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="?con=changeprofileAdmin" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
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
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		<li>
          <a href="?con=homechief">
            <span>home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            </i> <span> Administrators</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?con=regadministrator">Add Admin</a></li>
            <li><a href="?con=viewAdmin" class="active">View Admin</a></li>
          </ul>
        </li>
        <li>
          <a href="?con=viewBuschief">
            <span>Buses</span>
          </a>
        </li>
        <li>
          <a href="?con=viewOfferschief">
           <span>Offers</span>
          </a>
        </li>
        <li>
          <a href="?con=viewEventschief">
           <span>Events</span>
          </a>
        </li>
		<li>
          <a href="?con=viewReports">
           <span>View reports</span>
          </a>
        </li>
        <li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
    <!-- Your Page Content Here -->
<?php
error_reporting(0);
 
if($_REQUEST['con'] == 'homechief')
{
		include("homechief.php");
		
}elseif($_REQUEST['con'] == 'regadministrator'){

	include("regadministrator.php");
	
}elseif($_REQUEST['con'] == 'viewAdmin'){

include("viewAdmin.php");

}elseif($_REQUEST['con'] == 'viewBuschief'){

	include("viewBuschief.php");
	
}elseif($_REQUEST['con'] == 'viewOfferschief'){

	include("viewOfferschief.php");

}elseif($_REQUEST['con'] == 'viewEventschief'){

	include("viewEventschief.php");
	
}elseif($_REQUEST['con'] == 'viewReports'){

include("viewReports.php");

}elseif($_REQUEST['con'] == 'changeprofileAdmin'){

	include("changeprofileAdmin.php");
	
}elseif($_REQUEST['id'] == $id){
	
	include("viewAdmin.php");
	
}elseif($_REQUEST['bid'] == $bid){

		include("viewBuschief.php");

}elseif($_REQUEST['oid'] == $oid){ 
		
		include("viewOfferschief.php");
		
}elseif($_REQUEST['eid'] == $eid){

		include("viewEventschief.php");
		
}else{
	
		include("homechief.php");
		
}
	
?>
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer bg-green">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1
    </div>
    <strong>Copyright &copy; 2014-2016 All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="assets/plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="assets/dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/dist/js/demo.js"></script>
</body>
</html>

<?php
error_reporting(0);
require 'functions/conect.php';
?>
<?php
session_start();
if(isset($_SESSION["userName"])){
$comp = $_SESSION["companyid"];
$sqlz = "SELECT companyemail FROM company WHERE companyid = $comp";
$resultz = $mysqli->query($sqlz);

$sqlp = "SELECT id FROM chiefadministrator WHERE email = '".$_SESSION["email"]."'";
$resultp = $mysqli->query($sqlp);
}else{
	header('Location:index.php');
}
//pagination

//for route details
$rtotal = "";
$rstart = 0;
$rlimit = 8;
if(isset($_GET['rid']))
	{
		$rid = $_GET['rid'];
		$rstart = ($rid-1) * $rlimit;
	}else{
		$rid = 1;
	
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
	<?php 
		if($resultz->num_rows >0){
		if($rowz = $resultz->fetch_assoc()){
	?>
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="pictures/<?php echo"".$rowz["companyemail"]; ?>.png" height="50px" width="200px"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="pictures/<?php echo"".$rowz["companyemail"]; ?>.png" height="50px" width="200px"></span>
    </a>
	<?php }}?>
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
              <img src="pictures/<?php echo"".$_SESSION["email"]; ?>.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo"".$_SESSION["userName"] ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="pictures/<?php echo"".$_SESSION["email"]; ?>.png" class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION["userName"]; ?> - Administrator
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
				<?php
					if($resultp->num_rows >0){
						if($rowp = $resultp->fetch_assoc()){
				?>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="junioradmin.php?id=<?=$rowp['id']?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
				<?php
				}}
				?>
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
        <li class="header">Dash Board</li>
		<li>
          <a href="?con=home">
            <span>home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            </i> <span> Routes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?con=addRoute">Add Routes</a></li>
            <li><a href="?con=viewRoute" class="active">View Routes</a></li>
          </ul>
        </li>
		<li>
          <a href="?con=viewBus">
            <span> View Buses</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            </i> <span> Offers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?con=offers">Add Offers</a></li>
            <li><a href="?con=viewOffers" class="active">View offers</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            </i> <span> Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?con=events">Add events</a></li>
            <li><a href="?con=viewEvents" class="active">View events</a></li>
          </ul>
        </li>
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

	$sql = "SELECT routeid FROM routes WHERE routeid = ".$_GET['routeid'];
	$result = $mysqli->query($sql);
	if($result->num_rows >0){
		if($row = $result->fetch_assoc()){
		$routeid = $row['routeid'];
		include("addbus.php");
		}
	}
	
	$sqlk = "SELECT id FROM chiefadministrator WHERE id = ".$_GET['id'];
	$resultk = $mysqli->query($sqlk);
	if($resultk->num_rows >0){
		if($rowk = $resultk->fetch_assoc()){
			$id = $rowk['id'];
		}
	}
	
if($_REQUEST['con'] == 'home'){

		include("home.php");
		
}elseif($_REQUEST['con'] == 'addRoute'){

	include("addRoute.php");
	
}elseif($_REQUEST['con'] == 'viewRoute'){

	include("viewRoute.php");

}elseif($_REQUEST['con'] == 'viewBus'){

	include("viewBus.php");
	
}elseif($_REQUEST['con'] == 'offers'){

	include("offers.php");

}elseif($_REQUEST['con'] == 'events'){

	include("events.php");
	
}elseif($_REQUEST['con'] == 'viewOffers'){

	include("viewOffers.php");

}elseif($_REQUEST['con'] == 'viewEvents'){

	include("viewEvents.php");
	
}elseif($_REQUEST['rid'] == $rid){

		include("viewRoute.php");

}elseif($_REQUEST['bid'] == $bid){ 
		
		include("viewBus.php");
		
}elseif($_REQUEST['oid'] == $oid){

		include("viewOffers.php");
		
}elseif($_REQUEST['eid'] ==  $eid){
	
	include("viewEvents.php");

}elseif($_REQUEST['id'] == $_GET['id']){
	
	include("changeprofile.php");
	
}else{
	
	include("home.php");
		
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
    <strong>Copyright &copy; 2016-2017 All rights
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

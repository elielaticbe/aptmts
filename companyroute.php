<?php
//error_reporting(0);
include'functions/conect.php';
$sql = "SELECT routeid FROM routes WHERE routeid = ".$_GET['routeid'];
if($mysqli->query($sql)){
	header('Location:junioradmin.php?con=addbus');
}else{
	echo "Error ".$mysqli->error;
}

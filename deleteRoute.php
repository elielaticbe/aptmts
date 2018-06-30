<?php
//error_reporting(0);
include'functions/conect.php';
$sql = "DELETE FROM routes WHERE routeid = ".$_GET['routeid'];
if($mysqli->query($sql)){
	header('Location:junioradmin.php?con=viewRoute');
}else{
	echo "Error ".$mysqli->error;
}

<?php
//error_reporting(0);
include'functions/conect.php';
$sql = "DELETE FROM chiefadministrator WHERE id = ".$_GET['id'];
if($mysqli->query($sql)){
	header('Location:chiefadmindash.php?con=viewAdmin');
}else{
	echo "Error ".$mysqli->error;
}

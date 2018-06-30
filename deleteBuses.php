<?php
//error_reporting(0);
include'functions/conect.php';
$sql = "DELETE FROM bus WHERE busid = ".$_GET['busid'];
if($mysqli->query($sql)){
	header('Location:junioradmin.php?con=viewBus');
}else{
	echo "Error ".$mysqli->error;
}

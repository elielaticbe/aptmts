<?php
//error_reporting(0);
include'functions/conect.php';
$sql = "DELETE FROM events WHERE id = ".$_GET['id'];
if($mysqli->query($sql)){
	header('Location:junioradmin.php?con=viewEvents');
}else{
	echo "Error ".$mysqli->error;
}

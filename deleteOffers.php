<?php
//error_reporting(0);
include'functions/conect.php';
$sql = "DELETE FROM offers WHERE id = ".$_GET['id'];
if($mysqli->query($sql)){
	header('Location:junioradmin.php?con=viewOffers');
}else{
	echo "Error ".$mysqli->error;
}

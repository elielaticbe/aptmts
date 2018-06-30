<?php
//error_reporting(0);
include'functions/conect.php';
if(isset($_POST['upload'])){
	$sql = "INSERT INTO routes(companyid,departingarea,destinationarea,routefare)
	VALUES('".$comp."','".$_POST['departingarea']."','".$_POST['destinationarea']."','".$_POST['routefare']."')";
	if($mysqli->query($sql)){
		?>
		<P style="color:green"><b>Route successfully added!</b> please click below to view</p>
<?php
	}else{
		echo "Errro".$mysqli->error;
	}
}
?>
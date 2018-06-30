<?php
//error_reporting(0);
include'functions/conect.php';

if(isset($_POST['upload'])){
	$sql = "INSERT INTO events(companyid,name,description,meetingPoint,venue,departureTime,endDate)
	VALUES('".$comp."','".$_POST['name']."','".$_POST['description']."','".$_POST['meetingPoint']."','".$_POST['venue']."','".$_POST['departureTime']."','".$_POST['endDate']."')";
	if($mysqli->query($sql)){
		?>
		<P style="color:green"><b>Event successfully added!</b> please click below to view</p>
<?php
	}else{echo "Errro".$mysqli->error;
	}
}
?>
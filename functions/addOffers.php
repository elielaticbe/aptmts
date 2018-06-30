<?php
//error_reporting(0);
include'functions/conect.php';

if(isset($_POST['upload'])){
	$sql = "INSERT INTO offers(companyid,name,description,duration)
	VALUES('".$comp."','".$_POST['name']."','".$_POST['description']."','".$_POST['duration']."')";
	if($mysqli->query($sql)){
		?>
		<P style="color:green"><b>Offer successfully added!</b> please click below to view</p>
<?php
	}else{echo "Errro".$mysqli->error;
	}
}
?>
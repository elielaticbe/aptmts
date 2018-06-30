<?php
//error_reporting(0);
include'functions/conect.php';
$accesslevel = 2;

	$sql = "INSERT INTO chiefadministrator(companyid,fName,lName,email,userName,password,branch,sex,accesslevel)
	VALUES('".$comp."','".$_POST['fName']."','".$_POST['lName']."','".$_POST['email']."','".$_POST['userName']."','".md5($_POST['password'])."','".$_POST['branch']."','".$_POST['sex']."','".$accesslevel."')";
	if($mysqli->query($sql)){
		?>
		<P style="color:green"><b>Admin successfully added!</b> please click below to view</p>
<?php
	}else{echo "Errro".$mysqli->error;
	}

?>
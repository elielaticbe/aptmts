<?php
//error_reporting(0);
include'functions/conect.php';
$accesslevel = 1;

	if(isset($_POST['btn_submit'])){
	$sql = "INSERT INTO company(logo,companyName,companyBusType,mobileMoneyNumber,companyemail,profile,fName,lName,password,chiefemail,userName,sex,accesslevel)
	VALUES('".$_FILES['file']['tmp_name']."','".$_POST['companyName']."','".$_POST['companyBusType']."','".$_POST['mobileMoneyNumber']."','".$_POST['companyemail']."','".$_FILES['files']['tmp_name']."','".$_POST['fName']."','".$_POST['lName']."','".md5($_POST['password'])."','".$_POST['chiefemail']."','".$_POST['userName']."','".$_POST['sex']."','".$accesslevel."')";
	if($mysqli->query($sql)){
		move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$_POST['companyemail'].".png");
		move_uploaded_file($_FILES['files']['tmp_name'],"pictures/".$_POST['chiefemail'].".png");
		header('Location: index.php');
	}else{echo "Errro".$mysqli->error;
	}
}
?>
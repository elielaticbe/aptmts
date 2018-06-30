<?php
//error_reporting(0);
include'functions/conect.php';
$accesslevel = 1;
if(isset($_POST['btn_submit'])){
	$sql = "INSERT INTO chiefadministrator(image,fName,lName,email,userName,password,sex,accesslevel)
	VALUES('".$_FILES['file']['tmp_name']."','".$_POST['fName']."','".$_POST['lName']."','".$_POST['email']."','".$_POST['userName']."','".md5($_POST['password'])."','".$_POST['sex']."','".$accesslevel."')";
	if($mysqli->query($sql)){
		move_uploaded_file($_FILES['file']['tmp_name'],"pictures/$_POST[email].png");
		header('Location: index.php');
	}else{echo "Errro".$mysqli->error;
	}
}
?>
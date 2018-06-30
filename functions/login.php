<?php
//error_reporting(0);
include'functions/conect.php';
	/* User login process, checks if user exists and password is correct */

// Escape username to protect against SQL injections
$userName = $mysqli->escape_string($_POST['userName']);
$result = $mysqli->query("SELECT * FROM chiefadministrator WHERE userName='$userName'");
$results = $mysqli->query("SELECT * FROM company WHERE userName='$userName'");

if ( $result->num_rows){ // User exists
$user = $result->fetch_assoc();
$access = $user['accesslevel'];
if ( md5($_POST['password']) == $user['password']) {
	
	if($access == 1){
        session_start();
        $_SESSION['userName'] = $user['userName'];
        $_SESSION['companyid'] = $user['companyid'];
		$_SESSION['companyemail'] = $user['companyemail'];
		$_SESSION['chiefemail'] = $user['chiefemail'];
		
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
		
        header("location: chiefadmindash.php");
		}elseif($access == 2){
			session_start();
        $_SESSION['userName'] = $user['userName'];
        $_SESSION['companyid'] = $user['companyid'];
        $_SESSION['email'] = $user['email'];
        //$_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: junioradmin.php");
			}else{
				$_SESSION['message'] = "You must be a chief admin or junior admin to access this panel";
		echo $_SESSION['message'];
				}
    }else{
		$_SESSION['message'] = "You have entered wrong password, try again!";
		echo $_SESSION['message'];
		}

}elseif($results->num_rows){

$users = $results->fetch_assoc();
$access = $users['accesslevel'];
if ( md5($_POST['password']) == $users['password']) {
	
	if($access == 1){
        session_start();
        $_SESSION['userName'] = $users['userName'];
        $_SESSION['companyid'] = $users['companyid'];
		$_SESSION['companyemail'] = $users['companyemail'];
        $_SESSION['chiefemail'] = $users['chiefemail'];
        //$_SESSION['active'] = $user['active'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: chiefadmindash.php");
		}elseif($access == 2){
			session_start();
        $_SESSION['userName'] = $users['userName'];
        $_SESSION['companyid'] = $users['companyid'];
		$_SESSION['email'] = $users['email'];
		
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;

        header("location: junioradmin.php");
			}else{
				$_SESSION['message'] = "You must be a chief or junior admin to access this panel";
		echo $_SESSION['message'];
				}
    }else{
		$_SESSION['message'] = "You have entered wrong password, try again!";
		echo $_SESSION['message'];
		}


}else { // User does not exists
    
    $_SESSION['message'] = "Invalid username! please try again";
	echo $_SESSION['message'];
}


	
	


?>
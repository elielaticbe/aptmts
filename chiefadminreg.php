<!------------javascript----------->
<script type="text/javascript">

function validateForm() {
//company validation
var companyName = document.forms["chiefreg"]["companyName"].value;
var mobileMoneyNumber = document.forms["chiefreg"]["mobileMoneyNumber"].value;
var companyemail = document.forms["chiefreg"]["companyemail"].value;
var fName = document.forms["chiefreg"]["fName"].value;
var lName = document.forms["chiefreg"]["lName"].value;
var chiefemail = document.forms["chiefreg"]["chiefemail"].value;
var password = document.forms["chiefreg"]["password"].value;
var confirmpassword = document.forms["chiefreg"]["confirmpassword"].value;
var userName = document.forms["chiefreg"]["userName"].value;

var letters = /^[A-Za-z ]+$/; 
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
var numbers = /^[0-9]+$/;
var mob_len = mobileMoneyNumber.length; 
var password_len = password.length; 
	
	if(companyName.match(letters))  
	{   
		
		if(mob_len != 10)
		{
			alert("mobile number must be 10 digits long!");  
			return false;
				
		}else{
			if(mobileMoneyNumber.match(numbers))
			{
				if(companyemail.match(mailformat))
				{
					if(fName.match(letters))
					{
						if(lName.match(letters))
						{
							
							
								if(chiefemail.match(mailformat))
								{
									if(password_len < 6)
									{
										alert("password must be atleast 10 characters long!");  
										return false;  
				
									}else{
										if(confirmpassword.match(password))
										{
											if(userName.match(letters))
											{
												return true;
											}else{
												alert('user name must have alphabet characters only!');  
												return false;
											}
											}else{
												alert("passwords don't match, please re-enter password!");
												return false;
											}
										}
					
								}else{
									alert('invalid email format!');
									return false;
								}
							
					
						}else{
							alert('last name name must have alphabet characters!');
							return false;
						}
					
					}else{
						alert('first name must have alphabet characters!');
						return false;
					}
				}else{
					alert('invalid email address!');  
					return false;
				}
					
			}else{
				alert("mobile number must have numeric characters!");
				return false;
			}
		}
		
	}else{  
		alert('company name must have alphabet characters only');  
		return false;
	} 

//admin validation


var password_len = password.length;  
	
	if(fName.match(letters))  
	{  
		if(lName.match(letters))
		{  
			if(email.match(mailformat))  
			{
				if(password_len < 10)
				{
					alert("password must be atleast 10 characters long!"); 
					//loadUrl('chiefadminreg.php'); 
					return false;  
				
				}else{
					if(confirmpassword.match(password))
					{
						if(userName.match(letters))
						{
							return true;
						}else{
							alert('user name must have alphabet characters only');  
							//loadUrl('chiefadminreg.php');
							return false;
						}
					}else{
						alert("passwords don't match, please re-enter password!");
						//loadUrl('chiefadminreg.php');
						return false;
					}
				}
			}else{  
				alert("You have entered an invalid email address!");
				//loadUrl('chiefadminreg.php');  
				return false;  
			}  
		}else{
			alert('last name must have alphabet characters only');
			//loadUrl('chiefadminreg.php');			
			return false; 
		}
	}else{  
	alert('First name must have alphabet characters only'); 
	//loadUrl('chiefadminreg.php'); 
	return false;  
	}  

}
</script>
<!-------------php---------------->
<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['btn_submit'])) {
	
	//user registration
	require 'functions/registerco.php';
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TicketIn</title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>TicketIn</strong> registration form</h1>
                            <div class="description">
                            	<p>
	                            	Please register to continue... 
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                            </div>               
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="signup-form" name="chiefreg" enctype="multipart/form-data" onsubmit="return validateForm()">
									<div class="form-group">
									<p><b>Enter company details below</b></p>
										<label for="exampleInputFile">upload company Logo</label>
										<input type="file" name="file" required>
									</div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Company Name</label>
			                        	<input type="text" name="companyName" placeholder="Company Name" class="form-username form-control" id="form-username" required>
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Company Bus Type</label>
			                        	<select type="text" name="companyBusType" class="form-username form-control" id="form-username"><option>--select bus type--</option><option>Commuter</option><option>Longdistance</option><option>International</option></select>
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">company Mobile Money Number</label>
			                        	<input type="text" name="mobileMoneyNumber" placeholder="company Mobile money number" class="form-username form-control" id="form-username" required>
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">company Email Adress</label>
			                        	<input type="text" name="companyemail" placeholder="company email" class="form-email form-control" id="form-email" required>
			                        </div>

                                	<div class="form-group">
										<p><b>Enter chief admin personal details below</b></p>
                                        <label  for="first-name">Upload Profile Picture 
                                        </label>
                                            <input type="file" id="fileUpload" required name="files">
                                    </div>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">First Name</label>
			                        	<input type="text" name="fName" placeholder="First Name" class="form-username form-control" id="form-username" required>
										
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">LastName</label>
			                        	<input type="text" name="lName" placeholder="Last Name" class="form-username form-control" id="form-username" required>

			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Chief Admin Email</label>
			                        	<input type="text" name="chiefemail" placeholder="Chief Admin Email" class="form-username form-control" id="form-username" required>
										
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password" required>
			                        </div>
                                    <div class="form-group">
			                        	<label class="sr-only" for="password">Confirm Password</label>
			                        	<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-password form-control" id="form-password" required>
			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">User Name</label>
			                        	<input type="text" name="userName" placeholder="Username" class="form-email form-control" id="form-email" required>

			                        </div>
                                    <div class="form-group">
			                    		<label class="sr-only" for="form-username">Sex</label>
			                        	<select type="text" name="sex" class="form-username form-control" id="form-username" required="required"><option>--Gender--</option><option>Male</option><option>Female</option></select>
			                        </div>
			                        
			                        <button type="submit" class="btn" name="btn_submit">Register!</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>
</html>
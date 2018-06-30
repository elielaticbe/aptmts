<script type="text/javascript">

function validateForm() {
var fName = document.forms["junreg"]["fName"].value;
var lName = document.forms["junreg"]["lName"].value;
var email = document.forms["junreg"]["email"].value;
var password = document.forms["junreg"]["password"].value;
var confirmpassword = document.forms["junreg"]["confirmpassword"].value;
var userName = document.forms["junreg"]["userName"].value;
var branch = document.forms["junreg"]["branch"].value;

var letters = /^[A-Za-z ]+$/; 
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
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
					return false;  
				
				}else{
					if(confirmpassword.match(password))
					{
						if(userName.match(letters))
						{
							return true;
						}else{
							alert('user name must have alphabet characters only');    
							return false;
						}
					}else{
						alert("passwords don't match, please re-enter password!");
					}
				}
			}else{  
				alert("You have entered an invalid email address!");    
				return false;  
			}  
		}else{
			alert('last name must have alphabet characters only');   
			return false; 
		}
	}else{  
	alert('First name must have alphabet characters only');    
	return false;  
	}  
	
}
</script>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['upload'])) { 
	
        require 'functions/registerJuniorAdministrator.php';
		}
        
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/build/css/custom.min.css" rel="stylesheet">
</head>
        <!-- page content --> 
<a href="chiefadmindash.php?con=viewAdmin" class="btn btn-success btn-flat">View Added Administrators</a>
<div class="box box-success"><span></br></span>		
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                                <form action="#" method="post" name="junreg" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" onsubmit="return validateForm()">
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">First Name 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="fName">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Last Name 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="lName">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Email 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">password 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="password">
                                        </div>
                                    </div>
									<div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">confirm password 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="confirmpassword">
                                        </div>
                                    </div>
									<div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">userName 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="userName">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Branch 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required class="form-control col-md-7 col-xs-12" name="branch">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gender
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select id="heard"  required="required" class="form-control" name="sex">
                                            <option value="">Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        </div>
                                    </div>
                                        <br/>
                                        <button type="submit" name="upload" class="btn btn-success pull-right">Register</button></br>
                                </form>
                    </div>
                </div>
			</div>	
        <!-- /page content -->
<!-- jQuery -->
<script src="assets/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="assets/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="assets/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="assetsassets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="assets/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="assets/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="assets/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="assets/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="assets/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="assets/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="assets/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="assets/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="assets/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="assets/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="assets/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="assets/build/js/custom.min.js"></script>
</html>

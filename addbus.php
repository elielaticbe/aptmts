<!------------javascript---------->
<script type="text/javascript">

function validateForm() {
var busNumber = document.forms["bus"]["busNumber"].value;
var busTerminal = document.forms["bus"]["busTerminal"].value;
var seatcapacity = document.forms["bus"]["seatcapacity"].value;
var departureTime = document.forms["bus"]["departureTime"].value;
var arrivalTime = document.forms["bus"]["arrivalTime"].value;

var letters = /^[A-Za-z ]+$/; 
var numbers = /^[0-9:]+$/;
var numberss = /^[0-9]+$/;
var bnum = /^[0-9a-zA-Z ]+$/; 
	
	if(busNumber.match(bnum))  
	{  
		if(busTerminal.match(letters))
		{
			if(seatcapacity.match(numberss))
			{
				if(departureTime.match(numbers))  
				{
					if(arrivalTime.match(numbers)){
						return true;
					}else{
						alert('arrival time must be of the form hh-mm-ss');
						return false;
					}
				}else{  
					alert(" departure time must be of the form hh-mm-ss!");
					return false;
				}
			}else{
				alert("seat capacity must have numeric characters only!");
				return false;
			}
		}else{
			alert('description must have alphabet characters only');			
			return false; 
		}
	}else{  
	alert('bus nunmber must have alphanumeric characters only');  
	return false;  
	}  
}
</script>
<!------------------php------------------>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['upload'])) { 
		require 'functions/conect.php';
		if(isset($_POST['upload'])){
		$sql = "INSERT INTO bus(companyid,busNumber,busTerminal,seatcapacity,departureTime,arrivalTime,routeid)
		VALUES('".$comp."','".$_POST['busNumber']."','".$_POST['busTerminal']."','".$_POST['seatcapacity']."','".$_POST['departureTime']."','".$_POST['arrivalTime']."','".$routeid ."')";
	if($mysqli->query($sql)){
		header('Location:junioradmin.php?con=viewBus');
		?>
		<P style="color:green"><b>Bus successfully added!</b> please click below to view</p>
<?php
	}else{
		echo "Errro".$mysqli->error;
	}
}
        
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
</head>    <body>
        <!-- page content -->
		<a href="junioradmin.php?con=viewBus" class="btn btn-success btn-flat">View Added buses</a>
            <div class="box box-success"><span></br></span>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                    <div>
                   <p><h2 align="center"> Add bus information here</h2></p>
                    </div>
                        
                                <form action="#" method="post" name="bus" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" onsubmit="return validateForm()">
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Bus Number 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="busNumber">
                                        </div>
                                    </div>
									<div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Bus Terminal 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="busTerminal">
                                        </div>
                                    </div>
									<div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Seat Capacity 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="seatcapacity">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Departure time 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="departureTime">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Arrival time 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="arrivalTime">
                                        </div>
                                    </div>
                                        <br/>
                                        <button type="submit" name="upload" class="btn btn-success pull-right">Submit</button>

                                </form>
                    </div>
                </div>
			</div>
		</body>
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

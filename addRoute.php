<script type="text/javascript">

function validateForm() {
var departingarea = document.forms["route"]["departingarea"].value;
var destinationarea = document.forms["route"]["destinationarea"].value;
var routefare = document.forms["route"]["routefare"].value;

var letters = /^[A-Za-z ]+$/; 
var numbers = /^[0-9]+$/;  
	
	if(departingarea.match(letters))  
	{  
		if(destinationarea.match(letters))
		{  
			if(routefare.match(numbers))  
			{
				return true;
			}else{  
				alert("route fare must have numeric!");
				return false;
			}  
		}else{
			alert('destination point must have alphabet characters only');			
			return false; 
		}
	}else{  
	alert('origin must have alphabet characters only');  
	return false;  
	}  
}
</script>

<!------------------php------------------>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['upload'])) { 

        require 'functions/addRoutefunct.php';
        
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
		<a href="junioradmin.php?con=viewRoute" class="btn btn-success btn-flat">View Added Routes</a>
			<div class="box box-success"><span></br></span>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                    <div>
                   <p><h2 align="center"> Add Route information here</h2></p>
                    </div>
                                <form action="#" method="post" enctype="multipart/form-data" data-parsley-validate name="route" class="form-horizontal form-label-left" onsubmit="return validateForm()">
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Origin 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="departingarea">
                                        </div>
                                    </div>
									<div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Destination  
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="destinationarea">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Route Fare 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="routefare">
                                        </div>
                                    </div>
                                        <br/>
                                        <button type="submit" name="upload" class="btn btn-success pull-right">Submit</button>
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

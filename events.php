<!-------javascript------->

<script type="text/javascript">

function validateForm() {
var name = document.forms["event"]["name"].value;
var description = document.forms["event"]["description"].value;
var meetingPoint = document.forms["event"]["meetingPoint"].value;
var venue = document.forms["event"]["venue"].value;
var departureTime = document.forms["event"]["departureTime"].value;
var endDate = document.forms["event"]["endDate"].value;

var letters = /^[A-Za-z ]+$/; 
var time = /^[0-9:]+$/;
var date = /^[0-9-]+$/;  
	
if(name.match(letters))  
{  
	if(description.match(letters))
	{ 
		if(meetingPoint.match(letters))
		{ 
			if(venue.match(letters))  
			{
				if(departureTime.match(time))
				{
					if(endDate.match(date))
					{
						return true;
					}
					else{
						alert('end date must be of the form YY-MM-DD');
						return false;
					}
				}
				else{
					alert('departure time must be of the form hr:mm:ss');
					return false;
				}
			}
			else{
				alert('venue must have alphabet only');
				return false;
				}
		}
		else{  
			alert("meeting point must have alphabet characters!");
			return false;
			}  
	}
	else{
		alert('Description must be in aphabetical letters');			
		return false; 
	}
}
else{  
	alert('Event name must be in aphabetical letters');  
	return false;  
}  

}
</script>


<!--------php--------->
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['upload'])) { 

        require 'functions/addevents.php';
        
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
		<a href="junioradmin.php?con=viewEvents" class="btn btn-success btn-flat">View Added Events</a>
            <div class="box box-success"><span></br></span>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                    <div>
                   <p><h2 align="center"> Add events here</h2></p>
                    </div>
                        
                                <form action="#" method="post" name="event" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" onsubmit="return validateForm()">
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Name 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Description 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="description">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Meeting Point 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="meetingPoint">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Event Venue 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="venue">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Departure Time 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="departureTime">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Date 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="endDate">
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

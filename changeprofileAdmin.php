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
            <?php
	require'functions/conect.php';
	$sqle = "SELECT userName,chiefemail FROM company WHERE companyid = $comp";
	$resulte = $mysqli->query($sqle);
	if($resulte->num_rows >0){
		if($rowe = $resulte->fetch_assoc()){
		
?>
			<div class="box box-success"><span></br></span>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                    <div>
                   <p><h2 align="center"> Please fill in to update your profile</h2></p>
                    </div>
                        
                                <form action="" method="post" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
									<div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Profile picture 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
											<input type="file" name="file">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">User Name 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="userName" value = "<?php echo $rowe["userName"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">New Password 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group form">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Crop-name">Confirm New password 
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="confirmpassword">
                                        </div>
                                    </div>
                                        <br/>
                                        <button type="submit" name="updateprof" class="btn btn-success pull-right">update</button>

                                </form>
				<?php 
				}} 
				if(isset($_POST["updateprof"])){
					$sqlt = "UPDATE company SET profile = '".$_FILES['file']['tmp_name']."', userName = '".$_POST['userName']."', password = '".md5($_POST['password'])."' WHERE companyid = $comp";

					if ($mysqli->query($sqlt) === TRUE) {
						move_uploaded_file($_FILES['file']['tmp_name'],"pictures/".$rowe['chiefemail'].".png");
						echo "Profile updated successfully";
					} else {
						echo "Error updating record: " . $mysqli->error;
					}
				
				}
				
				?>
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

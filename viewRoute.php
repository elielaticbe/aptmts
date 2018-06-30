<?php
//error_reporting(0);
include'functions/conect.php';
?>
<h1>Routes</h1>
<table border="1" cellspacing="0" cellpadding="5px" class="table table-bordered  table-striped table-condensed">
<tr>
<td><b>Origin</b></td>
<td><b>Destination</b></td>
<td><b>Route Fare</b></td>
<td><b>Action</b></td>
</tr>
<?php
//pagination
	//pagination
	$rpag = "SELECT routeid,departingarea,destinationarea,routefare FROM routes WHERE companyid = $comp";
	$rpagresult = $mysqli->query($rpag);
	$rtotal = $rpagresult->num_rows;
	$rpage = ceil($rtotal/$rlimit);

//retrieving route information
	$sql = "SELECT routeid,departingarea,destinationarea,routefare FROM routes WHERE companyid = $comp order by routeid DESC limit $rstart,$rlimit";
	$result = $mysqli->query($sql);
	if($result->num_rows >0){
		while($row = $result->fetch_assoc()){ 
		
?>
<tr class="success">
<td><?=$row['departingarea']?></td>
<td><?=$row['destinationarea']?></td>
<td><?=$row['routefare']?></td>
<td>
	<a href="junioradmin.php?routeid=<?=$row['routeid']?>" class="btn btn-success btn-flat">addbus</a>
    <a href="deleteRoute.php?routeid=<?=$row['routeid']?>" class="btn btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php
		}
	}else{
?>
<p><b style="color:red">No entries found!</b> please select add route to add new route entries</p>
<?php
	}
?>
</table>
<a href="junioradmin.php?con=addRoute" class="btn btn-success btn-flat pull-right">ADD New Route</a>

<ul class="pagination">
<?php
if($rid > 1){
?>
<li><a href="junioradmin.php?rid=<?php echo ($rid-1); ?>">Previous</a></li>
<?php } ?>

<?php for($ri=1;$ri<$rpage;$ri++){ ?>

<li><a href="?rid=<?php echo $ri; ?>"><?php echo $ri; ?></a></li>

<?php } ?>

<?php if($rid != $rpage){ ?>

<li><a href="junioradmin.php?rid=<?php echo ($rid+1); ?>">Next</a></li>

<?php } ?>
</ul>
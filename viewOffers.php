<?php
//error_reporting(0);
include'functions/conect.php';
?>
<h1>Offers</h1>
<table border="1" cellspacing="0" cellpadding="5px" class="table table-bordered  table-striped table-condensed">
<tr>
<td><b>Name</b></td>
<td><b>Description</b></td>
<td><b>Duration</b></td>
<td><b>Action</b></td>
</tr>
<?php
	$opag = "SELECT id,name,description,duration FROM offers WHERE companyid = $comp";
	$opagresult = $mysqli->query($opag);
	$ototal = $opagresult->num_rows;
	$opage = ceil($ototal/$olimit);

	$sql = "SELECT id,name,description,duration FROM offers WHERE companyid = $comp order by id DESC limit $ostart,$olimit";
	$result = $mysqli->query($sql);
	if($result->num_rows >0){
		while($row = $result->fetch_assoc()){
		
?>
<tr class="success">
<td><?=$row['name']?></td>
<td><?=$row['description']?></td>
<td><?=$row['duration']?></td>
<td>
    <a href="deleteOffers.php?id=<?=$row['id']?>" class="btn btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php
		}
	}else{
?>
<p><b style="color:red">No entries found!</b> please select add offers to add new offers entries</p>
<?php
	}
?>
</table>
<a href="junioradmin.php?con=offers" class="btn btn-success btn-flat pull-right">Add New Offers</a>
<ul class="pagination">
<?php
if($oid > 1){
?>
<li><a href="junioradmin.php?oid=<?php echo ($oid-1); ?>">Previous</a></li>
<?php } ?>

<?php for($oi=1;$oi<$opage;$oi++){ ?>

<li><a href="?oid=<?php echo $oi; ?>"><?php echo $oi; ?></a></li>

<?php } ?>

<?php if($oid != $opage){ ?>

<li><a href="junioradmin.php?oid=<?php echo ($oid+1); ?>">Next</a></li>

<?php } ?>
</ul>
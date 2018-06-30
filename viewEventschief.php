<?php
//error_reporting(0);
include'functions/conect.php';
?>
<h1>Events</h1>
<table border="1" cellspacing="0" cellpadding="5px" class="table table-bordered  table-striped table-condensed">
<tr>
<td><b>Name</b></td>
<td><b>Description</b></td>
<td><b>Venue</b></td>
<td><b>Start Date</b></td>
<td><b>End Date</b></td>
</tr>
<?php
	$epag = "SELECT id,name,description,venue,startDate,endDate FROM events WHERE companyid = $comp";
	$epagresult = $mysqli->query($epag);
	$etotal = $epagresult->num_rows;
	$epage = ceil($etotal/$elimit);

	$sql = "SELECT id,name,description,venue,startDate,endDate FROM events WHERE companyid = $comp order by id DESC limit $estart,$elimit";
	$result = $mysqli->query($sql);
	if($result->num_rows >0){
		while($row = $result->fetch_assoc()){
		
?>
<tr class="success">
<td><?=$row['name']?></td>
<td><?=$row['description']?></td>
<td><?=$row['venue']?></td>
<td><?=$row['startDate']?></td>
<td><?=$row['endDate']?></td>
</tr>
<?php
		}
	}else{
?>
<p><b style="color:red">No entries found!</b> please ensure that your junior administrators add new event entries</p>
<?php
	}
?>
</table>
<ul class="pagination">
<?php
if($eid > 1){
?>
<li><a href="chiefadmindash.php?eid=<?php echo ($eid-1); ?>">Previous</a></li>
<?php } ?>

<?php for($ei=1;$ei<$epage;$ei++){ ?>

<li><a href="?eid=<?php echo $ei; ?>"><?php echo $ei; ?></a></li>

<?php } ?>

<?php if($eid != $epage){ ?>

<li><a href="chiefadmindash.php?eid=<?php echo ($eid+1); ?>">Next</a></li>

<?php } ?>
</ul>
<?php
//error_reporting(0);
include'functions/conect.php';
?>
<h1>Buses</h1>
<table border="1" cellspacing="0" cellpadding="5px" class="table table-bordered  table-striped table-condensed">
<tr>
<td><b>Bus Number</b></td>
<td><b>Bus Terminal</b?</td>
<td><b>Departure time</b></td>
<td><b>Arrival time</b></td>
</tr>
<?php
	$bpag = "SELECT busid,busNumber,busTerminal,departureTime,arrivalTime FROM bus WHERE companyid = $comp";
	$bpagresult = $mysqli->query($bpag);
	$btotal = $bpagresult->num_rows;
	$bpage = ceil($btotal/$blimit);

	$sql = "SELECT busid,busNumber,busTerminal,departureTime,arrivalTime FROM bus WHERE companyid = $comp order by busid DESC limit $bstart,$blimit";
	$result = $mysqli->query($sql);
	if($result->num_rows >0){
		while($row = $result->fetch_assoc()){
		
?>
<tr class="success">
<td><?=$row['busNumber']?></td>
<td><?=$row['busTerminal']?></td>
<td><?=$row['departureTime']?></td>
<td><?=$row['arrivalTime']?></td>
</tr>
<?php
		}
	}else{
?>
<p><b style="color:red">No entries found!</b> please ensure that your junior administrators add new bus entries</p>
<?php
	}
?>
</table>
<ul class="pagination">
<?php
if($bid > 1){
?>
<li><a href="chiefadmindash.php?bid=<?php echo ($bid-1); ?>">Previous</a></li>
<?php } ?>

<?php for($bi=1;$bi<$bpage;$bi++){ ?>

<li><a href="?bid=<?php echo $bi; ?>"><?php echo $bi; ?></a></li>

<?php } ?>

<?php if($bid != $bpage){ ?>

<li><a href="chiefadmindash.php?bid=<?php echo ($bid+1); ?>">Next</a></li>

<?php } ?>
</ul>
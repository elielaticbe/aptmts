<?php
//error_reporting(0);
include'functions/conect.php';
?>
<h1>Administrators</h1>
<table border="1" cellspacing="0" cellpadding="5px" class="table table-bordered  table-striped table-condensed">
<tr>
<td><b>First Name</b></td>
<td><b>Last Name</b></td>
<td><b>Email Address</b></td>
<td><b>Branch</b></td>
<td><b>Gender</b></td>
<td><b>Action</b></td>
</tr>
<?php
	//pagination
	$pag = "SELECT id,fName,lName,email,branch,sex,accesslevel FROM chiefadministrator WHERE companyid = $comp";
	$pagresult = $mysqli->query($pag);
	$total = $pagresult->num_rows;
	$page = ceil($total/$limit);
	
	
	$sql = "SELECT id,fName,lName,email,branch,sex,accesslevel FROM chiefadministrator WHERE companyid = $comp order by id DESC limit $start,$limit";
	$result = $mysqli->query($sql);
	if($result->num_rows >0){
		while($row = $result->fetch_assoc()){
			if($row['accesslevel'] == 2){
		
?>
<tr class="success">
<td><?=$row['fName']?></td>
<td><?=$row['lName']?></td>
<td><?=$row['email']?></td>
<td><?=$row['branch']?></td>
<td><?=$row['sex']?></td>
<td>
    <a href="deleteadmin.php?id=<?=$row['id']?>" class="btn btn-danger btn-flat">Delete</a>
</td>
</tr>
<?php		
			}
		}
	}else{
?>
<p><b style="color:red">No entries found!</b> please select add administrator to add new entries</p>
<?php
	}
?>
</table>
<a href="chiefadmindash.php?con=regadministrator" class="btn btn-success btn-flat pull-right">Add Administrator</a>

<ul class="pagination">
<?php
if($id > 1){
?>
<li><a href="chiefadmindash.php?id=<?php echo ($id-1); ?>">Previous</a></li>
<?php } ?>

<?php for($i=1;$i<$page;$i++){ ?>

<li><a href="?id=<?php echo $i; ?>"><?php echo $i; ?></a></li>

<?php } ?>

<?php if($id != $page){ ?>

<li><a href="chiefadmindash.php?id=<?php echo ($id+1); ?>">Next</a></li>

<?php } ?>
</ul>

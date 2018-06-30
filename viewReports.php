<?php
include('functions/conect.php');
$query = "SELECT AgencyType, count(*) as number FROM ticket WHERE companyid = $comp GROUP BY AgencyType";
$result = $mysqli->query($query);

?>
<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>Available Reports</h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Agency Type', 'Number Of Tickets'],
  <?php
  while($row = mysqli_fetch_array($result)){
	
	echo"['".$row['AgencyType']."',".$row['number']."],";
  }
  
  ?>
  //['Work', 8],
  //['Eat', 2],
  //['TV', 4],
  //['Gym', 2],
  //['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Percentage number of tickets for each agency type', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
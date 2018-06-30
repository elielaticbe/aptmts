<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2 style="color:green" align="centre">Helo <b><?php echo"".$_SESSION["userName"] ?> </b></br>Welcome to the chief administrator panel</h2></br>
<div class="box box-success">
<div class="row">
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">Administrators</h2>
Use the Administrators link on the dashboard to <a href="?con=regadministrator">Add administrators</a> and also to <a href="?con=viewAdmin" class="active">View administrators</a> and manage the added administrators.
</blockquote>
</div>
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">Buses</h2>
Use the <a href="?con=viewBuschief">Buses</a> link on the dashboard to view the added buses. These buses are added by the administrators you add in the system</blockquote>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">Offers</h2>
Use the <a href="?con=viewOfferschief">Offers</a> link on the dashboard to view the added offers. Like buses these offers are also added by the junior administrators</blockquote>
</div>
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">Events</h2>
Use the <a href="?con=viewEventschief">Events</a> link on the dashboard to view the added events. These events are also added by junior administrators</blockquote>
</div>
</div>
</div>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2 style="color:green" align="centre">Helo <b><?php echo"".$_SESSION["userName"] ?> </b></br>Welcome to the administration panel</h2></br>
<div class="box box-success">
<div class="row">
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">Routes</h2>
Use the route link on the dashboard to <a href="?con=addRoute">Add Routes</a> the company operates on and also to <a href="?con=viewRoute" class="active">View Routes</a> and manage the added routes. A bus can also be added to a specific route after viewing the routes
</blockquote>
</div>
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">View buses</h2>
Use the <a href="?con=viewBus">View Bus</a> link on the dashboard to view and manage the added buses. A bus can be added to a specific route after viewing the routes</blockquote>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">Offers</h2>
Use the <a href="?con=offers">Add Offers</a> link on the dashboard to add company offers, forexample discounts and also the <a href="?con=viewOffers">View offers</a> link to view and manage the added offers.</blockquote>
</div>
<div class="col-sm-6">
<blockquote>
<h2 style="color:green">Events</h2>
Use the <a href="?con=events">Add Events</a> link on the dashboard to add any event the company may be involved in or organise and also the <a href="?con=viewEvents">View Events</a> link to view and manage the added events.</blockquote>
</div>
</div>
</div>
</body>
</html>


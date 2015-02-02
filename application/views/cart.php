<?php
?>

<html>
<head>
	<title>Cart</title>
</head>
<body>
		<div class="container">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">Ecommerce Baby</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			       <!--  <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
			        <li><a href="#">Link</a></li>
			        </li> -->
			      </ul>
			    	<p class="navbar-right"><a href="/products/cart">Your Cart</a></p>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
			<!-- Stack the columns on mobile by making one full-width and the other half-width -->
			<div class="row">
			  <div class="col-xs-12 col-md-12">
			  	
		
			  	<table class="table table-striped">
 					<thead>
 						<th>Product</th>
 						<th>Description</th>
 						<th>Price</th>
 						<th>Qty</th>

					</thead>
					<tr>
						<td>One month subscription</td>
						<td>Be a member!</td>
						<td>$499</td>
						<td><button type="button" class="btn btn-danger">Delete</button></td>
					</tr>
					<tr>
						<td>T Shirt</td>
						<td>Swag swag!</td>
						<td>$9.99</td>
						<td><button type="button" class="btn btn-danger">Delete</button></td>
					</tr>
					<tr>
						<td>Coffee Cup</td>
						<td>Fo yo java</td>
						<td>$9.99</td>
						<td><button type="button" class="btn btn-danger">Delete</button></td>
					</tr>
				
				</table>
			</div>
		</div>
</body>
</html>
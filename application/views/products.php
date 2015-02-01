<?php  ?>

<html>
	<head>
		<title>Products Listing</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		<style type="text/css">
		.spinner{
			width:30px;
		}
		</style>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script type = "text/javascript"> 
		    $(document).ready(function(){
		    	// alert ('jquery yes');
						$( ".spinner" ).spinner({min:0});
		    	
  });
  </script>
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
					<?php foreach ($value as $key => $record){
							
			  		echo "<form action='products/add/".$record['ID']."'/ method='post'><tr><td>".$record['name']."</td><td>".$record['description']."</td><td>".$record['price']."<td><input class='spinner' name='quantity'></td><td><button type='submit' class='btn btn-success'>Buy</button></td></tr><input type='hidden' name='cart' value='addcart'></form>"; 
			  		// var_dump($record);
			  	} ?>
				
				</table>
			</div>
		</div>
	</body>
</html>
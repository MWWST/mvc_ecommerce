<?php
?>

<html>
<head>
	<title>Cart</title>

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
		.dropdown-menu {
			width:300px;
		}
		.item {
			padding-left:20px;
		}
		.minicart td {
			padding-right:20px;
		}
		td {
			padding-bottom: 20px;
		}
		</style>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script type = "text/javascript"> 
		//     $(document).ready(function(){
		//     	// alert ('jquery yes');
		// 				$( ".spinner" ).spinner({min:0});
  // });
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
			      <a class="navbar-brand" href="/">Ecommerce</a>
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
<?php 
		$total=0;
	  	if ($this->session->userdata('cart')) {
	    	echo "<table class='table srtiped'>
		    		<thead>
		    			<th>Product</th>
		    			<th>Price</th>
		    			<th>Quan</th>
	    			</thead>";
			}
	  $cartsession = $this->session->userdata('cart');
	  foreach ($cartsession as $key => $sessioncart) {
	  	foreach ($product as $minikey => $check_out_cart) {
	  		if ($sessioncart['product_id'] == $check_out_cart['ID']){
	  			echo "<tr><td>".$check_out_cart['name']."</td><td>".$check_out_cart['price']."</td><td>".$sessioncart['product_quan']."</td><td><a href='/products/remove/".$check_out_cart['ID']."/'<button class='btn btn-danger'>Delete</button></a></td><tr>";
	  			$total += $check_out_cart['price'];
		  		}
	  		}   		  	
	 	 }
		  echo "</table>";
		  setlocale(LC_MONETARY, 'en_US');
	 		echo "<hr><h5>Total:"." ".money_format('%(#1n',  $total). "\n"."</h5></hr>";
?>
						</div>
						</div>
						<div class="row">
						<?php require_once('./assets/config/config.php'); ?>
						<form action="charge.php" method="post">
						<script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
						data-key="<?php echo $stripe['publishable_key']; ?>"
						data-amount=<?php echo $total*100;?> data-description="Checkout total"<?php echo number_format($total,2,'.','');?>></script>
						</form>
									</div>

</body>
</html>
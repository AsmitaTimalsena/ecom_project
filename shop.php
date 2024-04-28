<?php 
session_start(); 

// Start the session 
// Check if the add to cart button is clicked 
if (isset($_POST["add_to_cart"])) { 
	
	// Get the product ID from the form 
	$product_id = $_POST["product_id"]; 
	
	// Get the product quantity from the form 
	$product_quantity = $_POST["product_quantity"]; 

	// Initialize the cart session variable 
	// if it does not exist 
	if (!isset($_SESSION["cart"])) { 
		$_SESSION["cart"] = []; 
		header("location:cart.php"); 
	} 

	// Add the product and quantity to the cart 
	$_SESSION["cart"][$product_id] = $product_quantity; 
	header("location:cart.php"); 
} 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title>An Online plant selling website</title> 
		<link rel="stylesheet"
				href="shop.css"> 
				
	</head> 
	<body> 
		<div class="header">
			<img class="logo" src="selilac.png" alt="Website Logo">
			<h1 style="color:purple;">GREENOVATING THE WORLD</h1>

		</div>
		<nav> 
			<ul> 
				<li ><a href="shop.html">Home</a></li> 
				<li ><a href="shop.html">Shop</a></li> 
				<li ><a href="cart.php">Cart</a></li> 
				<li ><a href="logout.php">Logout</a></li> 

			</ul> 
		</nav> 
		<header> 
			<h1>Welcome <?php 
			$user = $_SESSION["user"]; 
			echo $user["name"]; 
			?> to SELILAC, an online nursery website!!!</h1> 
		</header> 
		
		<main> 
			<section> 
				<h2>This season, get extra petonia plant breed as a gift for every purchase over $10.</h2> 
				<h2>Products</h2> 
				<ul> 
					<li> 
						<h3>Snake Plant</h3> 
						<img src=" 999.jpg"	alt="Product 1"> 
						<p> Organic snake plant donated </p>
						<p> by our old customers</p> 
						<p><span>$12</span></p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="1"> 
							<label for="product1_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product1_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart</button> 
						</form> 
					</li> 
					<li> 
						<h3>Asian While Lily Flower</h3> 
						<img src= "999.jpg"	alt="Product 2"> 
						<p>100% pure lily flower</p> 
						<p> 
							<span>$5</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="2"> 
							<label for="product2_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product2_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
						</button> 
						</form> 
					</li> 
					<li> 
						<h3>Pink Hydranges</h3> 
						<img src= "999.jpg"							alt="Product 3"> 
						<p>Beautiful pink hydranges flower</p> 
						<p> 
							<span>$10</span> 
						</p> 

						<form method="post" action="shop.php"> 
							<input type="hidden"
								name="product_id"
								value="3"> 
							<label for="product3_quantity"> 
								Quantity: 
							</label> 
							<input type="number"
								id="product3_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10"> 
							<button type="submit"
									name="add_to_cart"> 
								Add to Cart 
							</button> 
						</form> 
					</li> 
								
					<!-- Add forms for the other products here --> 
				</ul> 
			</section> 
		</main> 
		<footer style="background-color: rgb(142, 195, 251);
		color: purple; font-size: 20px;
		padding: 20px; 
		text-align: center; "> 
			<p >&copy; 2024 SELILAC an online plant selling website</p> 
		</footer> 
		<script src="shop.php"></script> 
	</body> 
</html>
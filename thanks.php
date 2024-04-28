<html> 

<head> 
	<style> 
			.header {
      display: flex;
      align-items: center;
      justify-content: flex-start; 
      width: 100%;
      margin-top:10px;
      padding: 10px 0; 
      background-color:rgb(142, 195, 251);
    }

    .logo {
      width: 300px; 
      margin-right: 10px;
    }

    .header h1 {
      font-weight: bold; font-size: 70px;
      margin: 0;
      line-height: 1; 

    }
		body { 
			background-color: #f2f2f2; 
			font-family: Arial, sans-serif; 
		} 
		
		h1 { 
			color: #008000; 
			font-size: 2.5em; 
			text-align: center; 
			margin-top: 50px; 
		} 
		
		p { 
			
			
			text-align: center; 
			margin-top: 20px; 
		} 
		footer { 
		background-color: rgb(142, 195, 251);
		color:purple; font-size: 20px;
		padding: 20px; 
		text-align: center;  margin-top: 250px;
	} 
	
		
	</style> 
</head> 

<body>
	<div class="header">
			<img class="logo" src="selilac.png" alt="Website Logo">
			<h1 style="color:purple;">GREENOVATING THE WORLD</h1>

		</div>
</body>
<?php 
// Start the session 
	session_start(); 

// Retrieve the customer name from the session variable 
	if (isset($_SESSION['user'])) { 
		$user = $_SESSION['user']; 
		$customerName = $user['name']; 
	} else { 
		$customerName = "Valued Customer"; 
	} 

// Display the thank you message 
	echo "<h1>Thank You,$customerName!</h1>"; 
	echo
"<p>Your order has been received and will be delivered soon.</p>"; 
	?> 
	<footer style="background-color: rgb(142, 195, 251);
		color:purple; font-size: 20px;
		padding: 20px; 
		text-align: center;  margin-top: 250px;"> 
		<p>&copy; 2024 SELILAC an online plant selling website</p> 
	</footer> 
</html>

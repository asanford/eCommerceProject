<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
  	<?php
			$browser = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
			if ($browser == true){
				$browser = 'iphone';
 			 }
			if($browser == 'iphone'){ ?>
        <meta name="viewport"
        content="width=device-width,
        minimum-scale=1.0, maximum-scale=1.0" />
		<?php } ?>
    
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<?php if($browser == 'iphone'){ ?>
  		<link rel = "stylesheet" type = "text/css" href = "css/mobilestyles.css" />
		<?php }else{ ?>
  		<link rel = "stylesheet" type = "text/css" href = "css/styles.css" />
		<?php } ?>
		
		<title>Bread Winners Cart - Michael Ku</title>
	</head>
	<body>
		<div id = "header">
			<div class = "container_12">
				<div id = "logo">
					<h1>
						<a href = "home.php">
							<img src = "img/bread_winners.png" alt = "Bread Winners - Cookware Recipies Appliances" />
						</a>
					</h1>
					<h2>
						"The Best Thing Since Sliced Bread!"
					</h2>
				</div>

				<div id = "account">
					<a href = "client.php">Michael Ku</a> | 
					<a href = "cart.php">Cart (2)</a> |
					<a href = "home.php">Logout</a>
				</div>
				
				<input type= "text" value = "Search" />
			</div>
		</div>

		<div class = "container_12">
			<div class = "grid_12">
				<div id = "navi">
					<ul>
						<li><a href = "home.php">Home</a></li>
						<li><a href = "catalog.php">Catalog</a></li>
						<li><a href = "about.html">About</a></li>
					</ul>
					
					<div id = "admin">
						<a href = "admin.php">[Admin Control Panel]</a>
					</div>
				</div>
				
				<div class = "text">					
					<div class = "box">
						<h4>My Cart</h4>
						<div class = "cart">
							<img src = "img/products/kitchenaid_white.jpg" alt = "KitchenAid - K45SS Classic 250-Watt 4-1/2-Quart Stand Mixer - White"/>
							1x <a href = "#">KitchenAid - K45SS Classic 250-Watt 4-1/2-Quart Stand Mixer - White</a>
							<div class = "remove"><a href = "#">[Remove]</a></div>
							<div class = "price">$250.00</div>
						</div>
						
						<div class = "cart">
							<img src = "img/products/cuisinart_processor_elite.jpg" alt = "Cuisinart - Elite Collection 14-Cup Food Processor"/>
							1x <a href = "#">Cuisinart - Elite Collection 14-Cup Food Processor</a>
							<div class = "remove"><a href = "#">[Remove]</a></div>
							<div class = "price">$300.00</div>
						</div>
						
						<div class = "break"></div>
					
						<div class = "cart">
							<div class = "money">
								<div class = "total">
									<div class = "subject">Subtotal:</div>
									<div class = "number">$300.00</div>
								</div>
								
								<div class = "total">
									<div class = "subject">Shipping:</div>
									<div class = "number">$0.00</div>
								</div>
								
								<div class = "total">
									<div class = "subject">Total:</div>
									<div class = "number">$300.00</div>
								</div>
								
								<div class = "total">
									<a href = "checkout.html">[Checkout]</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class = "clear"></div>
			<div class = "break"></div>
			
			<div class = "grid_12">
				<div id = "footer">
					<p>
						This site is not official and is an assignment for a UCF Digital Media course.
						Designed by Michael Ku.
					</p>
				</div>
			</div>
		</div>
	
	</body>
</html>
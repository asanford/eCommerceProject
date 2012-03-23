<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners Catalog - Michael Ku</title>
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
			
				<div id = "main_featured">
					<h3><a href = "#">Featured Item: A Kitchen</a></h3>
				</div>
				
				<div id = "featured_1">
					<h3><a href = "#">Featured Cookware</a></h3>
				</div>
				
				<div id = "featured_2">
					<h3><a href = "#">Featured Appliances</a></h3>
				</div>
			</div>
			
			<div class = "clear"></div>
			<div class = "break"></div>
			
			<div class = "grid_3">
				<div id = "categories">
					<h4>Browse by Category</h4>
					<ul>
						<li><a href = "#">Appliances</a></li>
						<li><a href = "#">Utensils</a></li>
						<li><a href = "#">Storage</a></li>
						<li><a href = "#">Gadgets</a></li>
					</ul>
					
					<h4>Browse by Brand</h4>
					<ul>
						<li><a href = "#">KitchenAid</a></li>
						<li><a href = "#">Cuisinart</a></li>
						<li><a href = "#">Keurig</a></li>
						<li><a href = "#">Pyrex</a></li>
						<li><a href = "#">OXO</a></li>
					</ul>
				</div>
			</div>
			
			<div class = "grid_9">
				<div id = "featured">
					<h3>Popular Items</h3>
					
					<div id = "products">
						<?php
							//PHP Database
							include 'database.php';
							include 'ratings.php';
							
							ratings($result);
						?>
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
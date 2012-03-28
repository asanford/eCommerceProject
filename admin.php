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
		
		<title>Bread Winners Admin Control Panel - Michael Ku</title>
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
					<a href = "home.php">Logout</a>
				</div>
				
				
			</div>
		</div>

		<div class = "container_12">
			<div class = "grid_12">
				
				
				<div class = "text">
					<img class = "icon" src = "img/user.png" alt = "User Icon" />
					<h3>Privliged Control Panel</h3>
					
					<div class = "box">
						<h4>Manage Database</h4>
						<ul>
							<li><a href = "database_add.php">Add Item</a></li>
							<li><a href = "database_delete.php">"Delete" Item</a></li>
							<li><a href = "database_edit.php">Edit Item</a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class = "clear"></div>
			<div class = "break"></div>
			
			<div class = "grid_12">
				<div id = "footer">
					<p>
						This site is not official and is an assignment for a UCF Digital Media course.
						Designed by Group 3.
					</p>
				</div>
			</div>
		</div>
	
	</body>
</html>
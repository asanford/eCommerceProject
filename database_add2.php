<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners Database Add Form</title>
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
 	<?php
	
	
	$connection = mysql_connect("localhost", "da358490", "wong");
mysql_select_db("da358490", $connection);
$query = "SELECT * FROM products";
$result = mysql_query($query);
if (isset($_POST['Home'])) { 
?>
<script type="text/javascript">
window.location = "admin2.php"
</script><?php
}


if (isset($_POST['add'])) { 

  if (!$_POST['Product_Id'] | !$_POST['Product_Name'] | !$_POST['Category'] | !$_POST['SKU'] | !$_POST['Stock'] | !$_POST['Cost'] | !$_POST['Price'] | !$_POST['Product_Image'] | !$_POST['Description'] ) {
	?>
<script type="text/javascript">
window.alert("You did not complete all of the required fields");
window.location = "database_add2.php"
</script>
<?php
 		die('You did not complete all of the required fields');

 	}
	
	
	$insert = "INSERT INTO products (Product_Id, Product_Name, Category, SKU, Stock, Cost, Price, Product_Image, Description )

 			VALUES ('".$_POST['Product_Id']."', '".$_POST['Product_Name']."', '".$_POST['Category']."', '".$_POST['SKU']."', '".$_POST['Stock']."', '".$_POST['Cost']."', '".$_POST['Price']."', '".$_POST['Product_Image']."', '".$_POST['Description']."')";

 	$add_member = mysql_query($insert);
}

	?>
	
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<center>
<h1>Add Products</h1>
 <br/>Product ID #<input type="text" name="Product_Id" size="20"/>Product Name<input type="text" name="Product_Name" size="20"/><br/>
                Category<input type="text" name="Category" size="20"/>SKU #<input type="text" name="SKU" size="20"/>Stock #<input type="text" name="Stock" size="20"/><br/>
				Cost<input type="text" name="Cost" size="20"/>Price<input type="text" name="Price" size="20"/><br/>
				Image<input type="text" name="Product_Image" size="20"/><br/>
                <textarea name="Description" cols="40" rows="6">Product Description</textarea><br/>
                <input type="submit" name="add" value="Add Product"/><input type="submit" name="Home" value="Admin User Home"/>

</center>
 </form>
 

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
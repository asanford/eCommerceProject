<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners Edit Database Form</title>
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
	
	
	$connection = mysql_connect("localhost", "dig4530c_group03", "dig4530c_group03");
mysql_select_db("dig4530c_group03", $connection);
$query = "SELECT * FROM products";
$result = mysql_query($query);
if (isset($_POST['Home'])) { 
?>
<script type="text/javascript">
window.location = "admin.php"
</script><?php
}


if (isset($_POST['edit'])) { 

  if (!$_POST['Product_Id'] | !$_POST['Stock'] | !$_POST['Price'] | !$_POST['Edit_Password'] ) {
	?>
<script type="text/javascript">
window.alert("You did not complete all of the required fields");
window.location = "database_edit.php"
</script>
<?php
 		die('You did not complete all of the required fields');

 	}
	
if ($_POST['Edit_Password']== "edit")
{
$Id=$_POST['Product_Id'];
$Stock=$_POST['Stock'];
$Price=$_POST['Price'];
$result = mysql_query("UPDATE products SET Stock='$Stock', Price='$Price' WHERE Product_Id='$Id'"); 
}	
	
else 
{
	?>
<script type="text/javascript">
window.alert("Your password was incorrect. The password is 'edit'");
window.location = "database_edit.php"
</script>
<?php
}
}

	?>
	
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<center>
<h1>Update Product Database</h1>
 <br/>Enter Product ID #<input type="text" name="Product_Id" size="20"/>Edit Stock Ammount<input type="text" name="Stock" size="20"/><br/>
 Edit Price<input type="text" name="Price" size="20"/>Password:<input type="password" name="Edit_Password" size="20"/><br/>
 <input type="submit" name="edit" value="Edit Product"/><input type="submit" name="Home" value="Privliged User Home"/>

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
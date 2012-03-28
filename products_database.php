<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners Product Database</title>
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
$username="dig4530c_group03";
$password="dig4530c_group03";
$database="dig4530c_group03";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM products";
$result=mysql_query($query);
$num=mysql_numrows($result);

$i=0;
while ($i < $num) {

$field1=mysql_result($result,$i,"Product_Id");
$field2=mysql_result($result,$i,"Product_Name");
$field3=mysql_result($result,$i,"Category");
$field4=mysql_result($result,$i,"SKU");
$field5=mysql_result($result,$i,"Stock");
$field6=mysql_result($result,$i,"Cost");
$field7=mysql_result($result,$i,"Price");
$field9=mysql_result($result,$i,"Description");
echo "Product Id: $field1<br/>Product Name: $field2<br/>Category: $field3<br/>SKU Number: $field4<br/>Stock: $field5<br/>Cost: $field6<br/>Price: $field7<br/>Description: $field9<hr><br/>";

$i++;

if (isset($_POST['Home'])) { 
?>
<script type="text/javascript">
window.location = "admin2.php"
</script><?php
}

}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<input type="submit" name="Home" value="Admin User Home"/>

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
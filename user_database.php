<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners User Database</title>
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
$username="da358490";
$password="wong";
$database="da358490";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query2="SELECT * FROM users";
$result2=mysql_query($query2);
$num2=mysql_numrows($result2);



$u=0;
while($u < $num2) {
$field1=mysql_result($result2,$u,"Id");
$field2=mysql_result($result2,$u,"username");
$field4=mysql_result($result2,$u,"First_Name");
$field5=mysql_result($result2,$u,"Last_Name");
$field6=mysql_result($result2,$u,"Mail");
$field7=mysql_result($result2,$u,"Address");
$field8=mysql_result($result2,$u,"City");
$field9=mysql_result($result2,$u,"State");
$field10=mysql_result($result2,$u,"Zip");
echo "User Id: $field1<br/>Username: $field2<br/>First Name: $field4<br/>Last Name: $field5<br/>E-Mail: $field6<br/>Address: $field7<br/>City: $field8<br/>State: $field9<br/>Zip Code: $field10<hr><br/>";

$u++;

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners Edit User Profile</title>
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
				
				
				<div class = "text">
 	<?php
	
	
	$connection = mysql_connect("localhost", "dig4530c_group03", "dig4530c_group03");
mysql_select_db("dig4530c_group03", $connection);
$query = "SELECT * FROM products";
$result = mysql_query($query);

	
 if (isset($_POST['edit'])) {
	?>
<script type="text/javascript">
window.alert("Your Profile has been updated.");
</script>
<?php	
if ($_POST['mail'])
{
$mail=$_POST['mail'];
$username=$_POST['username'];
$result = mysql_query("UPDATE users SET Mail='$mail' WHERE username='$username'"); 
}	

if ($_POST['address'])
{
$address=$_POST['address'];
$username=$_POST['username'];
$result = mysql_query("UPDATE users SET Address='$address' WHERE username='$username'"); 
}	

if ($_POST['city'])
{
$city=$_POST['city'];
$username=$_POST['username'];
$result = mysql_query("UPDATE users SET City='$city' WHERE username='$username'"); 
}	

if ($_POST['state'])
{
$state=$_POST['state'];
$username=$_POST['username'];
$result = mysql_query("UPDATE users SET State='$state' WHERE username='$username'"); 
}	

if ($_POST['zip'])
{
$zip=$_POST['zip'];
$username=$_POST['username'];
$result = mysql_query("UPDATE users SET Zip='$zip' WHERE username='$username'"); 
}	

if ($_POST['pass'])
{
 	if ($_POST['pass'] != $_POST['pass2']) {
	?>
<script type="text/javascript">
window.alert("Your Passwords did not match.");
window.location = "user_edit.php"
</script>
<?php
 		die('Your Passwords did not match. ');
	}
	
	
	
	$_POST['pass'] = md5($_POST['pass']);

 	if (!get_magic_quotes_gpc()) {

 		$_POST['pass'] = addslashes($_POST['pass']);

 		$_POST['username'] = addslashes($_POST['username']);

 			}

$pass=$_POST['pass'];
$username=$_POST['username'];
$result = mysql_query("UPDATE users SET password='$pass' WHERE username='$username'"); 
}	
	
}
	?>
	
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<center>
<h1>Update User Profile</h1>
 <br/>username test chage to pull from login session: <input type="text" name="username" size="20"/>
 <br/>Email: <input type="text" name="mail" size="20" maxlength="40"/>Address:<input type="text" name="address" size="20" maxlength="60"/><br/>
 City: <input type="text" name="city" size="20" maxlength="40"/>State:<input type="text" name="state" size="10" maxlength="2"/>Zip Code:<input type="text" name="zip" size="10" maxlength="5"/><br/>
 Change Password:<input type="password" name="pass" size="20" maxlength="10"/>Confirm Password:<input type="password" name="pass2" size="20" maxlength="10"/><br/>
 <input type="submit" name="edit" value="Update Profile"/>

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
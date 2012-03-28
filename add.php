<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners Register User</title>
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

			
				
			</div>
		</div>

		<div class = "container_12">
			<div class = "grid_12">
				
				
				<?php
$connection = mysql_connect("localhost", "dig4530c_group03", "dig4530c_group03");
mysql_select_db("dig4530c_group03", $connection);
$query = "SELECT * FROM users";
$result = mysql_query($query);



 //This code runs if the form has been submitted

 if (isset($_POST['submit'])) { 



 //This makes sure they did not leave any fields blank

 if (!$_POST['username'] | !$_POST['pass'] | !$_POST['First_Name'] | !$_POST['Last_Name'] | !$_POST['pass2']| !$_POST['Address']| !$_POST['Mail']| !$_POST['City']| !$_POST['State']| !$_POST['Zip'] ) {
	?>
<script type="text/javascript">
window.alert("You did not complete all of the required fields");
window.location = "add.php"
</script>
<?php
 		die('You did not complete all of the required fields');

 	}



 // checks if the username is in use

 	if (!get_magic_quotes_gpc()) {

 		$_POST['username'] = addslashes($_POST['username']);

 	}

 $usercheck = $_POST['username'];

 $check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'") 

or die(mysql_error());

 $check2 = mysql_num_rows($check);



 //if the name exists it gives an error

 if ($check2 != 0) {
	?>
<script type="text/javascript">
window.alert("Username already in use. Try another.");
window.location = "add.php"
</script>
<?php
 		die('Sorry, the username '.$_POST['username'].' is already in use.');

 				}


 // this makes sure both passwords entered match

 	if ($_POST['pass'] != $_POST['pass2']) {
	?>
<script type="text/javascript">
window.alert("Your passwords did not match.");
window.location = "add.php"
</script>
<?php
 		die('Your passwords did not match. ');

 	}

 	// here we encrypt the password and add slashes if needed

 	$_POST['pass'] = md5($_POST['pass']);

 	if (!get_magic_quotes_gpc()) {

 		$_POST['pass'] = addslashes($_POST['pass']);

 		$_POST['username'] = addslashes($_POST['username']);

 			}

 // now we insert it into the database

 	$insert = "INSERT INTO users (username, password, First_Name, Last_Name, Mail, Address, City, State, Zip)

 			VALUES ('".$_POST['username']."','".$_POST['pass']."','".$_POST['First_Name']."','".$_POST['Last_Name']."','".$_POST['Mail']."','".$_POST['Address']."','".$_POST['City']."','".$_POST['State']."', '".$_POST['Zip']."')";

 	$add_member = mysql_query($insert);
?>

<script type="text/javascript">
window.alert("You are now registered.");
window.location = "login.php"
</script>
<?php
 

 } 
?>

<center>

<h1>Register</h1><br/>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
First Name:<input type="text" name="First_Name" maxlength="60">Last Name:<input type="text" name="Last_Name" maxlength="60"><br/>
E-mail:<input type="text" name="Mail" maxlength="40">Address:<input type="text" name="Address" maxlength="60"><br/>
City:<input type="text" name="City" maxlength="40">State:<input type="text" name="State" maxlength="2">Zip Code:<input type="text" name="Zip" maxlength="5"><br/>
Username:<input type="text" name="username" maxlength="60">Password:<input type="password" name="pass" maxlength="10"><br/>
Confirm Password:<input type="password" name="pass2" maxlength="10"><br/>
Username and Password are case sensitive.<input type="submit" name="submit" value="Register">
</form>

</center>

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<meta name="description" content="The All-In-One cooking website. We sell cookware, cooking appliances, and have professional and user-submitted recipes." />
		<meta name="keywords" content="Bread Winners, Bread, Winners, Food, Drink, Cookware, Recipes, Appliances, Kitchenaid, Kitchen, Grillware, Bakeware, Baking, Grill" />
		
		<style type="text/css">
			@import url("css/styles.css");
		</style>
		
		<title>Bread Winners Login Page</title>
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
	<center>			
 <?php 

 // Connects to your Database 

$connection = mysql_connect("localhost", "da358490", "wong");
mysql_select_db("da358490", $connection);
$query = "SELECT * FROM users";
$result = mysql_query($query);


 if (isset($_POST['register'])) {
 			?>
<script type="text/javascript">
window.location = "add.php"
</script>
<?php
}

 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

 	if(!$_POST['username'] | !$_POST['pass']) {
 			?>
<script type="text/javascript">
window.alert("You did not complete all of the required fields");
window.location = "login.php"
</script>
<?php
 		die('You did not fill in a required field.');

 	}

 	// checks it against the database



 	if (!get_magic_quotes_gpc()) {

 		$_POST['email'] = addslashes($_POST['email']);

 	}

 	$check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {
 			?>
<script type="text/javascript">
window.alert("That username is not in our database. Try again or go to register page.");
window.location = "login.php"
</script>
<?php
 		die('That user does not exist in our database. <a href=add.php>Click Here to Register</a>');

 				}

 while($info = mysql_fetch_array( $check )) 	

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

 	$info['password'] = stripslashes($info['password']);

 	$_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

 	if ($_POST['pass'] != $info['password']) {
 			?>
<script type="text/javascript">
window.alert("Your password was incorrect. Try again.");
window.location = "login.php"
</script>
<?php
 		die('Incorrect password, please try again.');

 	}
	
		if ($_POST['username'] == "Super") {

 			?>
<script type="text/javascript">
window.alert("You are now logged in with privileged user privileges");
window.location = "admin.php"
</script>
<?php

 	}
	
			if ($_POST['username'] == "Admin") {

  			?>
<script type="text/javascript">
window.alert("You are now logged in with administrative privileges");
window.location = "admin2.php"
</script>
<?php

 	}
	
	if  ($_POST['username'] != "Super" && $_POST['username'] != "Admin"){
$Username=$_POST['username'];
$result = mysql_query("UPDATE users SET login='yes' WHERE username='$Username'"); 
  			?>
<script type="text/javascript">
window.alert("You are now logged in.");
window.location = "home.php"
</script>
<?php
	}


 

 } 

 
 } 

 else 
 {	
 ?>

 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 


<h1>Login</h1><br/>

Username:<input type="text" name="username" maxlength="40"> <br/>
Password:<input type="password" name="pass" maxlength="50"> <br/>
Username and Password are case sensitive.<br/>
<input type="submit" name="submit" value="Login"><input type="submit" name="register" value="Register">



 </form> 

 <?php 

 } 

 

 ?> 


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
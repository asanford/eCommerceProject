<?php
	$connection = mysql_connect("localhost", "mi664555", "ku");
	mysql_select_db("mi664555", $connection);
	$query = "SELECT * FROM products";
	$result = mysql_query($query);
?>
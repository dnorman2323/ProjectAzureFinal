<?php 
	$servername = "normanwebmysql.mysql.database.azure.com";
	$username = "dnorman2323"; # MySQL user
	$password = "0kMaLCbkE1mHcb68USGoHA"; # MySQL Server root password
	$dbname='messageboard'; # Database name
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    # Display an error mesage if the connection fails
	    die("Connection failed: " . $conn->connect_error);
	}
?>

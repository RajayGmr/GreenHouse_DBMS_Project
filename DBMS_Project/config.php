 <!--- the php code for connecting it to the database ,as we are using localhost and the username is root 
and the password is by default none  and the name of the DB is shopping_cart,so by this code we can establish  
a connection with the app and the DB and then can fetch data--->

<?php
	$conn = new mysqli("localhost","root","","shopping_cart");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>
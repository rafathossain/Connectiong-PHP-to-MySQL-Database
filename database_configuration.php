<?php

$server_address = "localhost";              	//If you connecting remotely to this database you need to set the hostname of your server and you need to allow access to your ip from server 
$database_name = "Your_Database_Name";   	//Set your database name
$username = "Your_Databse_Username";		//Set your database username
$password = "Your_Database_Password";		//Set database password

// Create connection
$conn = new mysqli($server_address, $username, $password, $database_name);

?>
<!DOCTYPE html>
<html>
    <head>
</head>
<?php
session_start();
echo $_SESSION['login'];
    $servername = "localhost";
	$dbusername = "root";
	$dbpassword = "root";
	$dbname = "tddb";

	// Create connection
	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM accounts WHERE email='$_SESSION['login']'";
    
    if ($conn->query($sql) === TRUE) {
        echo 'Hello' . $row['fname']. $row['lname'];	
    } else {
   	 	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();


?>














    </html>
    
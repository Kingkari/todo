<!DOCTYPE html>
<html>

<?php
    session_start();
    $user =  $_SESSION['login']; echo $_SESSION['login'];
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
    $sql = "SELECT * FROM accounts WHERE email='$user'";
    
    $query = mysqli_query($conn, $sql);
    $row  = mysqli_fetch_array($query);
    
    echo 'Hello ' . $row['fname'] .' '. $row['lname'];	
  
	$conn->close();


?>














    </html>
    
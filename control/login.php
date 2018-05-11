<?php
    session_start();
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
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM accounts WHERE email='$email' and password='$password'";
    
    $query = mysqli_query($conn, $sql);
    $row  = mysqli_fetch_array($query);
    if(is_array($row)) {
        $_SESSION['login'] = $row['email']; echo $_SESSION['login'];
            header("Location: ../view/list.php");
        } else {
            $echo = "Invalid Username or Password!";
        }	
  
	$conn->close();

?>
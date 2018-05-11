<?php
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
    $firstn = $_POST['fname'];
	$lastn = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
    $bday = $_POST['birthday'];
     

    $sql = "INSERT INTO accounts (ID, fname, lname, email, phone, birthday, gender, password)
    VALUES ('', '$firstn', '$lastn', '$email','$phone', '$bday', '$gender', '$password')";
    
    if ($conn->query($sql) === TRUE) {
    	header("Location: list.php");
	} else {
   	 	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
    ?>
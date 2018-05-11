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
    $firstn = $_POST['firstn'];
	$lastn = $_POST['lastn'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
    $bday = $_POST['birthday'];
    
    $sql = "INSERT INTO accounts (ID, firstn, lastn, email, phone, gender, birthday)
    VALUES ('', '$firstn', '$lastn', '$email','$phone', '$gender', '$bday')";
    
    if ($conn->query($sql) === TRUE) {
    	header("Location: list.php");
	} else {
   	 	echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
    /<form action="" method="post"></form>
    ?>
<?php
session_start();
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

	$username=$_POST['username'];
	$password=$_POST['password'];
	//echo $username;
	//echo $password;
    //Check connection
    $servername = "localhost";
	$username1 = "root";
	$password1 = "";
	$conn = mysqli_connect($servername, $username1, $password1);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
    // Create database
$db = mysqli_select_db($conn,"secure");
$sql = "create table userDB (userid int(4) NOT NULL auto_increment, Username varchar(50) NOT NULL, password varchar(20) NOT NULL,
constraint primary key (userid))";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
    }
$insert = "insert into userDB (Username,password) VALUES ('$username','$password')";

if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $insert . "<br>" . $db->error;
}  
?>
<html>
</br>
<a href="index.php"><h2> Click here to login </h2> </a>
</html>
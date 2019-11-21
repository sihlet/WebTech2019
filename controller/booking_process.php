<?php
require('db_class.php');

echo "I am alive dude!";

$conn = new db_connection();
$conn->db_connect();

	// Check connection
if (!$conn) 
{
	die("Connection failed: " . mysqli_connect_error());
	}else{
		echo "connected to the database<br>";
}

//check if the button has been clicked
if (isset($_POST['bclicked'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$role = $_POST['role'];
	$reason = $_POST['reason'];
	echo "Loaded: ". $name." and ".$reason."<br>";

	$sql = "INSERT INTO USER (Name, Email, Phone, Role, Reason) VALUES('$name','$email','$phone', '$role', '$reason')";

	$conn->db_query($sql);

	}
echo "destructing db object";
$conn = null;
header('#');


?>
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
	$date = $_POST['date'];
	$time = $_POST['time'];
	echo "Loaded: ". $date." and ".$time."<br>";

	$sql = "INSERT INTO Timez (timeRecord, dateRecord) VALUES('$time','$date')";

	$conn->db_query($sql);

	}
echo "destructing db object";
$conn = null;
header("Location: ../booking.html");


?>
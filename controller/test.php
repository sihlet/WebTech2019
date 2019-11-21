<?php
require('db_class.php');

echo "I am here";
$conn = new db_connection();

$conn->db_connect();

echo $conn->$db;
echo $conn->$results;

$sql = "INSERT INTO USER (Name, Email, Phone, Role, Reason) VALUES('sihle','ysihle6@gmail.com', '0261246763', 'Student', 'hghghghghgh')";

echo $conn->db_query($sql);
echo $conn->db_fetch();

?>
<?php
$host="localhost";
$user="root";
$pass="";
$dbname="student2";
$conn=mysqli_connect($host,$user,$pass,$dbname);
if($conn)
	echo "Connection Successful";
else
	echo "Connection Failed";
?>
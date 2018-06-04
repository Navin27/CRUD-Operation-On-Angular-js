<?php

$localhost="localhost";
$username="root";
$password="";
$database="angulardb";
$conn   = mysqli_connect($localhost, $username, $password, $database);

if(mysqli_connect_errno($conn))

{
	echo "failed";
}
?>
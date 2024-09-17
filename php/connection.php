<?php
 
 
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname   = "demo";

$conn = mysqli_connect($servername , $username  , $password , $dbname );

if($conn)
{
	echo "connection ok";
	
}
else{
    die("connection fail because".mysqli_connect_error());
}

?>


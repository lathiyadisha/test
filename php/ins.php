<!DOCTYPE html>
<?php
	include("connection.php");
	
	 

?>
<html>
	<head>
			<title>form</title>
			 
	</head>  
	<body>
	<form action="" method="post" >
		<table>
	       
			<tr>
				<td>name:</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>city:</td>
				<td><input type="text" name="city"></td>
			</tr>
			<tr>
				<td>address:</td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="submit" ></td>
			</tr>
		</table>
	</form>
	
<?php

	
	$name = $_POST['name'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	
	
	$query = "insert into user values('','$name','$city','$address')";
    $data = mysqli_query($conn , $query);
  
   if($data){
	   echo "inserted ";
   }

  
	
?>
	

	
	</body>
</html>

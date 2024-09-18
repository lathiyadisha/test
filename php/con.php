<!DOCTYPE html>
<?php
	include("connection.php");
	
	 

?>
<html>
	<head>
			<title>form</title>
			 
	</head>  
	<body>
	<table>
	<form action="" method="post" >
		
	       
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
				<td><input type="submit" name="submit" value="submit" ></td>
			</tr>
			
	</form>
	
		</table>
	
<?php

   if (isset($_POST['submit'])) {
    $name = $_POST['name'];
	$city = $_POST['city'];
	$address = $_POST['address'];
	
	
	$query = "insert into user values('','$name','$city','$address')";
    $data = mysqli_query($conn , $query);
  
  
      
   if($data){
	   echo "inserted ";
   }
   
   
   } 
   
   
    $searchResult = [];
    $searchQuery = "SELECT * FROM user";
    $searchResult = mysqli_query($conn, $searchQuery);
	


	 if (!empty($searchResult) && mysqli_num_rows($searchResult) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>City</th>
                    <th>Address</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($searchResult)) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['address']}</td>
                </tr>";
        }
        echo "</table>";
    }
 ?>  
   
	</body>
</html>

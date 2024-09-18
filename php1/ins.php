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
	<form action="" method="post">
            <tr>
			<td><input type="submit" name="search" value="Search"></td>
            <td><input type="text" name="search_name" placeholder="Search by name"></td>
                
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
    if (isset($_POST['search'])) {
    $searchName = $_POST['search_name'];
    $searchQuery = "SELECT * FROM user WHERE name LIKE '%$searchName%'";
    $searchResult = mysqli_query($conn, $searchQuery);
	}


	 if (!empty($searchResult) && mysqli_num_rows($searchResult) > 0) {
        echo "<h2>Search Results:$searchName</h2>";
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
    } elseif (isset($_POST['search'])) {
        echo "No results found.$searchName";
    }
 ?>
	

	
	</body>
</html>

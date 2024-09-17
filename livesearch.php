<?php

require("dbconnect.php");

    if(isset($_POST['input']))
    {
        $input=$_POST['input'];
        $query = "SELECT * FROM student WHERE sname LIKE '%{$input}%' OR 
        gender LIKE '%{$input}%' OR contact LIKE '%{$input}%'";
        
        //echo $query;
        
        $result=mysqli_query($conn,$query);

        echo "<table border='1'> 
                <th>Roll No</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Contact</th>";

        while($r=mysqli_fetch_array($result))
        {
            echo "<tr><td>".$r["sid"]."</td><td>".$r["sname"].
            "</td><td>".$r["gender"]."</td> <td>".$r["contact"]."</td> </tr>";
        }
        
        echo "</table>";
    }
?>
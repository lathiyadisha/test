<!--Multi Dimensional Array-->
<?php
	//declare multi-dimensional array
	$a = array();
	$a[0][0] = "A";
	$a[0][1] = "B";
	$a[1][0] = "C";
	$a[1][1] = "D";
	//display multidimensional arrayelements through foreach loop 
	foreach($a as $e1) 
	{ 
	  foreach ($e1 as $e2) 
	  {
		echo "$e2"."<br>";
	  }
    }
?>
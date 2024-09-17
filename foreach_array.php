<!--Program to print associative array elements using foreach loop-->

<?php
//declare array
$employee = array (
"Name" => "abc",
"Email" => "abc@gmail.com",
"Age" => 21,
"Gender" => "FeMale"
);
// display associative array element through foreach loop
foreach ($employee as $key => $element)
{
	echo $key . " : " . $element;
	echo "</br>";
}
?>

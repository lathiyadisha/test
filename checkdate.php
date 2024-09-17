<!--The checkdate() function is a built-in function in PHP which checks the validity of the date passed in the arguments. It accepts the date in the format mm/dd/yyyy. The function returns a boolean value. It returns true 
if the date is a valid one, else it returns	false.-->
<?php
// PHP program to demonstrate the checkdate() function
$month = 13;
$day = 31;
$year = 2017;
// returns a boolean value after validation of date 
var_dump(checkdate($month, $day, $year)); 
?>
<?php
/*The mktime() function is an inbuilt function in PHP 
which is used to return the Unix timestamp for a date. 
int mktime( $hour, $minute, $second, $month, $day, $year, $is_dst)*/


echo date("M-d-Y", mktime(0, 0, 0, 12,  1,  2021))."<br>";
// Using mktime() function to know the
// complete date for an out-of-range input
echo date("M-d-Y", mktime(0, 0, 0, 12, 40, 2022));
?>

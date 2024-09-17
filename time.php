<!--The time() function is a built-in function in 
PHP which returns the current time measured
 in the number of seconds since the Unix Epoch. 
 The number of seconds can be converted to the 
 current date using date() function in PHP.-->

<?php
$nextweek=time()+(7*24*60*60);
echo "Today Date is:".date('Y-m-d')."\n";
echo "<br>";
echo "Next Week Date is:".date('Y-m-d',$nextweek)."\n";
?>
<?php
function incrementCounter() {
static $counter = 0;
$counter++;
echo $counter . "<br>";
}
incrementCounter(); 
incrementCounter(); 
incrementCounter(); 
?>
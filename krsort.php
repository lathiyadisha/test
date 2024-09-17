<?php
 $fruits = ["orange" => 4, "apple" => 2,"banana" => 1, "grape" => 3];
 /*sorts an array in descending order based on its keys while maintaining
the association between keys and values.*/

 krsort($fruits);
 print_r($fruits);
?>
<?php

	$fruits = ["orange" => 4, "apple" => 2,"banana" => 1, "grape" => 3];
	/*ascending order based on its values while maintaining
      the association between keys and values.*/
	asort($fruits);
	print_r($fruits);

?>
<?php

	include("class_findtemp.php");

	echo "Testing starts here";

	echo "\n\n\n Testing 1 \n\n";

	$type = "1";
	$temp = "30";
	$findtemp = new FindTemp($type,$temp);
	$results = $findtemp->convert_temp();

	print $results;



?>
<?php

	include("class_findtemp.php");

	echo "Testing starts here";

	echo "\n\n\n Testing 1 \n\n";

	$type = "1";
	$temp = "32";
	$findtemp = new FindTemp($type,$temp);
	$results = $findtemp->convert_temp();

	if ($results == 0){
		echo "Success";
	}else{
		Echo "Failure, Results were " . $results;
	}



?>
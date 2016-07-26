<?php

	include("class_findtemp.php");
	include("class_findweight.php");

	echo "Testing starts here";

	echo "\n\n\n Testing 1 \n\n";

	$type = "1";
	$temp = "32";
	$findtemp = new FindTemp($type,$temp);
	echo $findtemp->type;
	echo $findtemp->temp;
	$results = $findtemp->convert_temp();

	if ($results == 0){
		echo "Success, Results were  " . $results;
	}else{
		Echo "Failure, Results were " . $results;
	}

	echo "\n\n\n Testing 2\n\n";

	$weight = "12";
	$findweight = new FindWeight($type, $weight);
	$results = $findweight->convert_weight();

	echo $results;




?>
<!DOCTYPE html>
<html>
<?php 
	$name = $_GET["name"];
	$type = $_GET["type"];

	if ($name == "tempature") {
		include("class_findtemp.php");
		$temp = $_GET["temp"];
		$findtemp = new FindTemp($type,$temp);
		$results = $findtemp->convert_temp();
		

	}elseif ($name == "distance") {
		include("class_finddist.php");
		$dist = $_GET["dist"];
		$finddist = new FindDist($type, $dist);
		$results = $finddist->convert_dist();

	}elseif ($name = "weight") {
		include("class_findweight.php");
		$weight = $_GET["weight"];
		$findweight = new FindWeight($type, $weight);
		$results = $findweight->convert_weight();
	}





?>

<head>
	<title></title>
</head>
<body>
	<?php echo $results; ?>
</body>
</html>
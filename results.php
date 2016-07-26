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
		
	}





?>

<head>
	<title></title>
</head>
<body>
	<?php echo $results; ?>
</body>
</html>
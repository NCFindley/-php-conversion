<!DOCTYPE html>
<html>
<head>
	<title>Conversion</title>
</head>
<body>
	<a href="/">Home</a>
	<br>
	<br>
	<form action = "results.php">
		<input type="hidden" name="name" value="tempature">
		<input type="radio" name = "type" value="1">Fahreinheit<br>
		<input type="radio" name="type" value="2">Celsius<br>
		<input type="text" name="temp"><br>
		<input type = "submit" value="submit">
	</form><br>

	<form action = "results.php">
		<input type="hidden" name="name" value="distance">
		<input type="radio" name = "type" value="1">Miles<br>
		<input type="radio" name="type" value="2">Kilometers<br>
		<input type="text" name="dist"><br>
		<input type = "submit" value="submit">
	</form><br>

	<form action = "results.php">
		<input type="hidden" name="name" value="weight">
		<input type="radio" name = "type" value="1">Pound<br>
		<input type="radio" name="type" value="2">Kilograms<br>
		<input type="radio" name="type" value="3">Stones<br>
		<input type="text" name="weight"><br>
		<input type = "submit" value="submit">
	</form>
</body>
</html>
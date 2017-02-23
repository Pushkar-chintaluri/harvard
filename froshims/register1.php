<!DOCTYPE html>


<?
	
	// validate submission
	if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"]))
	{
		header("Location: http://dockerlamp.com:80/froshims/froshims1.php");
		exit;
	}

?>


<html>
	<head>
		<title>Frosh IMs</title>
	</head>

	<body>
		You are registered! (Well, not really.)
	</body>
</html>

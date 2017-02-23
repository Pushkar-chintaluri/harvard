<!DOCTYPE html>

<?
	// Checks the data and if validated then sends out an email. Else, redirects back to froshims3.php


	// validate submission
	if ( !empty($_POST["name"]) && !empty($_POST["gender"]) && !empty($_POST["dorm"]) )
	{
		$to = "pushkar.chintaluri@gmail.com";
		$subject="Registration";
		$body = "This person just registered: \n\n" .
			$_POST["name"] . "\n" .
			$_POST["captain"] . "\n" .
			$_POST["gender"] . "\n" .
			$_POST["dorm"];
		$headers = "From: malan@cs50.net\r\n";
		mail($to, $subject, $body, $headers);
	}
	else
	{
		header("Location: http://dockerlamp.com/froshims/froshims3.php");
		exit;
	}

?>

<html>
	<head>	
		<title>Frosh IMs</title>
	<head>
	
	<body>
		You are registered. (Really.)
	</body>

</html>

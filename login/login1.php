<?
	// Will check if user already submitted credentials. If credentials are submitted, will check creds and send to home.php if accurate,
	// else say INVALID LOGIN

	// additionally, it will also not check authentication if creds were never submitted, simply print the form

	session_start();
	
	if ( isset($_POST["submitted"]))
	// if username, password were submitted
	{
		if ($_POST["username"]=="jharvard" && $_POST["password"]=="crimson")
		{
			// Sets authenticated variable for use by home.php
			$_SESSION["authenticated"]=1;

			// Redirect user to home.php
			// http://us2.php.net/manual/en/function.header.php
			$host = $_SERVER["HTTP_HOST"];
			$path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
			header("Location: http://$host$path/home.php");
			exit;
		}
		else
		{
			echo "INVALID LOGIN";
		}
	}
?>


<!DOCTYPE html>

<html>

	<head>
		<title>Log In</title>

	</head>

	<body>

		<form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td><input name="submitted" type="Submit" value="Login"></td>
		</form>
	</body>
	
	
</html>

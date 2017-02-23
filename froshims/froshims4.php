<?
	// Handles form errors on the same page itself.




	// if form was actually submitted, check for error
	if ( isset($_POST["acted"]) )
	{
		if ( empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["dorm"]) )
			$error = true;
	}

?>



<!DOCTYPE html>

<html>
	<head>
		<title>Frosh IMS</title>
	</head>
	
	<body>
		<div style="text-align:center;">
			
			<h1>Register for Frosh IMs</h1>
			<? if (isset($error)): ?>
				<div style="color:red">You must fill out the form!</div>
			<? endif ?>
			<br><br>
			
			<form action="froshims4.php" method="post">
				<table style="border:0; margin:auto; text-align:left;">
					<tr>
						<td>Name:</td>
						<td> <input type="text" name="name" value="<? if (isset($_POST["name"])) echo htmlspecialchars($_POST["name"]); ?>"></td>
					</tr>
					<tr>
						<td>Captain:</td>
						<!-- Tracking if checked, and preserving the choice -->
						<td>
							<? if (empty($_POST["captain"])): ?>
								<input type="checkbox" name="captain">
							<? else: ?>		
								<input checked type="checkbox" name="captain">
							<? endif ?>
						</td> 
					</tr>
					<tr>
						<td>Gender:</td>
						<td> 
							<input type="radio" name="gender" value="M">M 
							<input type="radio" name="gender" value="F">F
						</td>
					</tr>
					<tr>
						<td>Dorm:</td>
						<td>
							<select name="dorm">
								<option value=""></option>
								<option value="Apley Court">Apley Court</option>
								<option value="Canaday">Canaday</option>
								<option value="Grays">Grays</option>
								<option value="Greenough">Greenough</option>
								<option value="Hollis">Hollis</option>
								<option value="Holworthy">Holworthy</option>
								<option value="Hurlbut">Hurlbut</option>
								<option value="Lionel">Lionel</option>
								<option value="Massachusetts">Massachusetts</option>
								<option value="Matthews">Matthews</option>
								<option value="Mower">Mower</option>
								<option value="Pennypacker">Pennypacker</option>
								<option value="Stoughton">Stoughton</option>
								<option value="Straus">Straus</option>
								<option value="Thayer">Thayer</option>
								<option value="Weld">Weld</option>
								<option value="Wigglesworth">Wigglesworth</option>

							</select>
						</td>
					</tr>
				</table>
				<br><br>
				<input name="acted" type="Submit" value="Register!">
			</form>
		</div>

	</body>


</html>

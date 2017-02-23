<!DOCTYPE html>

<html>
	<head>
		<title>Frosh IMS</title>
	</head>
	
	<body>
		<div style="text-align:center;">
			
			<h1>Register for Frosh IMs</h1>
			<br><br>
			
			<form action="register1.php" method="post">
				<table style="border:0; margin:auto; text-align:left;">
					<tr>
						<td>Name:</td>
						<td> <input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Captain:</td>
						<td> <input type="checkbox" name="captain"></td>
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
				<input type="Submit" value="Register!">
			</form>
		</div>

	</body>


</html>

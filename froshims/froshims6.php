<?
	$DORMS = array(
	"Apley Court",
	"Canaday",
	"Grays",
	"Greenough",
	"Hollis",
	"Holworthy",
	"Hurlbut",
	"Lionel",
	"Massachusetts",
	"Matthews",
	"Mower",
	"Pennypacker",
	"Stoughton",
	"Straus",
	"Thayer",
	"Weld",
	"Wigglesworth");

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
			
			<form action="froshims6.php" method="post">
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
						<!-- If gender is set in post then identify M or F and print the two radios to html, else print both unchecked radios -->
							<? if (isset($_POST["gender"])): ?>
								<? if ($_POST["gender"]=="M"):?>
									<input type="radio" name="gender" value="M" checked>M
									<input type="radio" name="gender" value="F">F
								<? else: ?> 
									<input type="radio" name="gender" value="M">M
									<input type="radio" name="gender" value="F" checked>F
								<?endif?>
							<? else: ?>
								<input type="radio" name="gender" value="M">M
								<input type="radio" name="gender" value="F">F
							<? endif ?>
						</td>
					</tr>
					<tr>
						<td>Dorm:</td>
						<td>
							<select name="dorm">
								<option value=""></option>
								<? foreach ($DORMS as $dorm): ?>
									<? if (isset($_POST["dorm"]) && ($_POST["dorm"] == $dorm)): ?>
										<option value="<?= $dorm ?>" selected><?= $dorm?></option>
									<? else: ?>
										<option value="<?= $dorm ?>"><?= $dorm?></option>
									<? endif ?>
								<? endforeach ?>
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

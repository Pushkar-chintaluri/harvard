<?php

session_start();
$dom = simplexml_load_file("../model/menu.xml");
?>

<!DOCTYPE HTML>

<html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<title>Three Aces</title>
	</head>

	<body>
		<div style="text-align:center;">
			<ul>
				<?php
				foreach ($dom->xpath("/menu/category") as $category)
				{
					echo "<li>" .  $category["name"] . "</li>";
				}
				?>
			
			</ul>
		
		</div>
	</body>
</html>

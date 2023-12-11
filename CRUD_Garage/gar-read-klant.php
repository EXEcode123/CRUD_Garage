<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">
		<title>gar-read-klant.php</title>
		<style type="text/css">
				body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
		</style>
	</head>
	<body>
		<center>
		<h1>garage read klant</h1>
		<p>
			Dit zijn alle gegevens uit de tabel "klant" van de "database" garage.
		</p>
		<?php
			
			require_once "gar-connect.php";

			$klanten = $conn->prepare("
										select	klantid,
												klantnaam,
												klantadres,
												klantpostcode,
												klantplaats
										from	klant
									");
			$klanten->execute();

			echo "<table>";
				foreach($klanten as $klant)
				{
					echo "<tr>";
					echo "<td>"	.	$klant["klantid"]			.	"</td>";
					echo "<td>"	.	$klant["klantnaam"]			.	"</td>";
					echo "<td>"	.	$klant["klantadres"]		.	"</td>";
					echo "<td>"	.	$klant["klantpostcode"]		.	"</td>";
					echo "<td>"	.	$klant["klantplaats"]		.	"</td>";
					echo "</tr>";
				}
			echo "</table>";
			echo "<a href='index.html'> Terug naar het menu </a>";
		?>
	</center>
	</body>
</html>
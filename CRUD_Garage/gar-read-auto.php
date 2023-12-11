<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">
		<title>gar-read-auto.php</title>
		<style type="text/css">
			body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
		</style>
	</head>
	<body><center>
		<h1>garage read auto</h1>
		<p>
			Dit zijn alle gegevens uit de tabel "auto" van de "database" garage.
		</p>
		<?php
			
			require_once "gar-connect.php";

			$klanten = $conn->prepare("
										select	klantid,
												autokenteken,
												automerk,
												autotype,
												autokmstand
										from	auto
									");
			$klanten->execute();

			echo "<table>";
				foreach($klanten as $auto)
				{
					echo "<tr>";
					echo "<td>"	.	$auto["klantid"]			.	"</td>";
					echo "<td>"	.	$auto["autokenteken"]		.	"</td>";
					echo "<td>"	.	$auto["automerk"]			.	"</td>";
					echo "<td>"	.	$auto["autotype"]			.	"</td>";
					echo "<td>"	.	$auto["autokmstand"]		.	"</td>";
					echo "</tr>";
				}
			echo "</table>";
			echo "<a href='index.html'> Terug naar het menu </a>";
		?>
	</center>
	</body>
</html>
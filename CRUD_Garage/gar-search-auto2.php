<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">
		<title>gar-search-auto2.php</title>
		<style type="text/css">
			body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
		</style>
	</head>
	<body><center>
		<h1>garage zoek op klantid</h1>
		<p>
			Op klantid gegevens zoeken uit de tabel "auto" van de database "garage".
		</p>

		<?php
			$klantid =$_POST["klantidvak"];

			require_once "gar-connect.php";

			$klanten = $conn->prepare("
										select	klantid,
												autokenteken,
												automerk,
												autotype,
												autokmstand
										from	auto
										where	klantid = :klantid
									");
			$klanten->execute(["klantid" => $klantid]);

			echo "<table>";
			foreach($klanten as $auto)
				{	
					echo "<tr>";
						echo "<td>" . $auto["klantid"]			. "</td>";
						echo "<td>" . $auto["autokenteken"]		. "</td>";
						echo "<td>" . $auto["automerk"]			. "</td>";
						echo "<td>" . $auto["autotype"]			. "</td>";
						echo "<td>" . $auto["autokmstand"]		. "</td>";
					echo "</tr>";
				}
			echo "</table><br />";
			echo "<a href='index.html'> Terug naar het menu </a>";
			
			?>
		</center>
	</body>
</html>
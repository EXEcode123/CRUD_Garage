<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">
		<title>gar-update-klant3.php</title>
		<style type="text/css">
			body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
		</style>
	</head>
	<body><center>
		<h1>Garage update klant 3</h1>
		<p>
			Klantgegevens wijzigen in de tabel "klant" van de database "garage".
		</p>
		<?php
			$klantid		= $_POST["klantidvak"];
			$klantnaam		= $_POST["klantnaamvak"];
			$klantadres		= $_POST["klantadresvak"];
			$klantpostcode	= $_POST["klantpostcodevak"];
			$klantplaats	= $_POST["klantplaatsvak"];

			require_once "gar-connect.php";

			$sql = $conn->prepare
			("
				update klant set	klantnaam 			= :klantnaam,
									klantadres 			= :klantadres,
									klantpostcode 		= :klantpostcode,
									klantplaats 		= :klantplaats
									where 	 	klantid = :klantid
			");

			$sql->execute
			([
				"klantid"		=>$klantid,
				"klantnaam"		=>$klantnaam,
				"klantadres"	=>$klantadres,
				"klantpostcode"	=>$klantpostcode,
				"klantplaats"	=>$klantplaats
			]);

			echo "De klant is gewijzigd. <br />";
			echo "<a href='index.html'> Terug naar het menu </a>";
		?>
	</center>
	</body>
</html>
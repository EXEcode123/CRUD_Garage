<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">
		<title>gar-update-auto3.php</title>
		<style type="text/css">
			body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
		</style>
	</head>
	<body><center>
		<h1>Garage update auto 3</h1>
		<p>
			Autogegevens wijzigen in de tabel "auto" van de database "garage".
		</p>
		<?php
			$klantid			= $_POST["klantidvak"];
			$autokenteken		= $_POST["autokentekenvak"];
			$automerk			= $_POST["automerkvak"];
			$autotype			= $_POST["autotypevak"];
			$autokmstand		= $_POST["autokmstandvak"];

			require_once "gar-connect.php";

			$sql = $conn->prepare
			("
				update auto set		autokenteken 		= :autokenteken,
									automerk 			= :automerk,
									autotype 			= :autotype,
									autokmstand 		= :autokmstand
									where 	 	klantid = :klantid
			");

			$sql->execute
			([
				"klantid"			=>$klantid,
				"autokenteken"		=>$autokenteken,
				"automerk"			=>$automerk,
				"autotype"			=>$autotype,
				"autokmstand"		=>$autokmstand
			]);

			echo "De auto is gewijzigd. <br />";	
			echo "<a href='index.html'> Terug naar het menu </a>";
		?>
	</center>
	</body>
</html>
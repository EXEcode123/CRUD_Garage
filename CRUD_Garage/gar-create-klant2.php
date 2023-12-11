<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF_8">
		<title>gar-create-klant2.php</title>
		<style type="text/css">
		 	body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
			p{
				font-size: 20px;
			}
			
		</style>
	</head>
	<body>
		<center>
		<h1>garage create klant 2</h1>
		<p>
			De klant is toegevoegd in the tabel "klant" in de database "garage"
		</p>
		<?php
			//$klantid		=NULL; 
			$klantnaam		= $_POST["klantnaamvak"];
			$klantadres   	= $_POST["klantadresvak"];
			$klantpostcode	= $_POST["klantpostcodevak"];
			$klantplaats	= $_POST["klantplaatsvak"];

			require_once "gar-connect.php";

			$sql = $conn->prepare("INSERT INTO klant(klantnaam, klantadres,klantpostcode, klantplaats)
					VALUES (:klantnaam, :klantadres, :klantpostcode, :klantplaats)");
						$sql->bindParam(':klantnaam', $klantnaam);
						$sql->bindParam(':klantadres', $klantadres);
						$sql->bindParam(':klantpostcode', $klantpostcode);
						$sql->bindParam(':klantplaats', $klantplaats);

			$sql-> execute();

			

			echo "De klant is toegevoegd. <br />";
			echo "<a href='index.html'> Terug naar het menu </a>";
		?>
	</center>
	</body>
</html>
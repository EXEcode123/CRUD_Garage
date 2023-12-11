<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF_8">
		<title>gar-create-auto2.php</title>
		<style type="text/css">
			body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
		</style>
	</head>
	<body><center>
		<h1>Garage create auto 2</h1>
		<p>
			De auto is toegevoegd in the tabel "auto" van de database "garage"
		</p>
		<?php
			require_once "gar-connect.php";
			//$klantid		=NULL; 
			$autokenteken		=$_POST["autokentekenvak"];
			$automerk  			=$_POST["automerkvak"];
			$autotype			=$_POST["autotypevak"];
			$autokmstand		=$_POST["autokmstandvak"];

			$sql = $conn->prepare("INSERT INTO auto(autokenteken, automerk,autotype, autokmstand)
					VALUES (:autokenteken, :automerk, :autotype, :autokmstand)");
						$sql->bindParam(':autokenteken', $autokenteken);
						$sql->bindParam(':automerk', $automerk);
						$sql->bindParam(':autotype', $autotype);
						$sql->bindParam(':autokmstand', $autokmstand);

			$sql-> execute();

			

			echo "De auto is toegevoegd. <br />";
			echo "<a href='index.html'> Terug naar het menu </a>";
		?>

	</center>
	</body>
</html>
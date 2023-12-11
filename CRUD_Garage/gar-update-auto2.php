<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="utf-8">
		<title>gar-update-auto2.php</title>
		<style type="text/css">
			body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}
		</style>
	</head>
	<body><center>
		<h1>Garage update auto 1</h1>
		<p>
			Dit formulier wordt gebruikt om klantgegevens te wijzigen in de tabel "auto" van de database "garage".
		</p>
		<?php

			$klantid = $_POST["klantidvak"];

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

			echo "<form action='gar-update-auto3.php' method='post'>";
				foreach($klanten as $auto)
				{
					echo "klantid:" . $auto["klantid"];
					echo "<input type='hidden' name='klantidvak' ";
					echo "value=' " . $auto["klantid"] . " '> <br /> ";

					echo "autokenteken: <input type='text' ";
					echo "name = 'autokentekenvak' ";
					echo "value ='" .$auto["autokenteken"]. "' ";
					echo "> <br />";

					echo "automerk: <input type='text' ";
					echo "name = 'automerkvak' ";
					echo "value = '" .$auto["automerk"]. "' ";
					echo "> <br />";

					echo "autotype: <input type='text' ";
					echo "name = 'autotypevak' ";
					echo "value = '" .$auto["autotype"]. "' ";
					echo "> <br />";

					echo "autokmstand: <input type='text' ";
					echo "name = 'autokmstandvak' ";
					echo "value = '" .$auto["autokmstand"]. "' ";
					echo "> <br />";
				}
				echo "<input type='submit'>";
			echo "</form>";
		?>
		</center>
	</body>
</html>
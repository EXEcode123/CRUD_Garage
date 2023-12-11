<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="Anjo Eijeriks">
		<meta charset="UTF-8">
		<title>gar-create-klant1.php</title>
		<style>
			body{
				background: url(https://images2.alphacoders.com/774/774372.jpg); background-size: 100%,100% ;">
			}

			h1{
				font-size: 50px;
			}
			p{
				font-size: 20px;
			}

			form{
				font-size: 30px;
				
			}
		</style>
			
	</head>
	<body><center>
		<h1>Garage create klant 1</h1>
		<p>
			U kunt uw klantgegevens toevoegen in dit formulier.
		</p>
		<form class="formulier" action="gar-create-klant2.php" method="post">
			klantnaam:		<input type="text" name="klantnaamvak">		<br /> 	<br>
			klantadres: 	<input type="text" name="klantadresvak">	<br />	<br>
			klantpostcode: 	<input type="text" name="klantpostcodevak">	<br />	<br>
			klantplaats:	<input type="text" name="klantplaatsvak">	<br />	<br>
			<input type="submit">
		</form></center>

	</body>
</html>
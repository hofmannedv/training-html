<html>
<body>
	<?php

	$sorte = $_POST["sorte"];
	$anzahl = $_POST["anzahl"];
	$einzelpreis = 1.50;
	$gesamtpreis = $anzahl * $einzelpreis;
	echo "Ausgewählte Sorte Eis: " . $sorte . "<br>";
	echo "Anzahl Kugeln: " . $anzahl . "<br>";
	echo "Der Gesamtpreis beträgt " . $gesamtpreis . " Goldtaler <br>";

	if ($anzahl > 4) {
		echo "Bonus zu ihrer Bestellung: extra Streusel nach Wahl <br>";
	}
	?>
</body>
</html>
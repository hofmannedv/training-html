<html>
  <head></head>
  <body>

<div style="background: lightblue">
  <?php
  	// Zeitzone festlegen
  	setlocale(LC_TIME, "de_DE");

  	// Datum mit Linie ausgeben
  	echo date('D d. F Y');
  	echo "<hr>";

  	// Überschrift ausgeben
  	echo "Hallo Welt :)";
?>
</div>
  </body>
</html>
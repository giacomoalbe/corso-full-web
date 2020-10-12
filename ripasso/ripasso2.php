<?php

require "funzioni.php";

//echo "Evviva le funzioni!<br>";

/*
$lista = [1,2,3,4,5];

$lista[] = 6;
$lista[] = 7;
$lista[] = 8;
*/
$lista = [];

// Popolazione Randomica Lista
$numero_elementi = 100;
$min = 1;
$max = 100;

for ($i = 0; $i < $numero_elementi; $i++) {
  $lista[] = rand($min, $max);
}

$lunghezza = count($lista);

// Somma degli elementi
$somma = array_sum($lista);

// Media / Average
$media = $somma / $lunghezza;

// Minimo
$minimo = min($lista);

// Massimo
$massimo = max($lista);

$std = 0;

$std = std_dev($lista);

$numero_casuale = rand(1, 100);

// Modo molto brutto
//echo "<h1>" . $lunghezza . "</h1>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Lunghezza: <?=$lunghezza?></h1>
  <h1>Somma: <?=$somma?></h1>
  <h1>Media: <?=$media?></h1>
  <h1>Minimo: <?=$minimo?></h1>
  <h1>Massimo Decimo Meridio: <?=$massimo?></h1>
  <h1>STD: <?=$std?></h1>
  <h1>Numero casuale: <?=$numero_casuale?></h1>
</body>
</html>

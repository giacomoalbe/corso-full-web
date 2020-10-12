<?php

echo "<h1>Si dice icio non eco!</h1>";

$marvin = 'Marvin è "bello"<br>';

echo $marvin;

$numero = 42;
$decimale = 10.5;
$verita_delle_verita = false; // 0
$verita_delle_verita = true; // 1
$char = 'c';

/*
 * Posso fare i commenti multilinea
 *
 *
 */

// Posso fare un commento singolo
// Se vado alla riga sotto


$snake_case = "snake_case";
$camelCase = "camelCase";
//$kebab-case

$lista = ["uno", "due", "tre"];

echo $lista[0];
echo "<br>";

$dict = [
  "chiave" => "valore",
  "numero" => 10,
  "array"  => $lista,
];

echo $dict["chiave"];
echo "<br>";
echo $dict["numero"];
echo "<br>";
var_dump($dict["array"]);
echo "<br>";

echo "Count: " . count($lista) . "<br>";

//var_dump($dict);

//die("Esco prematuramente");

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// Istruzioni condizionali
$eta = 14;
$marviness = 5;

// MARVINESS da 1 a 5
// ETA da 0 a 150

echo "Eta: " . $eta . "<br>";
echo "Marviness: " . $marviness . "<br>";

if ($eta >= 18 || $marviness == 5) {
  echo "Sei un vero Marvin! <br>";
} else {
  echo "Ne manca ancora di strada...<br>";
}

// Maggiore >
// Minore <
// Uguale ==
// Diverso !=
// Opposto !
// AND logico &&
// OR logico ||

// $i = $i + 1;
// $i += 1;
// $i++;

for ($i = 5; $i < 10; $i++) {
  echo $i . "<br>";
}

echo "Dopo<br>";

$lista = [1,2,3,4,5,6,7];

for ($i = 0; $i < count($lista); $i++) {
  echo "Lista[" . $i . "] = " . $lista[$i] . "<br>";
}

foreach ($lista as $index => $numero) {
  echo $index . " = " . $numero . "<br>";
}

foreach ($dict as $chiave => $valore) {
  echo $chiave . " = " . $valore . "<br>";
}


$r = 30;
$g = 128;
$b = 4;

$color = "rgb(" . $r . "," . $g . "," . $b . ");";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div style="width: 200px; height: 200px; background-color: <?=$color?>;>">
  </div>
</body>
</html>

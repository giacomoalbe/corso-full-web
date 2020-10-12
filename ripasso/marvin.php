<?php

$eta = 27;
$marviness = 5;

echo "Eta: " . $eta . "<br>";
echo "Marviness: " . $marviness . "<br>";

// VALIDAZIONE!!!!
if (!($eta >= 0 && $eta <= 150)) {
  die("La tua età è sbagliata");
}

if (!($marviness >= 1 && $marviness <= 5)) {
  die("Te la stai credendo troppo... (o troppo poco)");
}

if ($eta >= 18 || $marviness == 5) {
  echo "Sei un vero Marvin! <br>";
} else {
  echo "Ne manca ancora di strada...<br>";
}

?>

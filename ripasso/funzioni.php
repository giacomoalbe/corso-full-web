<?php
function std_dev($array) {
  $lunghezza = count($array);
  $media = array_sum($array) / $lunghezza;

  $somma = 0;

  foreach ($array as $elemento) {
    $scarto = ($elemento - $media)**2;

    $somma += $scarto;
    // $somma = $somma + $scarto;
  }

  $somma = $somma / $lunghezza;
  $somma = sqrt($somma);

  return $somma;
}
?>

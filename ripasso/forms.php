<?php
$show_color = false;

if (
  isset($_REQUEST['rosso'])
  && isset($_REQUEST['verde'])
  && isset($_REQUEST['blu'])
) {
  $rosso = $_REQUEST['rosso'];
  $verde = $_REQUEST['verde'];
  $blu = $_REQUEST['blu'];

  $colore = "rgb($rosso, $verde, $blu)";

  $show_color = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body
  <?php if ($show_color) { ?>
  style="background-color: <?=$colore?>"
  <?php }?>
>
  <?php if (!$show_color) { ?>
  <h1>Forms</h1>
  <form action="forms.php" method="POST">
    <div>
      <label for="rosso">Rosso</label>
      <input id="rosso" name="rosso" type="range" min="0" max="255">
    </div>
    <div>
      <label for="verde">Verde</label>
      <input name="verde" id="verde" type="range" min="0" max="255">
    </div>
    <div>
      <label for="blu">Blu</label>
      <input id="blu" name="blu" type="range" min="0" max="255">
    </div>
    <input type="submit" value="Colora!">
  </form>
  <?php } else { ?>
  <a href="forms.php">Indietro</a>
  <?php } ?>
</body>
</html>

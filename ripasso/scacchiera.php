<?php

$lunghezza = $_REQUEST['lunghezza'];
$altezza = $_REQUEST['altezza'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .row {
      display: flex;
      flex-direction: row;
    }

    .tassello {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
    }

    .bianco {
      color: black;
      background-color: white;
    }

    .nero {
      color: white;
      background-color: black;
    }
</style>
</head>
<body>
  <?php for ($i = 0; $i < $altezza; $i++) { ?>
  <div class="row">
    <?php for ($j = 0; $j < $lunghezza; $j++) { ?>



      <?php if (($i + $j) % 2 == 0) { ?>


      <div class="tassello bianco"><?=$i . "," . $j ?></div>
      <?php } else { ?>
      <div class="tassello nero"><?=$i . "," . $j ?></div>
      <?php }  ?>
    <?php } ?>
  </div>
  <?php } ?>
</body>
</html>

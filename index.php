<?php
  $h = date('H') + 3;
  $img = (int)($h / 6);
  $time = 'Ночь';

  const MIN = 'минут';
  function get_min($a) {
    if (($a >= 5 && $a <= 20) || ($a == 0) || ($a % 10 == 0) || ($a % 10 >= 5 && $a % 10 <= 9)) {
      return $a . MIN;
    } elseif (($a >= 2 && $a <= 4) || ($a % 10 >= 2 && $a % 10 <= 4)) {
      return $a . MIN . 'ы';
    }
    return $a . MIN . 'а';
  }
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    <style>
        body{
          background: url(img/<?php echo $img;?>.jpg);
          background-size: cover;
          color: red;
        }
    </style>
</head>
  <body>
  <h1 data-time="<?php echo $img?>"><?php echo $h?></h1>
  <h2>
      <?php
    if ($img == '1') {
        $time = 'Утро';
    } elseif ($img == '2') {
        $time = 'День';
    } elseif ($img == '3') {
        $time = 'Вечер';
    }
      echo $time;
    ?>
  </h2>
  <h3><?php echo get_min(30) ?></h3>
  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>
<!--<script src="index.js"></script>-->
</body>
</html>

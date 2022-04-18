<?php
  $h = date('H') + 3;
//  $img = ($h / 6) % 4
  $img = (int)($h / 6);
  $time = '';
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
          /*background-size: cover;*/
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
    } elseif ($img == '4') {
        $time = 'Ночь';
    }
      echo $time;
    ?>
  </h2>
  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>
<!--<script src="index.js"></script>-->
</body>
</html>

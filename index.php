<?php
  $h = date('H') + 3;
  $img = (int)($h / 6);
  $time = 'Ночь';

  $id = $_GET['id'];

  $text = file_get_contents("data/$id.txt");

//  $files = scandir('data');
//  var_dump($files);


  if (count($_POST) > 0) {
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      if (strlen(str_replace(' ', '', $name)) < 2) {
          echo  'Имя должно быть не короче двух символов!<br>';
      } elseif (!ctype_digit($phone)) {
          echo  'Номер телефона должен состоять из цифр!<br>';
      } else {
          file_put_contents('apps.txt', "$name $phone\n", FILE_APPEND);
          echo  'Ваша заявка принята, ожидайте звонка!<br>';
      }
  }

  const MIN = ['минут', 'минута', 'минуты'];

  const SEC = ['секунд', 'секунда', 'секунды'];

  const DAY = ['дней', 'день', 'дня'];

  $capitals = [
      'Россия' => ['Москва', 'Санкт-Петербург', 'Новосибирск', 'Омск'],
      'Франция' => ['Париж', 'Марсель', 'Ницца'],
      'Англия' => ['Лондон', 'Ливерпуль', 'Бирмингем']
  ];

  echo '<ul>';

  foreach ($capitals as $country => $towns) {
    echo '<li>';
    echo $country;
    echo '<ol>';
    foreach ($towns as $town) {
      echo "<li>$town</li>";
    };
    echo '</ol></li>';
  }

echo '</ul>';



  function get_min($a, $arr) {
    if ($a % 10 == 1) {
      return $a . $arr[1];
    } elseif ($a % 100 >= 5 && $a % 100 <= 20) {
        return $a . $arr[0];
    } elseif ($a % 10 >= 2 && $a % 10 <= 4) {
      return $a . $arr[2];
    }
    return $a . $arr[0];
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
  <h3><?php echo get_min(360, DAY) ?></h3>
  <?php
    for ($i = 1; $i < 4; $i++) {
        echo "<a href=\"index.php?id=$i\">Статья $i</a>";
    }
  ?>

  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>
  <p>lorem</p>

  <form method="post">
    Имя<br>
    <input type="text" name="name"><br>
    Телефон<br>
    <input type="text" name="phone"><br>
    <input type="submit" value="Отправить">
  </form>
<!--<script src="index.js"></script>-->
</body>
</html>

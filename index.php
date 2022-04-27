<?php
  $h = date('H') + 3;
  $img = (int)($h / 6);
  $time = 'Ночь';

  $id = $_GET['id'];

  $text = file_get_contents("data/$id.txt");

  var_dump($_POST);


  if (count($_POST) > 0) {
      $name = trim($_POST['name']);
      $phone = trim($_POST['phone']);
      $dt = date("Y-m-d H:i:s");

      if (strlen($name) < 2) {
          $msg = 'Имя должно быть не короче двух символов!';
      }
      elseif(strlen($phone) < 7) {
          $msg = 'Мы не умеем звонить на номера короче 7 цифр!';
      }
      elseif(!is_numeric($phone)) {
          $msg = 'Номер телефона должен состоять только из цифр!';
      }
      else {
          file_put_contents('apps.txt', "$dt $name $phone\n", FILE_APPEND);

          $msg = 'Ваша заявка принята, ожидайте звонка!';
      }
  }
  else {
    $name = '';
    $phone = '';
    $msg = 'Привет! Заполни поля и нажми кнопку!';
  }

  const MIN = ['минут', 'минута', 'минуты'];

  const SEC = ['секунд', 'секунда', 'секунды'];

  const DAY = ['дней', 'день', 'дня'];

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
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
  <h3><?php echo get_min(363, DAY) ?></h3>
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
    <input type="text" name="name" value="<?php echo $name; ?>"><br>
    Телефон<br>
    <input type="text" name="phone" value="<?php echo $phone; ?>"><br>
    <input type="submit" value="Отправить">
  </form>
  <?php
    echo $msg;
  ?>
<!--<script src="index.js"></script>-->
</body>
</html>

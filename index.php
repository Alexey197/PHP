<?php

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
//          $db = new PDO('mysql:host=localhost;dbname=mySite', 'root', 'root');
//          $query = $db->prepare("INSERT INTO apps (name, phone) VALUES(:name, :phone)");
//          $values = ['name' => $name, 'phone' => $phone];
//          $query->execute($values);

          $msg = 'Ваша заявка принята, ожидайте звонка!';
      }
  }
  else {
    $name = '';
    $phone = '';
    $msg = 'Привет! Заполни поля и нажми кнопку!';
  }

  ?>

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
<?php

    $db = new PDO('mysql:host=localhost;dbname=mySite', 'root', 'root');
    $query = $db->prepare("SELECT * FROM apps");
    $query->execute();

    $apps = $query->fetchAll(PDO::FETCH_ASSOC);

    echo '<table>';

//    echo '<pre>';
//    print_r($apps);
//    echo '<pre>';

    foreach ($apps as $app) {

        echo '<tr>';

        echo '<td>' . $app['dt'] . '</td>';
        echo '<td>' . $app['name'] . '</td>';
        echo '<td>' . $app['phone'] . '</td>';

        echo '</tr>';
    }

    echo '</table>';
?>
<style>
  table, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
  }

</style>


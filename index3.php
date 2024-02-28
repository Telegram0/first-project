<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `МФУ`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>МФУ</title>
</head>
<body>
<body background="4.jpg">
<body background = "4.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>ID Сотрудник</th>
      <th>Серийный номер</th>
      <th>Модель</th>
      <th>Место нахождения</th>
      <th>Списан\Не списан</th>
      </tr>
        <?php

            foreach($goods as $item)  {
                ?>
                <tr>
                <td><?php echo $item[0] ?></td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo $item[3] ?></td>
                <td><?php echo $item[4] ?></td>
                <td><?php echo $item[5] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить новый МФУ</h2>
        <form action = "Update2.php" method="post">
            <p>ID Сотрудник</p>
            <input type = "text"  name = "ID_Сотрудник">
            <p>Серийный номер</p>
            <input type = "text"  name = "Серийный_номер">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Место нахождения</p>
            <input type = "text"  name = "Место_нахождения">
            <p>Списан\Не списан</p>
            <input type = "text"  name = "СписанНе_списан">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>
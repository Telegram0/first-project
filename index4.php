<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Комплектующие`");
$goods = mysqli_fetch_all($goods);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Комплектующие</title>
</head>
<body>
<body background="5.jpg">
<body background = "5.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Серийный номер</th>
      <th>Модель</th>
      <th>Название блока</th>
      <th>ID Принтер</th>
      <th>ID МФУ</th>
      <th>В ремонте</th>
      <th>Хранится на складе</th>
      <th>Списан</th>
      <th>Количество замен картриджа</th>
      <th>Количество напечатанных листов</th>
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
                <td><?php echo $item[6] ?></td>
                <td><?php echo $item[7] ?></td>
                <td><?php echo $item[8] ?></td>
                <td><?php echo $item[9] ?></td>
                <td><?php echo $item[10] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить новое комплектующие</h2>
        <form action = "Update3.php" method="post">
            <p>Серийный номер</p>
            <input type = "text"  name = "Серийный_номер1">
            <p>Модель</p>
            <input type = "text"  name = "Модель1">
            <p>Название блока</p>
            <input type = "text"  name = "Название_блока">
            <p>ID Принтер</p>
            <input type = "text"  name = "ID_Принтер">
            <p>ID МФУ</p>
            <input type = "text"  name = "ID_МФУ">
            <p>В ремонте</p>
            <input type = "text"  name = "В_ремонте">
            <p>Хранится на складе</p>
            <input type = "text"  name = "Хранится_на_складе">
            <p>Списан</p>
            <input type = "text"  name = "Списан1">
            <p>Количество замен картриджа</p>
            <input type = "text"  name = "Количество_замен_картриджа">
            <p>Количество напечатанных листов</p>
            <input type = "text"  name = "Количество_напечатанных_листов">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>
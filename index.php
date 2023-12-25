<?php
require_once 'config/connect.php';
$w = mysqli_query($connect, "SELECT * FROM `Объект`");
$w = mysqli_fetch_all($budget);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Budget</title>
</head>
<body>
<table>
    <tr>
      <th>id</th>
      <th>Фамилия</th>
      <th>Имя</th>
      <th>Отчество</th>
      <th>Номер картриджа</th>
      <th>Номер принтера или МФУ</th>
      <th>Комментарии и замечания по ходу выполнения (если требуются)</th>
      <th>&#9998;</th>
    </tr>
    <?php
      foreach($budget as $budgets) {
        ?>
          <tr>
            <td><?= $w[0] ?></td>
            <td><?= $w[1] ?></td>
            <td><?= $w[2] ?></td>
            <td><?= $w[3] ?></td> 
            <td><?= $w[4] ?></td>
            <td><?= $w[5] ?></td> 
            <td><?= $w[6] ?></td>
            <td><a href="update.php?id=<?= $w[0] ?>">Обновить</a></td>
          </tr>
        <?php
      }
    ?>
  </table>
  <h2>Добавить нового сотрудника для картриджа</h2>
  <form action="vendor/create.php" method="post">
    <p>Фамилия</p>
    <textarea name="name"></textarea>
    <p>Имя</p>
    <input type ="number" name= "videl">
    <p>Отчество</p>
    <input type="number" name="zatr">
    <p>Номер картриджа</p>
    <input type="number" name="ost">
    <p>Номер принтера или МФУ</p>
    <input type="number" name="dat">
    <p>Комментарии и замечания по ходу выполнения (если требуются)</p>
    <textarea name="text" name="comm"></textarea>
    <button type="submit">Добавить</button>
  </form>
</body>
</html>
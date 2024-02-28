<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Техника</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Название техники</th>
            <th>Тип</th>
            <th>Кабинет</th>
        </tr>
        <?php

            foreach($goods as $item)
            {
                ?>
                <tr>
                <td> <?php echo $item[0] ?> </td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo $item[3] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить новую технику</h2>
        <form action = "Add.php" method="post">
            <p>Название</p>
            <input type = "text"   name = "name">
            <p>Тип техеники</p>
            <input type = "text"  name = "type">
            <p>Кабинет</p>
            <input type = "text"  name = "cabinet">
          
            <button type = "submit">Добавить</button>

           

        </form>
        <head>
        
        
            
            <h2>Обновить технику</h2> 

            <form action = "Add.php" method="post">
            <p>ID</p>
            <input type = "text2" name = "id">   
            <p>Название</p>
            <input type = "text2"   name = "name1">
            <p>Тип техеники</p>
            <input type = "text2"  name = "type1">
            <p>Кабинет</p>
            <input type = "text2"  name = "cabinet1">
            <button type = "submit2">Обновить</button>
           
            
         
        </form>
      
        </head>
        <h2>Удалить технику</h2> 
        <form action = "delete.php" method="post">
            <p>ID</p>
            <input type = "text2" name = "id2">   
          
            <button type = "submit3">Удалить</button>
           
        </form>
        

        
    


</body>
</html>
<?php

require_once ('config/connect.php');

$ID = $_POST['id'];
$name = $_POST['name1'];
$type = $_POST['type1'];
$cabinet = $_POST['cabinet1'];

$sql2 = "UPDATE `goods` SET `name`='$name',`type`='$type',`Cabinet`='$cabinet' WHERE `id` = '$ID'";

$connect -> query ($sql2); 




header ('location: index.php');

?>

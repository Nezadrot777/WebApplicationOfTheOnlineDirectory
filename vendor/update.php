<?php

require_once '../config/connection.php';

$id = filter_var(trim($_POST['id']), FILTER_UNSAFE_RAW);
$name = filter_var(trim($_POST['name']), FILTER_UNSAFE_RAW);
$diameter = filter_var(trim($_POST['diameter']), FILTER_UNSAFE_RAW);
$temperature = filter_var(trim($_POST['temperature']), FILTER_UNSAFE_RAW);

if(mb_strlen($name) < 0 || mb_strlen($name) > 100) {
    echo "Укажите имя планеты";
    exit();
} else if(mb_strlen($diameter) < 0 || mb_strlen($diameter) > 100) {
    echo "Укажите диаметр планеты";
    exit();
} else if(mb_strlen($temperature) < 0 || mb_strlen($temperature) > 100) {
    echo "Укажите температуру поверхности планеты";
    exit();
}

mysqli_query($connect, "UPDATE `Planets` SET `name` = '$name', `diameter` = '$diameter', `temperature` = '$temperature' WHERE `Planets`.`id` = '$id'");

header('Location: ../detalis.php');

?>
<?php

    require_once '../config/connection.php';

    $name = filter_var(trim($_POST['name']), FILTER_UNSAFE_RAW);
    $diameter = filter_var(trim($_POST['diameter']), FILTER_UNSAFE_RAW);
    $temperature = filter_var(trim($_POST['temperature']), FILTER_UNSAFE_RAW);

    if(mb_strlen($name) < 0 || mb_strlen($name) > 100) {
        echo "Укажите имя планеты";
        exit();
    } else if(mb_strlen($diameter) < 0 || mb_strlen($diameter) > 100) {
        echo "Укажите диаметр планеты";
        exit();
    } else if(mb_strlen($number) < 0 || mb_strlen($number) > 100) {
        echo "Укажите температуру поверхности планеты";
        exit();
    }

    mysqli_query($connect, "INSERT INTO `Planets` (`name`, `diameter`, `temperature`) VALUES ('$name', '$diameter', '$temperature')");

    header('Location: ../detalis.php');

?>
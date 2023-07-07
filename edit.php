<?php

    require_once 'config/connection.php';

    $planet_id = $_GET['id'];

    $planet = mysqli_query($connect, "SELECT * FROM `Planets` WHERE id = '$planet_id'");
    $planet = mysqli_fetch_assoc($planet);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit</title>
</head>
<body>
    <h3>Изменение информации о планете</h3>
    <hr>
    <form action="vendor/update.php" method="post" name="planet" class="main-form">
        <input type="hidden" name="id" value="<?= $planet['id'] ?>">
        <label for="name">Название планеты</label><br>
        <input type="text" name="name" id="name" value="<?= $planet['name'] ?>"><br>
        <label for="diameter">Диаметр планеты</label><br>
        <input type="text" name="diameter" id="diameter" value="<?= $planet['diameter'] ?>"><br>
        <label for="email">Температура поверхности планеты</label><br>
        <input type="text" name="temperature" id="temperature" value="<?= $planet['temperature'] ?>"><br>
        <input class="main-button" type="submit" onclick="alert('Данные отправлены')"
        name="check_two" value="Изменить">
        <input class="main-button" type="reset" onclick="alert('Данные очищены')"
        name="check_one" value="Очистить">
        <button><a href="detalis.php">Назад</a></button>
    </form>
</body>
</html>
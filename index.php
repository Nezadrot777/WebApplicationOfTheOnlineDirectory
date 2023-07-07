<?php

    require_once 'config/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Planets</title>
</head>
<body>
    <h1>Добро пожаловать в cправочную онлайн систему</h1>
    <h1>"Планеты"</h1>
    <button onclick="document.location='login.html'">Войти в личный кабинет</button>
    <hr>
    <table>
        <thead>
            <tr>
                <th>Номер</th>
                <th>Название</th>
                <th>Диаметр</th>
                <th>Температура</th>
            </tr>
        </thead>
        <tbody>

            <?php

                $planets = mysqli_query($connect, "SELECT * FROM `Planets`");
                $planets = mysqli_fetch_all($planets);
                foreach ($planets as $planet) {
                ?>

                    <tr>
                        <td><?= $planet[0] ?></td>
                        <td><?= $planet[1] ?></td>
                        <td><?= $planet[2] ?></td>
                        <td><?= $planet[3] ?></td>
                    </tr>

                <?php

                }

            ?>

        </tbody>
    </table>
</body>
</html>
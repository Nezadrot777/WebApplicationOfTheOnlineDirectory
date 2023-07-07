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
    <title>Details</title>
</head>
<body>
    <h1>Онлайн-справочник "Планеты"</h1>
    <button onclick="document.location='index.php'">Выйти из личного кабинета</button>
    <br>
    <button onclick="document.location='add.html'">Добавить новую планету</button>
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
                        <td><a href="edit.php?id=<?= $planet[0] ?>">Изменить</a></td>
                        <td><a onclick="return checkDelete()" href="vendor/delete.php?id=<?= $planet[0] ?>">Удалить</a></td>
                    </tr>

                <?php

                }

            ?>

        </tbody>
    </table>

    <script language="JavaScript" type="text/javascript">
        function checkDelete(){
        return confirm('Вы уверены, что хотите удалить данные о планете под номером ' + <?= $planet[0] ?> + '?');
        }
    </script>

</body>
</html>
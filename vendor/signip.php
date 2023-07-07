<?php
    
    require_once '../config/connection.php';

    $login = filter_var(trim($_POST['login']), FILTER_UNSAFE_RAW);
    $passwd = filter_var(trim($_POST['passwd']), FILTER_UNSAFE_RAW);

    if(mb_strlen($login) == null) {
        echo "Введите логин";
        exit();
    } else if(mb_strlen($passwd) == null) {
        echo "Введите пароль";
        exit();
    }

    $result = mysqli_query($connect, "SELECT * FROM `Users` WHERE `login` = '$login' AND `passwd` = '$passwd'");

    $user = $result -> fetch_assoc();

    if(count($user) == 0) {
        
        echo "Такой пользователь не найден";

        header('Location: /');

    } else {
       
        header('Location: ../detalis.php');

    };

?>
<?php

    require_once '../config/connection.php';

    $id = $_GET['id'];

    mysqli_query($connect, "DELETE FROM `Planets` WHERE `Planets`.`id` = '$id'");
    
    header('Location: ../detalis.php');

?>
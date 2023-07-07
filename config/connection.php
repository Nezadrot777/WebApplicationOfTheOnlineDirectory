<?php

   $connect = mysqli_connect('127.0.0.1:3306', 'root', 'root', 'db1');

   if(!$connect) {
    die('Error connect database!');
   }

?>
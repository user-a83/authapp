<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'users');

    if (!$connect) {
        die('Error connect to DataBase');
    }
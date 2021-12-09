<?php

    $connect = mysqli_connect('localhost:82', 'root', '', 'test');

    if (!$connect) {
        die('Error connect to DataBase');
    }
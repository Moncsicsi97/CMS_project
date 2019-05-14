<?php

//Login system with the connection of the data base
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if (!$connection) {
    die("Database connection failed");
}

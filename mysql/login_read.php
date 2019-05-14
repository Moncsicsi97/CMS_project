<?php


 //Login system with the connection of the data base

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if (!$connection) {
        die("Datebase connection failed");
        }

    $query = "SELECT * FROM users ";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die('Query Failed' . mysqli_error());
         }


?>







<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--CDN to make the site responsive-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<!--Fields for the username,password and the submit button. -->
<div

    class ="container">
        <div class ="col-sm-6">
            <?php
            while ($row = mysqli_fetch_row($result)){
                ?>
            <pre>
                <?php

                print_r($row);
                ?>
            </pre>
            <?php


            }




            ?>



        </div>
</div>
</body>

</html>
<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'GrandSlamStats');
    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>
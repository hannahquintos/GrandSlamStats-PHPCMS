<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'PHPCMS');
    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>
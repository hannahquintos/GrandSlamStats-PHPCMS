<?php
    $connect = mysqli_connect('sql311.infinityfree.com', 'if0_35758275', 'dv6LmM0n0Q', 'if0_35758275_GrandSlamStats');
    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    }
?>
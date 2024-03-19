<?php

    //if delete button was clicked
    if(isset($_GET['delete'])){

        //get id of record to delete
        $id = $_GET['id'];

        // Connection string
        include('connect.php');

        $query = "DELETE FROM grandSlams WHERE grandSlamId = '$id'";

        $grandSlam = mysqli_query($connect, $query);

        if($grandSlam){
            // echo("Success");
            header("Location: ../grandSlams.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
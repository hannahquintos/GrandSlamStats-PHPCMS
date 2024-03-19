<?php

    //if delete button was clicked
    if(isset($_GET['delete'])){

        //get id of record to delete
        $id = $_GET['id'];

        // Connection string
        include('connect.php');

        $query = "DELETE FROM players WHERE playerId = '$id'";

        $player = mysqli_query($connect, $query);

        if($player){
            // echo("Success");
            header("Location: ../players.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
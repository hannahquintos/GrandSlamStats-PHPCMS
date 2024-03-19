<?php

    //if delete button was clicked
    if(isset($_GET['delete'])){

        //get id of record to delete
        $id = $_GET['id'];

        // Connection string
        include('connect.php');

        $queryTournaments = "DELETE FROM tournaments WHERE tournamentId = '$id'";
        $tournament = mysqli_query($connect, $queryTournaments);

        $queryFinals = "DELETE FROM finals WHERE tournamentId = '$id'";
        $final = mysqli_query($connect, $queryFinals);

        if($tournament && $final){
            // echo("Success");
            header("Location: ../tournaments.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
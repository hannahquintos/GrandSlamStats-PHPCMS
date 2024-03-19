<?php

    //if submit button was clicked
    if(isset($_POST['editTournament'])){
        // print_r($_POST);

        
        $tournamentId = $_POST['tournamentId'];
        $grandSlamId = $_POST['grandSlamId'];
        $tournamentYear = $_POST['tournamentYear'];
        $typeId = $_POST['typeId'];

        $finalId = $_POST['finalId'];
        $champion = $_POST['champion'];
        $opponent = $_POST['opponent'];
        $score = $_POST['score'];
        $youtubeURL = $_POST['youtubeURL'];

        // Connection string
        include('connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $queryTournament = "UPDATE tournaments 
                            SET grandSlamId = '" . mysqli_real_escape_string($connect, $grandSlamId) . "', 
                                tournamentYear = '" . mysqli_real_escape_string($connect, $tournamentYear) . "', 
                                typeId = '" . mysqli_real_escape_string($connect, $typeId) . "'
                            WHERE tournamentId = '$tournamentId'";

        $tournament = mysqli_query($connect, $queryTournament);

        //since the finals table is linked by the foregin key tournamentId,
        //wait until data was successfully updated in the tournaments table, 
        //then update data into finals table for the record with the corresponding tournamentId of record just inserted
        if($tournament){

            $queryFinal = "UPDATE finals 
                            SET champion = '" . mysqli_real_escape_string($connect, $champion) . "', 
                                opponent = '" . mysqli_real_escape_string($connect, $opponent) . "', 
                                score = '" . mysqli_real_escape_string($connect, $score) . "',
                                youtubeURL = '" . mysqli_real_escape_string($connect, $youtubeURL) . "'
                            WHERE tournamentId = '$tournamentId'";

            $final = mysqli_query($connect, $queryFinal);
        }

        if($final){
            // echo("Success");
            header("Location: ../tournaments.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }

    }

?>
<?php

    //if submit button was clicked
    if(isset($_POST['newTournament'])){
        // print_r($_POST);

        //get values from form
        $grandSlamId = $_POST['grandSlamId'];
        $tournamentYear = $_POST['tournamentYear'];
        $typeId = $_POST['typeId'];

        $champion = $_POST['champion'];
        $opponent = $_POST['opponent'];
        $score = $_POST['score'];
        $youtubeURL = $_POST['youtubeURL'];


        // Connection string
        include('connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $queryTournament = "INSERT INTO tournaments (grandSlamId, tournamentYear, typeId) 
                            VALUES (
                                '".mysqli_real_escape_string($connect, $grandSlamId)."',
                                '".mysqli_real_escape_string($connect, $tournamentYear)."',
                                '".mysqli_real_escape_string($connect, $typeId)."')";

        $tournament = mysqli_query($connect, $queryTournament);
        

        //since the finals table is linked by the foregin key tournamentId,
        //wait until data was successfully inserted into tournaments table, 
        //then insert data into finals table with the tournamentId of record just inserted
        if($tournament){

            //get tournamentId from record just inserted
            $tournamentId = mysqli_insert_id($connect);

            $queryFinal = "INSERT INTO finals (tournamentId, champion, opponent, score, youtubeURL) 
                        VALUES (
                            '".mysqli_real_escape_string($connect, $tournamentId)."',
                            '".mysqli_real_escape_string($connect, $champion)."',
                            '".mysqli_real_escape_string($connect, $opponent)."',
                            '".mysqli_real_escape_string($connect, $score)."',
                            '".mysqli_real_escape_string($connect, $youtubeURL)."')";

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
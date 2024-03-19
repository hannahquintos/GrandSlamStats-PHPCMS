<?php

    //if submit button was clicked
    if(isset($_POST['editPlayer'])){
        // print_r($_POST);

        //get values from form
        $playerId = $_POST['playerId'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthday = $_POST['birthday'];
        $country = $_POST['country'];
        $bio = $_POST['bio'];

        // Connection string
        include('connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $query = "UPDATE players 
                SET firstName = '" . mysqli_real_escape_string($connect, $firstName) . "', 
                    lastName = '" . mysqli_real_escape_string($connect, $lastName) . "', 
                    birthday = '" . mysqli_real_escape_string($connect, $birthday) . "',
                    country = '" . mysqli_real_escape_string($connect, $country) . "', 
                    bio = '" . mysqli_real_escape_string($connect, $bio) . "'
                WHERE playerId = '$playerId'";

        $player = mysqli_query($connect, $query);

        if($player){
            // echo("Success");
            header("Location: ../players.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
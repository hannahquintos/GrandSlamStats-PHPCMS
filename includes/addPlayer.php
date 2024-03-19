<?php

    //if submit button was clicked
    if(isset($_POST['newPlayer'])){
        // print_r($_POST);

        //get values from form
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $birthday = $_POST['birthday'];
        $country = $_POST['country'];
        $bio = $_POST['bio'];

        // Connection string
        include('connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $query = "INSERT INTO players (firstName, lastName, birthday, country, bio) 
                VALUES (
                    '".mysqli_real_escape_string($connect, $firstName)."',
                    '".mysqli_real_escape_string($connect, $lastName)."',
                    '".mysqli_real_escape_string($connect, $birthday)."',
                    '".mysqli_real_escape_string($connect, $country)."',
                    '".mysqli_real_escape_string($connect, $bio)."')";

        $player = mysqli_query($connect, $query);

        if($player){
            // echo("Success");
            header("Location: ../players.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
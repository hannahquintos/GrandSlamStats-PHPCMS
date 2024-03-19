<?php

    //if submit button was clicked
    if(isset($_POST['newGrandSlam'])){
        // print_r($_POST);

        //get values from form
        $grandSlam = $_POST['grandSlam'];
        $location = $_POST['location'];
        $venue = $_POST['venue'];
        $surface = $_POST['surface'];
        $description = $_POST['description'];
        $imageURL = $_POST['imageURL'];

        // Connection string
        include('connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $query = "INSERT INTO grandSlams (grandSlam, location, venue, surface, description, imageURl) 
                VALUES (
                    '".mysqli_real_escape_string($connect, $grandSlam)."',
                    '".mysqli_real_escape_string($connect, $location)."',
                    '".mysqli_real_escape_string($connect, $venue)."',
                    '".mysqli_real_escape_string($connect, $surface)."',
                    '".mysqli_real_escape_string($connect, $description)."',
                    '".mysqli_real_escape_string($connect, $imageURL)."')";

        $grandSlam = mysqli_query($connect, $query);

        if($grandSlam){
            // echo("Success");
            header("Location: ../grandSlams.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
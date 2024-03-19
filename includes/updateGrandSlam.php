<?php

    //if submit button was clicked
    if(isset($_POST['editGrandSlam'])){
        // print_r($_POST);

        //get values from form
        $grandSlamId = $_POST['grandSlamId'];
        $grandSlam = $_POST['grandSlam'];
        $location = $_POST['location'];
        $venue = $_POST['venue'];
        $surface = $_POST['surface'];
        $description = $_POST['description'];
        $imageURL = $_POST['imageURL'];

        // Connection string
        include('connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $query = "UPDATE grandSlams 
                    SET grandSlam = '" . mysqli_real_escape_string($connect, $grandSlam) . "', 
                        location = '" . mysqli_real_escape_string($connect, $location) . "', 
                        venue = '" . mysqli_real_escape_string($connect, $venue) . "', 
                        surface = '" . mysqli_real_escape_string($connect, $surface) . "', 
                        description = '" . mysqli_real_escape_string($connect, $description) . "', 
                        imageURL = '" . mysqli_real_escape_string($connect, $imageURL) . "' 
                    WHERE grandSlamId = '" . mysqli_real_escape_string($connect, $grandSlamId) . "'";


        $grandSlam = mysqli_query($connect, $query);

        if($grandSlam){
            // echo("Success");
            header("Location: ../grandSlams.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
<?php

    //if submit button was clicked
    if(isset($_POST['editUser'])){
        // print_r($_POST);

        //get values from form
        $userId = $_POST['userId'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Connection string
        include('connect.php');

        //use mysqli_real_escape_string to sanitize data - takes in 2 parameters (connection string, column name)
        $query = "UPDATE users 
                SET firstName = '" . mysqli_real_escape_string($connect, $firstName) . "', 
                    lastName = '" . mysqli_real_escape_string($connect, $lastName) . "', 
                    email = '" . mysqli_real_escape_string($connect, $email) . "',
                    password = '" . md5($password) . "'
                WHERE userId = '$userId'";

        $user = mysqli_query($connect, $query);

        if($user){
            // echo("Success");
            header("Location: ../admin/users.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
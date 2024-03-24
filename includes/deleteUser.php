<?php

    //if delete button was clicked
    if(isset($_GET['delete'])){

        //get id of record to delete
        $id = $_GET['id'];

        // Connection string
        include('connect.php');

        $query = "DELETE FROM users WHERE userId = '$id'";

        $user = mysqli_query($connect, $query);

        if($user){
            // echo("Success");
            header("Location: ../admin/users.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }

?>
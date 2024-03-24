<?php
    include('connect.php');

    if(isset($_POST['addUser'])){
        $query = 'INSERT INTO users (firstName, lastName, email, password) VALUES (
            "'. mysqli_real_escape_string($connect, $_POST['firstName']) .'",
            "'. mysqli_real_escape_string($connect, $_POST['lastName']) .'",
            "'. mysqli_real_escape_string($connect, $_POST['email']) .'",
            "'. md5($_POST['password']) .'"
        )';

        $user = mysqli_query($connect, $query);

        if($user){
            // echo("Success");
            header("Location: ../admin/users.php");
        } else{
            echo "Failed: " . mysqli_error($connect);
        }
    }
?>
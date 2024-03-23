<?php
    include('connect.php');
    include( 'config.php' );

    function secure()
        {
        
        if( !isset( $_SESSION['id'] ) )
        {
            
            header( 'Location: /' );
            die();
            
        }
        
        }

    if(isset($_POST['login'])){
        $query = 'SELECT * 
                  FROM users 
                  WHERE email = "'. $_POST['email'] .'"
                  AND password = "'. md5($_POST['password']) .'"
                  LIMIT 1';
    
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result)){
            $record = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $record['id'];
            header('Location: ../admin/index.php');
            die();
        } else{
            header('Location: ../index.php');
            die();
        }
    }

?>
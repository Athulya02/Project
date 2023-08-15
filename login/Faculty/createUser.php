<?php

    include '../../database.php';

    if(isset($_POST['submit'])){
        if(!empty($_POST['username'])){
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        }
        if(!empty($_POST['pswrd'])){
            $password = filter_input(INPUT_POST, 'pswrd', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $password = md5($password);
        }

        $sql = "INSERT INTO FacultyTable(`user_id`,`password`) VALUES ('$username', '$password')";

        if(mysqli_query($connection, $sql)){

            # successful insert

            header('Location:/RMS/login/Faculty/login.php');
          }else{
            echo "Error:" . mysqli_error($connection);
          }
    }

?>
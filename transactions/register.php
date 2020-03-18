<?php 
    include_once('../utilities/dbconnect.php');
    include_once('../utilities/validation.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $usertype = 'student';

    if(validate($password, $repassword)){
         $sql = "INSERT INTO users (username,password,usertype) VALUES ('$username', '$password', '$usertype')";
         if(mysqli_query($conn, $sql)){
             header("location: ../result.php?user=".$username);
         }else{             
             header("location: ../registration.php?status=false&msg='Failed to register'");
         }
    }else{
        header("location: ../registration.php?status=false&msg='Invalid Registration'");
    }

?>
<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin'){
        header("location: ../main.php");
    }else{
        header("location: ../error.php");
    }

?>
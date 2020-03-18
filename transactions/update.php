<?php
    include_once('../utilities/validation.php');
    include_once('../utilities/dbconnect.php');

    $userid = $_POST['userid'];
    $username = $_POST['username'];
    $oldpassword = $_POST['oldpassword'];
    $newpassword = $_POST['password'];
    $repassword = $_POST['repassword'];
    $usertype = $_POST['usertype'];

    $sql = "SELECT * FROM users WHERE userid = '$userid' AND password = '$oldpassword'";
    $data = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($data) == 1){
        if(validate($newpassword, $repassword)){

            // update
            $sql = "UPDATE users SET username = '$username', password = '$newpassword', usertype = '$usertype' WHERE userid = '$userid'";

            if(mysqli_query($conn, $sql)){
                header('location: ../records.php');
            }else{
                echo "Failed to update";
            }

        }else{
            echo "Password does not match";
        }        
    }else{
        echo "Old password does not match";
    }

?>
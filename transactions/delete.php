<?php
    include_once('../utilities/dbconnect.php');

    if(isset($_GET['userid'])){
        $userid = $_GET['userid'];

        $sql = "DELETE FROM users WHERE userid = '$userid'";
        if(mysqli_query($conn, $sql)){
            header('location: ../records.php');
        }

        echo "Failed to delete record";
        echo "<a href='../records.php'>Go Back</a>";
    }

?>
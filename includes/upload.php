<?php
    
    $size = $_FILES['fileToUpload']['size'];
    $type = $_FILES['fileToUpload']['type'];
    $img = $_FILES['fileToUpload'];




    function checkFileType($file){
        $allowed = array(
            'jpeg',
            'jpg',
            'png'
            

        );
        $fileExtension = explode("/", $file);
        return in_array(end($fileExtension), $allowed) ? true : false;
    }

    function checkSize($file){
        return ($file <= 1000000) ? true : false;
    }

    function alreadyExists($file){
        return (!file_exists($file)) ? true : false;
    }

    function goToDirectory($file, $target){
        return move_uploaded_file($file, $target);
    }

   
    

    
?>
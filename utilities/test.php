<?php
include_once("../includes/upload.php");
$file= $_FILES['fileToUpload'];

$myFileName= $file['name'];
$myFileType= $file['type'];
$myFileTmpname= $file['tmp_name'];
$myFileSize= $file['size'];
$dir = "../uploads/";

foreach($myFileName as $index => $name){
    if(checkFileType($myFileType[$index])){
       if(checkSize($myFileSize[$index])){
           $targetDir = $dir .basename($myFileName[$index]);
           
            if(alreadyExists($targetDir)){
                if(goToDirectory($myFileTmpname[$index],$targetDir)){
                    echo "Successfully Upload \n",$myFileName[$index],"<br>";
            //         echo '
            // <div class="col-md-3">
            //     <img src="'.$myFileTmpname . '/' . $index.'" alt="..." style="width:auto; height:auto;">
            // </div>';
            echo '
            <div class="col-md-3">
                <img src="'.$dir.'/'.$file['name'][$index].'" alt="..." style="width:auto; height:auto;">
            </div>';
                    
                }
                }else{
                    echo "Failed to upload \n";
            }

        }else{
            echo "Memory too big\n";
        }
        }else{
            echo "Invalid File Directory\n";
    }
}




// $myFolder = "../uploads";
// $output = scandir('../uploads');
// foreach ($output as $output) {
//     if ($output === '.' or $output === '..') continue;

//     if (is_file($myFolder . '/' . $output)) {
//         echo '
//             <div class="col-md-3">
//                 <img src="'.$myFolder . '/' . $output.'" alt="..." style="width:auto; height:auto;">
//             </div>';
//     }
// }

    
?>



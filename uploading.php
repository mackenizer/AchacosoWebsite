<?php 
    include("includes/header.php");
    
?>
<div class="container">
        <div class="card p-2 mt-2">
            <form action="utilities/test.php" method="post" enctype="multipart/form-data">
                Select image to upload:
                <div class="card p-2">
                    <input type="file" name="fileToUpload[]" multiple required>
                </div>              
                <button class="btn btn-dark mt-2" type="submit">
                    <i class="fas fa-upload text-center "></i></span> Upload
                </button>
            </form>
        </div>  
    </div>

<?php 
    include("includes/header.php");
?>
    <div class="jumbotron text-center text-success">
    <span class="fas fa-ok"></span>
<?php
    echo "Congratulations! ".$_GET['user'].' you have successfully registered!';
    echo "<a href='records.php'>Check Records</a>";
    
?>
</div>
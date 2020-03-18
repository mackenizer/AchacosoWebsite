<?php 
    include("header.php");
?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 card">
            <div class="card-header bg-secondary text-white bg-sample">
                <h5 class="bg-secondary text-center">Registration Form</h5>
            </div>
            <div class="card-body">
                <?php
                    if(isset($_GET['status']) && $_GET['status'] == false){
                ?>
                        <span class="text-center text-danger"><?= $_GET['msg']; ?></span>
                <?php
                    }
                ?>
                <form method="post" action="../transactions/register.php">
                    <div class="col-md-12 mb-2">
                        <small id="msg"></small>
                        <input type="text" onkeyup="validate(this);" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password"  name="repassword" class="form-control" placeholder="Retype Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-secondary mb-1 form-control">
                            Register
                        </button>
                        <a href="index.php" class="btn btn-secondary form-control">
                            Go Back
                        </a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                Copyright &copy; 2020
            </div>

        </div>
    </div>
</div>
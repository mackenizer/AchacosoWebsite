<?php 
    include("header.php");
?>
<div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 card">
            <div class="card-header bg-secondary text-white bg-sample">
                <h5 class="bg-secondary text-center">Student Information System</h5>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/login.php" >
                    <div class="col-md-12 mb-2">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="checkbox" name="remember"> Remember me?
                    </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-secondary mb-1 form-control">
                                Login
                            </button>
                            <a href="registration.php" class="btn btn-secondary form-control">
                                Sign up
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
</div>
<?php 
    include("includes/header.php");
?>
    <style>
        body {
            background-image: url(images/he.jpg);
            background-size: cover;
            background-position: center center;
            position: relative;
            opacity: .890;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 card">
            <div class="card-header bg-secondary text-white bg-sample">
                <h5 class="bg-secondary text-center">Registration Form</h5>
            </div>
            <div class="card-body">
                <form method="post" action="register.php" >
                    <div class="col-md-12 mb-2">
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="middlename" class="form-control" placeholder="Middlename" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="col-md-12 mb-2">
                    Date of Birth:
                        <input type="date" name="date" class="form-control" placeholder="Date" required>
                    </div>
                    <div class="col-md-12 mb-2">
                    Place of birth:
                        <input type="text" name="place" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="col-md-12 mb-2 custom-control custom-radio">
                        <input type="radio" name="gender"  aria-label="Radio button for following text input" checked>  Male</label>
                    </div>
                    <div class="col-md-12 mb-2 custom-control custom-radio">
                        <label><input type="radio" name="gender" aria-label="Radio button for following text input">  Female</label>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="guardian" class="form-control" placeholder="Guardian" required>
                    </div>
                    <div class="col-md-12 mb-2">
                    Contact Number:
                        <input type="text" name="contact" class="form-control" placeholder="Contact Number" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="status" class="form-control" placeholder="Civil Status" required>
                    </div>
                    <div class="col-md-12 mb-2">
                    <select class="custom-select" id="inputGroupSelect01" name="yearlvl">
                    <option selected>Year Level</option>
                        <option value="1">1st Year</option>
                        <option value="2">2nd Year</option>
                        <option value="3">3rd Year</option>
                        <option value="4">4th Year</option>
                        <option value="5">5th Year</option>

                    </select>
                    </div>


                    <div class="col-md-12 mb-2">
                    <select class="custom-select" id="inputGroupSelect02" name="course">
                        <option selected>Course</option>
                        <option value="1">B.S. Information Technology</option>
                        <option value="2">B.S. Computer Engineering</option>
                        <option value="3">B.S. TCM</option>
                        <option value="4">B.S. Civil Engineering</option>
                        <option value="5">B.S. Mechanical Engineering</option>
                        <option value="6">B.S. Electrical Engineering</option>
                        <option value="7">B.S. Architecture</option>
                        <option value="8">B.S. Electronics Engineering</option>
                        <option value="9">B.S. Chemistry</option>
                        <option value="10">B.S. Food Science and Technology</option>
                        <option value="11">B.S. Electrical and Technology Management</option>
                        <option value="12">B.S. Applied Mathematics</option>
                        <option value="13">B.S. Applied Physical Sciences</option>

                    </select>
                    </div>
                    <div class="col-md-12 mb-2">
                    School Year:
                        <input type="text" name="schoolyear" class="form-control" placeholder="YYYY-YYYY" required>
                    </div>
                    <div class="col-md-12 mb-2">
                    Email:
                        <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                    </div>
                    <div class="col-md-12">
                        <a href="register.php"><button type="submit" class="btn btn-secondary mb-1 form-control">
                            Submit
                        </button>
                        </a>
                    </div>
                    <div class="card-footer text-center" class="text-dark">
                             Copyright &copy; 2020
                    </div>
        </div>
    
    </div>
    
</body>
</html>
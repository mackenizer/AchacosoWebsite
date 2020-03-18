<?php 
    include("includes/header.php");
    include_once('utilities/dbconnect.php');
?>
<style>
        body {
            background-image: url(images/ha.jpg);
            background-size: cover;
            background-position: center center;
            position: relative;
            
            
        }
    </style>
<div class="container-fluid">
    <div class="card">
        <form action="<?= $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <input type="text" name="searchkey" placeholder="Enter Keyword">
                <button class="btn btn-secondary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Usertype</th>
                <th>Status</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM users";
            
            if(isset($_GET['searchkey'])){
                $searchkey = $_GET['searchkey'];
                $sql = "SELECT * FROM users WHERE username LIKE '%$searchkey%'";
            }
        

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
?>
            <tr>
                
                <td><?= $row['userid']; ?></td>
                <td><?= $row['username']; ?></td>
                <td><?= $row['password']; ?></td>
                <td><?= $row['usertype']; ?></td>
                <td><?= ($row['status']) ? 'Active' : 'Inactive'; ?></td>
                <td>
                <a href="update.php?userid=<?= $row['userid']; ?>">
                        <span class="fas fa-edit text-warning"></span>
                        Update
                    <a href="transactions/delete.php?userid=<?= $row['userid']; ?>">
                        <span class="fas fa-trash text-danger"></span>
                        Delete
                    </a>
                </td>
            </tr>
            <?php 
            }
?>

        </tbody>
    </table>
</div>

<?php
    }
    include("includes/footer.php");
?>
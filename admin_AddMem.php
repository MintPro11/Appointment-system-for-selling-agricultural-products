<?php

    session_start();

    require_once"connectDB.php";

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];


        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if($user['username'] === $username) {
            echo "<script> alert('Username already exits');</script>";

        } else {
            $passwordenc =md5($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel)
            		VALUE ('$username', '$passwordenc', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);
			
            if($result){
                $_SESSION['success'] = "Insert user successfully";
                header("Location: admin_Page.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: admin_AddMem.php");
            }

        }

        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Member</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <script src="js/bootstrap.min.js"></script>
    <?php include('./Logo.php'); ?>
    <div class= "first">
        <h1 class= "a" text-align="center">Add Member</h1>
    </div>
<div class="container-sm p-5">

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="mb-3 mt-3">
            <label for="username" class=form-label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter username" required>
        </div>
        <div class="mb-3">
            <label for="password" class=form-label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>
        <div class="mb-3">
            <label for="firstname" class=form-label>Firstname</label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter firstname" required>
        </div>
        <div class="mb-3">
            <label for="lastname" class=form-label>Lastname</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter lastname" required>
        </div>
            <button type="submit" name="submit" class="btn btn-success">Add</button>

    </form> <br>
        <button type="button" class="btn btn-secondary"><a href="./admin_Page.php" style="text-decoration:none;"> <font color="white">Return</font></a></button>
</div>


<br>
<?php
include 'footer.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <script src="js/bootstrap.min.js"></script>
            <img src="./buu.png" HSPACE="12" width="4%" height="4%" alt="">
            <img src="./it.png" HSPACE="10" width="7%" height="7%"  alt="">
            <br>
        <div class= "first">
            <h1 class= "a" text-align="center">Edit User</h1>
        </div>
    <?php
        $id = $_GET['id'];
        //echo " $id";
        include('./connectDB.php');
        $query = "SELECT * FROM user WHERE id=$id";

        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_array($result);
       // print_r($row);

        
    ?>


<div class="container-sm p-5">

    <form action="./admin_edituser_db.php" method="post">
        <div class="mb-3 mt-3">
            <input type="hidden" name="id" class="form-control" required value="<?php echo $row['id']; ?>" readonly >
        </div>
        <div class="mb-3">
            <label for="username" class=form-label>Username</label>
            <input type="text" name="username" class="form-control" required value="<?php echo $row['username']; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class=form-label>Password</label>
            <input type="password" name="password" class="form-control" required value="<?php echo $row['password']; ?>">
        </div>
        <div class="mb-3">
            <label for="firstname" class=form-label>Firstname</label>
            <input type="text" name="firstname" class="form-control" required value="<?php echo $row['firstname']; ?>">
        </div>
        <div class="mb-3">
            <label for="lastname" class=form-label>Lastname</label>
            <input type="text" name="lastname" class="form-control" required value="<?php echo $row['lastname']; ?>">
        </div>
        <div class="mb-3">
            <label for="userlevel" class=form-label>Userlevel</label>
            <input type="text" name="userlevel" class="form-control" required value="<?php echo $row['userlevel']; ?>">
        </div>
            <button type="submit" name="submit" class="btn btn-success">SAVE</button>

    </form> <br>
    <button type="button" class="btn btn-secondary"><a href="./admin_ShowUser.php" style="text-decoration:none;"> <font color="white">Return</font></a></button>
</div>


<br>
<?php
include 'footer.php'
?>
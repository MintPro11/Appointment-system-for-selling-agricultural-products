<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Show User</title>
</head>
<style>
    table {
       color: rgb(255, 195, 77);
        width: 100%;
        
        
    }
   th ,td{
        border:3px solid black;

    } 
</style>
<body>
    <script src="js/bootstrap.min.js"></script>
    <?php include('./Logo.php'); ?>

    <div class= "first">
        <h1 class= "a" text-align="center">Show User</h1>
    </div>

    <div class="container-sm">
    <button type="button" class="btn btn-secondary"><a href="./admin_Page.php" style="text-decoration:none;"> <font color="white">Return</font></a></button>
    <table class="table-light" >
        <thead>
                <tr>
                    <th text-align="center">ID</th>
                    <th text-align="center">Username</th>
                    <th text-align="center">Password(MD5)</th>
                    <th text-align="center">Firstname</th>
                    <th text-align="center">Lastname</th>
                    <th text-align="center">Level User</th>
                    <th text-align="center">Manage User</th>
                </tr>
        </thead>

    <tbody>
    <?php
        include("./connectDB.php");

        $query = "SELECT * FROM user";

        $result = mysqli_query($conn, $query);
        
        foreach ($result as $row) { ?>
            <tr>
                <td> <?php echo $row['id']; ?></td>
                <td> <?php echo $row['username']; ?></td>
                <td> <?php echo $row['password']; ?></td>
                <td> <?php echo $row['firstname']; ?></td>
                <td> <?php echo $row['lastname']; ?></td>
                <td> <?php echo $row['userlevel']; ?></td>
                <td> <a href="admin_edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="admin_deleteuser.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>            
        <?php } ?>
    </tbody>
</table>
</div>
<?php mysqli_close($conn); 
include("./footer.php")
?>


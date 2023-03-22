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
        <h1 class= "a" text-align="center">Form List</h1>
    </div>

    <div class="container-sm">
    <button type="button" class="btn btn-secondary"><a href="./admin_Page.php" style="text-decoration:none;"> <font color="white">Return</font></a></button>
    <table class="table-light" >
        <thead>
                <tr>
                    <th text-align="center">ID</th>
                    <th text-align="center">Date</th>
                    <th text-align="center">Time</th>
                    <th text-align="center">Name</th>
                    <th text-align="center">Product</th>
                    <th text-align="center">Status</th>

                </tr>
        </thead>

    <tbody>
    <?php
        include("./connectDB.php");

        $query = "SELECT * FROM form_user";

        $result = mysqli_query($conn, $query);
        
        foreach ($result as $row) { ?>
            <tr>
                <td> <?php echo $row['id_form']; ?></td>
                <td> <?php echo $row['date1']; ?></td>
                <td> <?php echo $row['time1']; ?></td>
                <td> <?php echo $row['name1']; ?></td>
                <td> <?php echo $row['unit']; ?></td>
                <td> <?php echo $row['status']; ?></td>
                <td> <a href="admin_editFm.php?id=<?php echo $row['id_form']; ?>">Edit</a>
                <a href="./admin_deleteFm.php?id=<?php echo $row['id_form']; ?>">Delete</a></td>
            </tr>            
        <?php } ?>
    </tbody>
</table>
</div>
<?php mysqli_close($conn); 
include("./footer.php")
?>
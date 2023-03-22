<?php

    session_start();

    if(!$_SESSION['userid']){
        header("Location: loginSiteAdmin.php");
    } else {

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<?php
    include("./navbarAdmins.php");
?>
<body>
    <script src="js/bootstrap.min.js"></script>
<?php include('./Logo.php'); ?>

    <div class="container">
        <h1>You are Admin</h1>
        <h3>Hi, <?php echo $_SESSION['user']; ?></h3>

    </div>
    
<?php
    include("./footer.php");
?>
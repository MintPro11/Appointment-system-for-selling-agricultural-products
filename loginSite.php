<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="js/bootstrap.min.js"></script>
        <img src="./buu.png" HSPACE="12" width="4%" height="4%" alt="">
        <img src="./it.png" HSPACE="10" width="7%" height="7%"  alt="">
    <br>
    <div class="first">
        <h1 class="a" text-align="center" >Login Page</h1>
    </div>
    <div class="container-sm p-5">
    <form action="./login.php" method="post">
    <div class="mb-3 mt-3">
        <label for="username" class="form-label">Username:</label>
        <input type="text" class=form-control name="username"  placeholder="Enter username" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class=form-control name="password" placeholder="Enter password" required>
    </div>
    <button type="submit" name="submit" class="btn btn-success">Login</button>
    </form><br>
        <button type="button" class="btn btn-secondary"><a href="./loginSiteAdmin.php" style="text-decoration:none;"> <font color="white">Login to admin</font></a></button>
        <p style= "display: inline">If not yet registered</p>
        <button type="button" class="btn btn-secondary"><a href="./register.php" style="text-decoration:none;"> <font color="white">Register</font></a></button>
        
<?php
    include('./footer.php');
?>
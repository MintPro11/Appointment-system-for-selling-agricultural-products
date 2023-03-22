<?php
/*
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';

    echo '<hr>';

    echo '<pre>';
    var_dump($_POST);
    echo '<pre>';

    exit;
*/

    session_start();

    include("connectDB.php");

        if(isset($_POST['id'])){

            $id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $userlevel = $_POST['userlevel'];

            $passwordenc =md5($password);

                $query = "UPDATE user SET
                    id = '$id',
                    username = '$username',
                    password = '$passwordenc',
                    firstname =   '$firstname',
                    lastname =  '$lastname',
                    userlevel = '$userlevel'
                WHERE id = $id
                ";

                $result = mysqli_query($conn, $query);

                mysqli_close($conn);

                if($result)
                {
                    $_SESSION['success'] = "Update user successfully";
                    header("Location: admin_ShowUser.php");
                } else {
                    $_SESSION['error'] = "Something went wrong";
                    header("Location: admin_edituser.php");
                }

            }
            

?>
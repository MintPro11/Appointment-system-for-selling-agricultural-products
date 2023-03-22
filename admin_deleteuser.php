<?php
/*
    echo '<pre>';
    print_r($_GET);
    echo '<pre>';

    echo '<hr>';

    echo '<pre>';
    var_dump($_GET);
    echo '<pre>';

    exit;
*/
    include("connectDB.php");
    
    $id = $_GET['id'];

        if(isset($_GET['id'])){

                $query = "DELETE FROM user WHERE id = $id";

                $result = mysqli_query($conn, $query);

                mysqli_close($conn);

                if($result)
                {
                    header("Location: admin_ShowUser.php");
                } else {
                    echo "<script> alert'Something went wrong !!!'</script>";
                    header("Location: admin_edituser.php");
                }

            }
?>
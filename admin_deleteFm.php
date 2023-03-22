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

                $query = "DELETE FROM form_user WHERE id_form = $id";

                $result = mysqli_query($conn, $query);

                mysqli_close($conn);

                if($result)
                {
                    header("Location: admin_checkedFm.php");
                } else {
                    echo "<script> alert'Something went wrong !!!'</script>";
                    header("Location: admin_Page.php");
                }

            }
?>
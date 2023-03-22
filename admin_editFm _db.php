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
    session_start();
    include("./connectDB.php");

    if (isset($_GET['submit'])) {

        $id = $_GET['id_form'];
        $date1 = $_GET['date1'];
        $time1 = $_GET['time1'];
        $name1 = $_GET['name1'];
        $phone = $_GET['phone'];
        $unit = $_GET['unit'];
        $status = $_GET['status'];

        $query = "UPDATE form_user SET 
        id_form = '$id',
        date1 = '$date1',
        time1 = '$time1',
        name1 = '$name1',
        phone = '$phone',
        unit = '$unit',
        status = '$status'
        WHERE id_form = $id;
        ";

        $result = mysqli_query($conn, $query);

        mysqli_close($conn);

        if($result){
            $_SESSION['success'] = "Insert form successfully";
            header("Location: admin_checkedFm.php");
        } else {
            $_SESSION['error'] = "Something went wrong";
            header("Location: admin_editFm.php");
        }

    }
?>

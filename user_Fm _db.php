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

    include('connectDB.php');

    if (isset($_GET['submit'])) {

        $date1 = $_GET['date1'];
        $time1 = $_GET['time1'];
        $name1 = $_SESSION['user'];
        $phone = $_GET['phone'];
        $unit = $_GET['unit'];

        $query = "INSERT INTO form_user  (date1, time1, name1, phone, unit, status)
            VALUE ('$date1', '$time1', '$name1', '$phone', '$unit', 'waiting') ";

        $result = mysqli_query($conn, $query);

        if($result){
            $_SESSION['success'] = "Insert form successfully";
            header("Location: user_showFm.php");
        } else {
            $_SESSION['error'] = "Something went wrong";
            header("Location: user_Fm.php");
        }

    }
    mysqli_close($conn);

?>
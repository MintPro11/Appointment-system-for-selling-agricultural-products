
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <script src="js/bootstrap.min.js"></script>
            <img src="./buu.png" HSPACE="12" width="4%" height="4%" alt="">
            <img src="./it.png" HSPACE="10" width="7%" height="7%"  alt="">
            <br>
        <div class= "first">
            <h1 class= "a" text-align="center">Detail Form</h1>
        </div>
    <?php
        $id = $_GET['id'];
        //echo " $id";
        include('./connectDB.php');
        $query = "SELECT * FROM form_user WHERE id_form=$id";

        $result = mysqli_query($conn, $query);

        $row = mysqli_fetch_array($result);
        //print_r($row);

        
    ?>

            <div class="container-sm">
                <form action="./admin_editFm _db.php" method="$_GET">

                    <input type="hidden" name="id_form" value="<?php echo $row['id_form']; ?>">
                        <div class="row">
                            <div class="col">
                                <label for="date1" class="form-label" >วันที่ต้องการนัด</label>
                                <input type="date" class="form-control" name="date1" required value="<?php echo $row['date1']; ?>">
                            </div>

                            <div class="col">
                                <label for="time1">เวลาที่ต้องการนัด</label>
                                <input type="time" class="form-control" name="time1" required value="<?php echo $row['time1']; ?>">
                            </div> 
                            </div>
                            <div class="row">
                            <div class="col">
                                <label for="name" class="form-label" >ชื่อผู้นัดขาย</label>
                                <input type="text" class="form-control" name="name1" placeholder="ชื่อ-นามสกุล" required value="<?php echo $row['name1']; ?>">
                            </div>
                            <div class="col">
                                <label for="phone" class="form-label" >เบอร์ผู้ติดต่อขาย</label>
                                <input type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์" required value="<?php echo $row['phone']; ?>">
                            </div>
                            <div class="col">
                                <label for="unit" class="form-label" >ชื่อผลผลิตที่ต้องการขาย</label>
                                <input type="text" class="form-control" name="unit" placeholder="ตัวอย่าง(มันสำปะหลัง, อ้อย)" required value="<?php echo $row['unit']; ?>">
                            </div> 
                        </div>&nbsp;

                            
                                <h5>อนุมัติแบบฟอร์ม</h5>
                               <input type="radio" required name="status" checked value="Allow"><h6>อนุมัต</h6>
                                <input type="radio" required name="status" value="DisAllow"><h6>ไม่อนุมัติ</h6>
                            <br>

                    <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                    <button type="button" class="btn btn-secondary"><a href="./admin_checkedFm.php" style="text-decoration:none;"> <font color="white">Return</font></a></button>
                  </form>
           
                </div>

<br>
<?php
include 'footer.php'
?>
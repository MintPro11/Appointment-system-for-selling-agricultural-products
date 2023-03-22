<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="js/bootstrap.min.js"></script>
        <img src="./buu.png" HSPACE="12" width="4%" height="4%" alt="">
        <img src="./it.png" HSPACE="10" width="7%" height="7%"  alt="">
            <br>
            <div class= "first">
                <h1 class= "a" text-align="center">Appointment form</h1>
            </div><br>

            <div class="container-sm">
                <form action="./user_Fm _db.php" method="$_GET">
                    <div class="row">

                        <div class="col">
                            <label for="date1" class="form-label" >วันที่ต้องการนัด</label>
                            <input type="date" class="form-control" name="date1" required>
                        </div>

                        <div class="col">
                            <label for="time1">เวลาที่ต้องการนัด</label>
                            <input type="time" class="form-control" name="time1" required>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name" class="form-label" >ชื่อผู้นัดขาย</label>
                            <input type="text" class="form-control" name="name1" readonly value="<?php echo $_SESSION['user']; ?>">
                        </div>
                        <div class="col">
                            <label for="phone" class="form-label" >เบอร์ผู้ติดต่อขาย</label>
                            <input type="text" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์" required>
                        </div>
                        <div class="col">
                            <label for="unit" class="form-label" >ชื่อผลผลิตที่ต้องการขาย</label>
                            <input type="text" class="form-control" name="unit" placeholder="ตัวอย่าง(มันสำปะหลัง, อ้อย)" required>
                        </div>
                    </div><br>
                    <button type="submit" name="submit" class="btn btn-success">SAVE</button>
                    <button type="button" class="btn btn-secondary"><a href="./user_Page.php" style="text-decoration:none;"> <font color="white">Return</font></a></button>
                </form>
            </div>   
<?php 
include("./footer.php")
?>
<?php
session_start();
include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biển Ngọc - Admin</title>
    <!-- fontowesome -->
    <link rel="stylesheet" href="../css/fontawesome.pro.6.0.0.css">
    <!-- boot -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../javascript/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/room.css">
    <style>
        .roombox{
            background-color: #d1d7ff;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="addroomsection">
        <form action="" method="POST">
            <label for="troom">Tên :</label>
            <input type="text" name="staffname" class="form-control">

            <label for="bed">Công việc :</label>
            <select name="staffwork" class="form-control">
                <option value selected></option>
                <option value="Quản lý">Quản lý</option>
                <option value="Đầu bếp">Đầu bếp</option>
                <option value="Tiếp tân">Tiếp tân</option>
                <option value="Dọn dẹp">Dọn dẹp</option>
                <option value="Bồi bàn">Bồi bàn</option>
            </select>

            <button type="submit" class="btn btn-success" name="addstaff">Thêm</button>
        </form>

        <?php
        if (isset($_POST['addstaff'])) {
            $staffname = $_POST['staffname'];
            $staffwork = $_POST['staffwork'];

            $sql = "INSERT INTO staff(name,work) VALUES ('$staffname', '$staffwork')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                header("Location: staff.php");
            }
        }
        ?>
    </div>


    <!-- here room add because room.php and staff.php both css is similar -->
    <div class="room">
    <?php
        $sql = "select * from staff";
        $re = mysqli_query($conn, $sql)
        ?>
        <?php
        while ($row = mysqli_fetch_array($re)) {
                echo "<div class='roombox'>
						<div class='text-center no-boder'>
                            <i class='fa fa-users fa-5x'></i>
							<h3>" . $row['name'] . "</h3>
                            <div class='mb-1'>" . $row['work'] . "</div>
                            <a href='staffdelete.php?id=". $row['id'] ."'><button class='btn btn-danger'>Xóa</button></a>
						</div>
                    </div>";
        }
        ?>
    </div>

</body>

</html>
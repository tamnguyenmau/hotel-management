<?php

include 'config.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/emp-login.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- aos animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- loading bar -->
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <link rel="stylesheet" href="./css/flash.css">
    <title>Biển Ngọc</title>
</head>

<body>
    <!--  carousel -->
    <section id="carouselExampleControls" class="carousel slide carousel_section" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="carousel-image" src="./image/login-slide/slide1.jpg">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./image/login-slide/slide2.jpg">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./image/login-slide/slide3.jpg">
            </div>
            <div class="carousel-item">
                <img class="carousel-image" src="./image/login-slide/slide4.jpg">
            </div>
        </div>
    </section>

    <!-- main section -->
    <section id="auth_section">

        <div class="logo">
            <img class="bluebirdlogo" src="./image/logo.png" alt="logo">
            <p><b>&nbsp Biển Ngọc</b></p>
        </div>

        <div class="auth_container">
            <!--============ login =============-->

            <div id="Log_in">
                <h2><b>Đăng nhập</b></h2>
                <div class="role_btn">
                    <div class="btns active">Khách hàng</div>
                    <div class="btns">Quản trị</div>
                </div>

                <!-- // ==userlogin== -->
                <?php 
                if (isset($_POST['user_login_submit'])) {
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];

                    $sql = "SELECT * FROM signup WHERE Email = '$Email' AND Password = BINARY'$Password'";
                    $result = mysqli_query($conn, $sql);

                    if ($result->num_rows > 0) {
                        $_SESSION['usermail']=$Email;
                        $Email = "";
                        $Password = "";
                        header("Location: home.php");
                    } else {
                        echo "<script>swal({
                            title: 'Xin hãy kiểm tra lại thông tin',
                            icon: 'error',
                        });
                        </script>";
                    }
                }
                ?>
                <form class="user_login authsection active" id="userlogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Tên đăng nhập</label>
                    </div>
                    <div class="form-floating">
                        <input typuser_logine="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Mật khẩu</label>
                    </div>
                    <button type="submit" name="user_login_submit" class="auth_btn">Đăng nhập</button>

                    <div class="footer_line">
                        <h6>Bạn đã có tài khoản chưa? <span class="page_move_btn" onclick="signuppage()">Click để đăng ký</span></h6>
                    </div>
                </form>
                
                <!-- == Emp Login == -->
                <?php              
                    if (isset($_POST['Emp_login_submit'])) {
                        $Email = $_POST['Emp_Email'];
                        $Password = $_POST['Emp_Password'];

                        $sql = "SELECT * FROM emp_login WHERE Emp_Email = '$Email' AND Emp_Password = BINARY'$Password'";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) {
                            $_SESSION['usermail']=$Email;
                            $Email = "";
                            $Password = "";
                            header("Location: admin/admin.php");
                        } else {
                            echo "<script>swal({
                                title: 'Xin hãy kiểm tra lại thông tin',
                                icon: 'error',
                            });
                            </script>";
                        }
                    }
                ?> 
                <form class="employee_login authsection" id="employeelogin" action="" method="POST">
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Emp_Email" placeholder=" ">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Emp_Password" placeholder=" ">
                        <label for="floatingPassword">Mật khẩu</label>
                    </div>
                    <button type="submit" name="Emp_login_submit" class="auth_btn">Đăng nhập</button>
                </form>
                
            </div>

            <!--============ signup =============-->
            <?php       
                if (isset($_POST['user_signup_submit'])) {
                    $Username = $_POST['Username'];
                    $Email = $_POST['Email'];
                    $Password = $_POST['Password'];
                    $CPassword = $_POST['CPassword'];

                    if($Username == "" || $Email == "" || $Password == ""){
                        echo "<script>swal({
                            title: 'Xin hãy điền đầy đủ thông tin',
                            icon: 'error',
                        });
                        </script>";
                    }
                    else{
                        if ($Password == $CPassword) {
                            $sql = "SELECT * FROM signup WHERE Email = '$Email'";
                            $result = mysqli_query($conn, $sql);
    
                            if ($result->num_rows > 0) {
                                echo "<script>swal({
                                    title: 'Email đã tồn tại',
                                    icon: 'error',
                                });
                                </script>";
                            } else {
                                $sql = "INSERT INTO signup (Username,Email,Password) VALUES ('$Username', '$Email', '$Password')";
                                $result = mysqli_query($conn, $sql);
    
                                if ($result) {
                                    $_SESSION['usermail']=$Email;
                                    $Username = "";
                                    $Email = "";
                                    $Password = "";
                                    $CPassword = "";
                                    header("Location: home.php");
                                } else {
                                    echo "<script>swal({
                                        title: 'Xin hãy kiểm tra lại thông tin',
                                        icon: 'error',
                                    });
                                    </script>";
                                }
                            }
                        } else {
                            echo "<script>swal({
                                title: 'Mật khẩu không khớp',
                                icon: 'error',
                            });
                            </script>";
                        }
                    }
                    
                }
            ?>
            <div id="sign_up">
                <h2><b>Đăng ký</b></h2>
                <form class="user_signup" id="usersignup" action="" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="Username" placeholder=" ">
                        <label for="Username">Tên đăng nhập</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" name="Email" placeholder=" ">
                        <label for="Email">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="Password" placeholder=" ">
                        <label for="Password">Mật khẩu</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="CPassword" placeholder=" ">
                        <label for="CPassword">Nhập lại mật khẩu</label>
                    </div>

                    <button type="submit" name="user_signup_submit" class="auth_btn">Đăng ký</button>

                    <div class="footer_line">
                        <h6>Nếu bạn đã có tài khoản? <span class="page_move_btn" onclick="loginpage()">Click để đăng nhập</span></h6>
                    </div>
                </form>
            </div>
    </section>
</body>


<script src="./javascript/main.js"></script>
<script src="./javascript/bootstrap.bundle.min.js"></script>
<!-- aos animation-->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>


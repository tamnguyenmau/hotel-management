<?php

include 'config.php';
session_start();

// page redirect
$usermail = "";
$usermail = $_SESSION['usermail'];
if ($usermail == true) {
} else {
  header("location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/home-page.css">
  <link rel="shortcut icon" href="./image/logo.png" type="image/x-icon">
  <title>Biển Ngọc</title>
  <!-- boot -->
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./javascript/bootstrap.bundle.min.js"></script>
  <script src="./javascript/main.js"></script>
  <!-- fontowesome -->
  <link rel="stylesheet" href="./css/fontawesome.pro.6.0.0.css">
  <!-- sweet alert -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="./admin/css/roombook-page.css">
  <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>

  <style>
    #guestdetailpanel {
      display: none;
    }

    #guestdetailpanel .middle {
      height: 450px;
    }
  </style>
</head>

<body>
  <div id="myNavbar" >
    <div class="logo">
      <img class="iconlogo" src="./image/logo.png" alt="logo">
      <p>Biển Ngọc</p>
    </div>
    <!-- <div class="search">
      <div class="search-inputs">
        <span class="fad fa-search search-icon"></span>
        <input type="text" placeholder="Search" class="search-input">
      </div>
      <div class="search-submit">
        <button class="search-submit-btn">
          <span class="fas fa-search  search-submit-icon"></span>
        </button>
      </div>
    </div> -->
    <ul>
      <li><a href="#firstsection">Trang chủ</a></li>
      <li><a href="#secondsection">Phòng</a></li>
      <li><a href="#thirdsection">Dịch vụ</a></li>
      <li><a href="#contactus">Liên hệ</a></li>
      <a href="./logout.php"><button class="btn btn-danger">Đăng xuất</button></a>
    </ul>
  </div>

  <section id="firstsection" class="carousel slide carousel_section" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="carousel-image" src="./image/home-slide/slide1.jpg">
      </div>
      <div class="carousel-item">
        <img class="carousel-image" src="./image/home-slide/slide2.jpg">
      </div>
      <div class="carousel-item">
        <img class="carousel-image" src="./image/home-slide/slide3.jpg">
      </div>
      <div class="carousel-item">
        <img class="carousel-image" src="./image/home-slide/slide4.jpg">
      </div>

      <div class="welcomeline">
        <h1 class="welcometag">Nơi nghỉ hoàn hảo dành cho bạn</h1>
      </div>

      <!-- bookbox -->
      <div id="guestdetailpanel">
        <form action="" method="POST" class="guestdetailpanelform">
          <div class="head">
            <h3>Đặt chỗ</h3>
            <i class="fa-solid fa-circle-xmark" onclick="closebox()"></i>
          </div>
          <div class="middle">
            <div class="guestinfo">
              <h4>Thông tin Khách hàng</h4>
              <input type="text" name="Name" placeholder="Họ tên khách hàng">
              <input type="email" name="Email" placeholder="Email khách hàng">

              <?php
              $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
              ?>

              <select name="Country" class="selectinput">
                <option value selected>Tên quốc tịch</option>
                <?php
                foreach ($countries as $key => $value) :
                  echo '<option value="' . $value . '">' . $value . '</option>';
                //close your tags!!
                endforeach;
                ?>
              </select>
              <input type="text" name="Phone" placeholder="Số điện thoại khách hàng">
            </div>

            <div class="line"></div>

            <div class="reservationinfo">
              <h4>Thông tin dịch vụ</h4>
              <select name="RoomType" class="selectinput">
                <option value selected>Loại phòng</option>
                <option value="Superior Room">SUPERIOR ROOM</option>
                <option value="Deluxe Room">DELUXE ROOM</option>
                <option value="Guest House">GUEST HOUSE</option>
                <option value="Single Room">SINGLE ROOM</option>
              </select>
              <select name="Bed" class="selectinput">
                <option value selected>Loại giường</option>
                <option value="Single">Đơn</option>
                <option value="Double">Đôi</option>
                <option value="Triple">Ba</option>
                <option value="Quad">Bốn</option>
                <option value="None">Không</option>
              </select>
              <select name="NoofRoom" class="selectinput">
                <option value selected>Hết phòng</option>
                <option value="1">1</option>
                <!-- <option value="1">2</option>
                        <option value="1">3</option> -->
              </select>
              <select name="Meal" class="selectinput">
                <option value selected>Bữa ăn</option>
                <option value="Room only">Chỉ phòng</option>
                <option value="Breakfast">Ăn sáng</option>
                <option value="Half Board">1/2 dịch vụ</option>
                <option value="Full Board">Đầy đủ</option>
              </select>
              <div class="datesection">
                <span>
                  <label for="cin">Ngày vào</label>
                  <input name="cin" type="date">
                </span>
                <span>
                  <label for="cin">Ngày ra</label>
                  <input name="cout" type="date">
                </span>
              </div>
            </div>
          </div>
          <div class="footer">
            <button class="btn btn-success" name="guestdetailsubmit">Gửi</button>
          </div>
        </form>

        <!-- ==== room book php ====-->
        <?php
        if (isset($_POST['guestdetailsubmit'])) {
          $Name = $_POST['Name'];
          $Email = $_POST['Email'];
          $Country = $_POST['Country'];
          $Phone = $_POST['Phone'];
          $RoomType = $_POST['RoomType'];
          $Bed = $_POST['Bed'];
          $NoofRoom = $_POST['NoofRoom'];
          $Meal = $_POST['Meal'];
          $cin = $_POST['cin'];
          $cout = $_POST['cout'];

          if ($Name == "" || $Email == "" || $Country == "") {
            echo "<script>swal({
                        title: 'Vui lòng điền đầy đủ thông tin',
                        icon: 'error',
                    });
                    </script>";
          } else {
            $sta = "NotConfirm";
            $sql = "INSERT INTO roombook(Name,Email,Country,Phone,RoomType,Bed,NoofRoom,Meal,cin,cout,stat,nodays) VALUES ('$Name','$Email','$Country','$Phone','$RoomType','$Bed','$NoofRoom','$Meal','$cin','$cout','$sta',datediff('$cout','$cin'))";
            $result = mysqli_query($conn, $sql);


            if ($result) {
              echo "<script>swal({
                                title: 'Book thành công',
                                icon: 'success',
                            });
                        </script>";
            } else {
              echo "<script>swal({
                                    title: 'Có lỗi, xin mời kiểm tra lại thông tin',
                                    icon: 'error',
                                });
                        </script>";
            }
          }
        }
        ?>
      </div>

    </div>
  </section>

<!-- decs hotel -->
<div class="container">
      <div class="decs-hotel">
      <div class="row">
        <div class="col-lg-5">
          <div class="subtitle">
            Biển Ngọc hotel
          </div>
        <div class="hotel-title">
        Tận hưởng Trải nghiệm Sang trọng
        </div>
        <p>
        Hệ thống tiện ích đầy đủ nằm ngay trong tòa nhà The King Hotel. Quý khách có thể thưởng thức Buffet sáng thơm ngon hay bữa trưa và bữa tối đa dạng với ẩm thực Á – Âu, những món ăn mang hương vị truyền thống ngon miệng. Cũng trong khuôn viên ấy, quý khách có thể thả lỏng với ly Coktail yêu thích tại quầy bar của khách sạn cũng là lựa chọn không tồi
        </p>
        <div class="reservations">
        <i class="fa-thin fa-phone-volume"></i>
        <div class="text">
          <span>Đặt phòng</span>
          <h5>0123456789</h5>
          <h5>0123456789</h5>
        </div>
        </div>
        </div>
        <div class="col-lg-7 image-hotel">
        <div class="image-hotel-light">
          <img src="./image/login-slide/slide1.jpg" alt="">
        </div>
        <div class="image-hotel-night">
          <img src="./image/login-slide/slide2.jpg" alt="">
        </div>
        </div>
      </div>
      </div>
    </div>

  <section id="secondsection">
    <img src="./image/homeanimatebg.svg">
    <div class="ourroom">
      <h1 class="head">≼ Phòng của chúng tôi ≽</h1>
      <div class="roomselect">
        <div class="roombox">
          <div class="hotelphoto h1"></div>
          <div class="roomdata">
            <h2>Superior Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
              <i class="fa-solid fa-person-swimming"></i>
            </div>
            <h3 class="price-room">43.48$/đêm</h3>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h2"></div>
          <div class="roomdata">
            <h2>Deluxe Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
              <i class="fa-solid fa-dumbbell"></i>
            </div>
            <h3 class="price-room">34.80$/đêm</h3>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h3"></div>
          <div class="roomdata">
            <h2>Guest House</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
              <i class="fa-solid fa-spa"></i>
            </div>
            <h3 class="price-room">30.44$/đêm</h3>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
        <div class="roombox">
          <div class="hotelphoto h4"></div>
          <div class="roomdata">
            <h2>Single Room</h2>
            <div class="services">
              <i class="fa-solid fa-wifi"></i>
              <i class="fa-solid fa-burger"></i>
            </div>
            <h3 class="price-room">26.08$/đêm</h3>
            <button class="btn btn-primary bookbtn" onclick="openbookbox()">Book</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="thirdsection">
    <h1 class="head">≼ Các tiện ích của khách sạn ≽</h1>
    <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="service-box">
            <i class="fa-duotone fa-cup-togo"></i>
            <h4>Coffee Garden</h4>
            <p>Điểm nhấn thiên nhiên tuyệt vời giữa không gian hiện đại, đẳng cấp.</p>
            <div class="bg-box">
            <i class="fa-duotone fa-cup-togo"></i>
            </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-box">
              <i class="fa-duotone fa-glass-citrus"></i>
              <h4>Quầy Bar</h4>
              <p>Nằm ngay trong không gian nhà hàng, phục vụ đa dạng từ đồ uống nhẹ đến đồ uống có cồn.</p>
            <div class="bg-box">
            <i class="fa-duotone fa-glass-citrus"></i>
            </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-box">
              <i class="fa-duotone fa-water"></i>
              <h4>Bể Bơi Vô Cực</h4>
              <p>Hệ thống bể bơi bốn mùa với không gian vô cùng khoáng đạt, khách hàng sẽ được ngâm mình.</p>
              <div class="bg-box">
              <i class="fa-duotone fa-water"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-4">
          <div class="service-box">
            <i class="fa-duotone fa-utensils"></i>
            <h4>Nhà hàng</h4>
            <p>Sức chứa lên tới 100 khách, sẵn sàng phục vụ quý khách.</p>
            <div class="bg-box">
            <i class="fa-duotone fa-utensils"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-box">
            <i class="fa-duotone fa-wifi"></i>
            <h4>Internet</h4>
            <p>Wifi trong phòng và khu vực công cộng. Thoải mái sử dụng data không giới hạn.</p>
            <div class="bg-box">
            <i class="fa-duotone fa-wifi"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-box">
            <i class="fa-duotone fa-spa"></i>
            <h4>Spa</h4>
            <p>Giúp quý khách thoải mái nhất có thể.</p></p>
            <div class="bg-box">
            <i class="fa-duotone fa-spa"></i>
            </div>
          </div>
        </div>
        </div>
    </div>
    <div class="facility">
      <div class="box">
        <h2>Hồ bơi</h2>
      </div>
      <div class="box">
        <h2>Gym</h2>
      </div>
      <div class="box">
        <h2>Dịch vụ thuê xe</h2>
      </div>
      <div class="box">
        <h2>Spa</h2>
      </div>
      <div class="box">
        <h2>Nhà hàng</h2>
      </div>
    </div>
  </section>

  <section id="contactus">
    <div class="social">
    <a href="https://www.facebook.com/mautam3005/">
      <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="https://www.facebook.com/mautam3005/">
      <i class="fa-brands fa-facebook"></i>
    </a>
    <a href="https://github.com/tamnguyenmau">
      <i class="fa-solid fa-envelope"></i>
    </a>
    </div>
    <div class="createdby">
      <h5>NMTam</h5>
    </div>
  </section>
</body>

<script>
  
  var bookbox = document.getElementById("guestdetailpanel");

  openbookbox = () => {
    bookbox.style.display = "flex";
  }
  closebox = () => {
    bookbox.style.display = "none";
  }
</script>

</html>
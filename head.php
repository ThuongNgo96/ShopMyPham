<?php
require_once __DIR__ . "./ImportFile/importFile.php";
$qtyProduct = 0;
if (!isset($_SESSION['cart'])) {
    $qtyProduct;
} else {
    $qtyProduct = count($_SESSION['cart']);
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./user/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./user/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="./user/script/slider.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <!-- <div id="anhnen" class=" px-0 container-fluid">
        <img src="ANH/67720657_2516083801775036_1083752649737633792_n.png" height="150px" class=" w-100">
    </div> -->

    <!------------------------         End Logo --------------------------------------------->
    <div class="container-fluid Header ">
        <div class="row">
            <div class="col-2 d-flex justify-content-center">
                <img style="float: left; width:50%" src="./ANH/logo_sakura.jpg">
            </div>
            <div class="col-5 d-flex flex-column justify-content-center">
                <form class="d-flex justify-content-center" method="" action="">
                    <input class="form-control" type="text" placeholder="Tìm kiếm..." name=" NhapTen">
                    <button class="btn btn-success ml-4">Search</button>
                </form>
            </div>
            <div class="col-5 d-flex ">
                <div class=" m-auto d-flex flex-column justify-content-center">
                    <div>
                        <a class="qty text-nowrap btn btn-outline-success" href="./giohang.php">GIỎ HÀNG (<?php echo $qtyProduct ?>)</a>
                        <a href=""><img style=" width: 30px; height: 30px; " src="ANH/giohang.png"></a>
                    </div>
                </div>
                <div class=" m-auto d-flex flex-column justify-content-center">
                    <ul class="d-flex nav">
                        <?php if (isset($_SESSION['username']) && $_SESSION['username']) : ?>
                            <div class="dropdown">
                                <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
                                    <?php echo ' Xin chào ' . $_SESSION['username'] ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#"><i class="fas fa-user"></i>Trang cá nhân</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-key"></i>Đổi mật khẩu</a>
                                    <a class="dropdown-item" href="./database/xulydangxuat.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>
                            </div>

                        <?php else : ?>
                            <li><a class="text-nowrap btn btn-outline-success" href="./dangnhap.php">ĐĂNG NHẬP</a></li>
                            <li><a class="text-nowrap btn btn-outline-success" href="./dangky.html">ĐĂNG KÝ</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------- End Header ------------------------------------>


    <div class=" container-fluid px-5 bg-success rounder-21px  mt-2">
        <div class=" row ">
            <div class="col-12 d-flex flex-column justify-content-center border-success rounded">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav w-100">
                            <li class="nav-item m-auto">
                                <a class="nav-link" href="./index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown m-auto">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    THƯƠNG HIỆU
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Làm đẹp và sức khỏe</a>
                                    <a class="dropdown-item" href="#">Bé- Đồ chơi</a>
                                   
                                </div>
                            </li>
                            <li class="nav-item m-auto">
                                <a class="nav-link" href="#">KHUYẾN MÃI</a>
                            </li>
                            <li class="nav-item m-auto">
                                <a class="nav-link" href="#">BÁN CHẠY </a>
                            </li>
                            <li class="nav-item m-auto">
                                <a class="nav-link" href="thongtin.php">THÔNG TIN </a>
                            </li>
                            <li class="nav-item m-auto">
                                <a class="nav-link" href="./huongdanmuahang.php">HƯỚNG DẪN MUA HÀNG</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>
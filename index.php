<?php
require_once __DIR__ . "./ImportFile/importFile.php";

?>


<!doctype html>
<html lang="en">

<head>
    <title>Sagi</title>
</head>

<body>
    <?php
    include("head.php")
    ?>
    <!--- Content 1 (Menu and slider IMG) --->
    <div class="container-fluid px-5 mt-3 Content1">
        <div class="row">
            <div class="col-2 bg-success rounded ">
                <nav class="navbar navbar-expand-lg navbar-light mt-5 px-0">
                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class=" flex-column navbar-nav w-100">
                            <li class="nav-item dropright">
                                <h6> DANH MỤC SẢN PHẨM</h6>
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class=" d-flex justify-content-between">

                                        MỸ PHẨM DƯỠNG DA
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Kem dưỡng da Maberline</a>
                                    <a class="dropdown-item" href="#">Kem dưỡng da Vichy</a>
                                    <a class="dropdown-item" href="#">Kem dưỡng da Hazzenin</a>
                                    <a class="dropdown-item" href="#">Kem dưỡng da Shensado</a>
                                    <a class="dropdown-item" href="#">Kem dưỡng da Linh Hương</a>
                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class=" d-flex justify-content-between">
                                        MỸ PHẨM TRANG ĐIỂM
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Mỹ phẩm trang điểm Mayberline</a>
                                    <a class="dropdown-item" href="#">Mỹ phẩm trang điểm Oxy </a>
                                    <a class="dropdown-item" href="#">Mỹ phẩm trang điểm Vichy</a>
                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class=" d-flex justify-content-between">
                                        CHĂM SÓC BODY
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Dưỡng da toàn thân</a>
                                    <a class="dropdown-item" href="#">Giữ ẩm</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class=" d-flex justify-content-between">
                                        CHĂM SÓC TÓC
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Chăm sóc tóc hư tổn</a>
                                    <a class="dropdown-item" href="#">Chăm sóc tóc óng ả mượt mà</a>
                                    <a class="dropdown-item" href="#">Chăm sóc tóc gãy rụng</a>
                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class=" d-flex justify-content-between">
                                        CHĂM SÓC TOÀN THÂN
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Chăm sóc toàn thân Mayberlin</a>
                                    <a class="dropdown-item" href="#">Chăm sóc toàn thân Diana</a>
                                    <a class="dropdown-item" href="#">Chăm sóc toàn thân Wahti </a>
                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class=" d-flex justify-content-between">
                                        THỰC PHẨM CHỨC NĂNG
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Thực phẩm giảm béo</a>
                                    <a class="dropdown-item" href="#">Thực phẩm tăng cân</a>
                                    <a class="dropdown-item" href="#">Thực phẩm tăng chiều cao cho trẻ</a>
                                </div>
                            </li>
                            <li class="nav-item dropright">
                                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class=" d-flex justify-content-between">
                                        MỸ PHẨM THIÊN NHIÊN
                                        <i class="fas fa-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item " href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- <div class=""><br> dropright
            <h6> DANH MỤC SẢN PHẨM</h6>
            <ul class="nav d-flex flex-column"><br>
                <li><a href=""> MỸ PHẨM DƯỠNG DA</a></li><br>
                <li><a href=""> MỸ PHẨM TRANG ĐIỂM</a></li><br>
                <li> <a href="">CHĂM SÓC BODY</a></li><br>
                <li><a href=""> CHĂM SÓC TÓC</a></li><br>
                <li><a href=""> GIẢM BÉO TOÀN THÂN</a></li><br>
                <li><a href=""> THỰC PHẨM CHỨC NĂNG</a></li><br>
                <li><a href="">MỸ PHẨM THIÊN NHIÊN</a></li>
            </ul>
        </div> -->
            </div>
            <div class="col-6 pr-0">
                <img name="myimage" class="w-100 h-100" src="ANH/nen1.jpg" />
                <script type="text/javascript">
                    window.onload = function() {
                        setTimeout("switchImage()", 2000);
                    }
                    var current = 1;
                    var numIMG = 4;

                    function switchImage() {
                        current++;
                        // Thay thế hình
                        document.images['myimage'].src = 'ANH/nen' + current + '.jpg';
                        // Gọi lại hàm nếu thõa đk
                        if (current == numIMG) {
                            current = 0;
                        }
                        setTimeout("switchImage()", 2000)
                        // Nếu muốn ảnh thay liên tục ko dừng thì thay đoạn if(current<numIMG) bằng đoạn code sau:
                        /* if(current == numIMG){current =0;}
						 setTimeout("switchImage()", 1000);*/
                    }
                </script>
            </div>
            <div class="col-4">
                <img class="w-100 h-100" src="ANH/bang3.png">
            </div>
        </div>
    </div>

    <!---End Content 1(Menu and slider IMG)  --->



    <!-- Star content 2(Show Product) -->

    <div class="container-fluid px-5 mt-3 SanPham1">

        <!------------------------------- Show sản phẩm bán chạy ------------------>
        <div class="row sanpham1 ">
            <div class="col-12 px-0 ">
                <div class="border-content-hot d-flex justify-content-between">
                    <h4 class="text-hot"><i class="fab fa-hotjar"></i> Sản phẩm bán chạy</h4>
                    <ul class="nav ">
                        <li class="nav-item p-1 ">
                            <a href="" class="btn btn-outline-danger text-secondary ">Son môi</a>
                        </li>
                        <li class="nav-item p-1 ">
                            <a href="" class=" btn btn-outline-danger text-secondary ">Kem dưỡng da</a>
                        </li>
                        <li class="nav-item p-1 ">
                            <a href="" class="btn btn-outline-danger text-secondary ">Nước hoa</a>
                        </li>
                        <li class="nav-item p-1 ">
                            <a href="" class="btn btn-outline-danger text-secondary ">Xem Thêm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mx-0 row owl-carousel owl-theme ">
            <?php
            $sql = "SELECT * FROM sanpham order by MaSP asc";
            $product = $db->fetchsql($sql);

            foreach ($product as $row) {
            ?>
                <div class="product">
                    <img class="img-fluid mx-auto" style="height:150px;width: 150px;" src="ANH/<?php echo $row['HinhAnh'] ?>" alt="">
                    <div class="px-2 d-flex justify-content-between" style="height:25px">
                        <p class=" text-danger"><?php echo number_format($row['DonGia']) . ' đ' ?></p>
                        <strike class=" text-dark">
                            4.420.000 đ</strike>
                    </div>
                    <div class=" bg-hot top0 rounded position-absolute text-center ">
                        <p class="text-white">Còn: <small class=" font-weight-bold text-white"><?php echo $row['SoLuongCon'] ?></small></p>
                    </div>
                    <p class=" text-center text-truncate">
                        <?php echo $row['TenSP'] ?>
                    </p>
                    <div class="d-flex justify-content-between mb-1  ">
                        <a class="ml-1 text-white btn btn-primary"><i class="far fa-eye"></i>Xem</a>
                        <button value="<?php echo $row['MaSP'] ?>" class="buy mr-1 text-white btn btn-success"><i class=" fas fa-cart-plus"></i> Mua</button>
                    </div>
                </div>
            <?php }
            ?>
        </div>

        <div class="row mt-3">
            <div class="col-12 px-0 border-content-trademark d-flex justify-content-between">
                <h4 class="text-trademark"><i class="far fa-registered"></i> Thương hiệu nổi bật</h4>
                <ul class="nav ">
                    <li class="nav-item p-1 ">
                        <a href="" class="btn btn-outline-trade text-secondary ">Xem thêm</a>
                    </li>
                </ul>
            </div>
            <div class="col-3">
                <a href=""><img class="w-100" src="Anh/thuonghieu1.jpg"></a>
            </div>
            <div class="col-3">
                <a href=""><img class="w-100" src="ANH/thuonghieu4.jpg"></a>
            </div>
            <div class="col-3">
                <a href=""><img class="w-100" src="Anh/thuonghieu3.jpg"></a>
            </div>
            <div class="col-3">
                <a href=""><img class="w-100" src="Anh/thuonghieu2.jpg"></a>
            </div>
        </div>
        <hr>

        <!-- End show trademark  -->

        <!---  ----->
        <div class="row sanpham1 ">
            <div class="col-12 px-0 ">
                <div class="border-content-sakura d-flex justify-content-between">
                    <h4 class="text-sakura"><i class="fab fa-hotjar"></i> SHAKURA CLINIC & SPA</h4>
                    <ul class="nav ">
                        <li class="nav-item p-1 ">
                            <a href="" class="btn btn-outline-sakura text-secondary ">SPA</a>
                        </li>
                        <li class="nav-item p-1 ">
                            <a href="" class=" btn btn-outline-sakura text-secondary ">CLINIC</a>
                        </li>
                        <li class="nav-item p-1 ">
                            <a href="" class="btn btn-outline-sakura text-secondary ">Xem Thêm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mx-0 row owl-carousel owl-theme ">
            <?php
            $sql = "SELECT * FROM sanpham order by MaSP desc";
            $product = $db->fetchsql($sql);

            foreach ($product as $row) {
            ?>
                <div class="product">
                    <img class="img-fluid mx-auto" style="height:150px;width: 150px;" src="ANH/<?php echo $row['HinhAnh'] ?>" alt="">
                    <div class="px-2 d-flex justify-content-between" style="height:25px">
                        <p class=" text-danger"><?php echo number_format($row['DonGia']) . ' đ' ?></p>
                        <strike class=" text-dark">
                            4.420.000 đ</strike>
                    </div>

                    <p class=" text-center text-truncate">
                        <?php echo $row['TenSP'] ?>
                    </p>
                    <div class="d-flex justify-content-between mb-1  ">
                        <a class="ml-1 text-white btn btn-primary"><i class="far fa-eye"></i>Xem</a>
                        <button value="<?php echo $row['MaSP'] ?>" class="buy mr-1 text-white btn btn-success"><i class=" fas fa-cart-plus"></i> Mua</button>
                    </div>
                </div>
            <?php }
            ?>
        </div>
        <!------------------------- Show sản phẩm chăm sóc môi ---------->
        <div class="row">
            <div class="col-12 px-0 border-content-pink d-flex justify-content-between">
                <h4 class="text-pink"><i class="fas fa-apple-alt"></i> Ưu đãi thường kỳ</h4>
                <ul class="nav ">
                    <li class="nav-item p-1 ">
                        <a href="" class="btn btn-outline-pink text-secondary ">Xem thêm</a>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <a href="">
                    <img class="img-fluid" src="ANH/aa_1 (1).jpg">
                </a>
                <a href="" class="mt-1 btn btn-outline-pink text-secondary">
                    Dưỡng ẩm môi
                </a>
                <a href="" class="mt-1 btn btn-outline-pink text-secondary">
                    Son môi đỏ tươi
                </a>
                <a href="" class="mt-1 btn btn-outline-pink text-secondary">
                    Chăm sóc môi thâm
                </a>
                <a href="" class="mt-1 btn btn-outline-pink text-secondary">
                    Son môi dịu cho da
                </a>
            </div>
            <div class="col-10">
                <ul class="nav row">
                    <li class="col-4"><a href=""><img class="img-fluid" src="ANH/02-1.jpg"></a></li>
                    <li class="col-4"><a href=""><img class="img-fluid" src="ANH/silky_bom.jpg"></a></li>
                    <li class="col-4"><a href=""><img class="img-fluid" src="ANH/lemonade.jpg"></a></li>
                </ul>
                <p class="mb-0 text-pink border-p-product">Sản phẩm nổi bật</p>
                <ul class="row">
                    <div class="MultiCarousel1 " data-items="1,3,5,6" data-slide="1" id="MultiCarousel1" data-interval="1000">
                        <div class="MultiCarousel1-inner">
                            <?php
                            $sql = "SELECT * FROM sanpham  order by MaSP desc";
                            $product = $db->fetchsql($sql);

                            foreach ($product as $row) {
                            ?>
                                <div class="item1">
                                    <div class="pad15">
                                        <img class="img-fluid" style="height:1 50px;width: 150px;" src="ANH/<?php echo $row['HinhAnh'] ?>" alt="">
                                        <div class=" d-flex justify-content-between" style="height:25px">
                                            <p class=" text-danger"><?php echo number_format($row['DonGia']) . ' đ' ?></p>
                                            <strike class=" text-dark">
                                                420.000 đ</strike>
                                        </div>

                                        <p class=" text-center text-truncate">
                                            <?php echo $row['TenSP'] ?>
                                        </p>
                                        <div class="d-flex justify-content-between mb-1  ">
                                            <a class=" text-white btn btn-primary"><i class="far fa-eye"></i>Xem</a>
                                            <button value="<?php echo $row['MaSP'] ?>" class="buy mr-1 text-white btn btn-success"><i class=" fas fa-cart-plus"></i> Mua</button>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <button class="btn btn-success leftLst1">
                            <</button> <button class="btn btn-success rightLst1">>
                        </button>
                    </div>
                </ul>

            </div>
        </div>

    </div>

    <!-- End content 2(Show Product) -->


    <?php
    include("footer.php")
    ?>
    <script>
        // Slider product 1 
        $(document).ready(function() {
            var itemsMainDiv = ('.MultiCarousel1');
            var itemsDiv = ('.MultiCarousel1-inner');
            var itemWidth = "";

            $('.leftLst1, .rightLst1').click(function() {
                var condition = $(this).hasClass("leftLst1");
                if (condition)
                    click(0, this);
                else
                    click(1, this)
            });

            ResCarouselSize();




            $(window).resize(function() {
                ResCarouselSize();
            });

            //this function define the size of the items
            function ResCarouselSize() {
                var incno = 0;
                var dataItems = ("data-items");
                var itemClass = ('.item1');
                var id = 0;
                var btnParentSb = '';
                var itemsSplit = '';
                var sampwidth = $(itemsMainDiv).width();
                var bodyWidth = $('body').width();
                $(itemsDiv).each(function() {
                    id = id + 1;
                    var itemNumbers = $(this).find(itemClass).length;
                    btnParentSb = $(this).parent().attr(dataItems);
                    itemsSplit = btnParentSb.split(',');
                    $(this).parent().attr("id", "MultiCarousel1" + id);


                    if (bodyWidth >= 1200) {
                        incno = itemsSplit[2];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 992) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    } else if (bodyWidth >= 768) {
                        incno = itemsSplit[1];
                        itemWidth = sampwidth / incno;
                    } else {
                        incno = itemsSplit[0];
                        itemWidth = sampwidth / incno;
                    }
                    $(this).css({
                        'transform': 'translateX(0px)',
                        'width': itemWidth * itemNumbers
                    });
                    $(this).find(itemClass).each(function() {
                        $(this).outerWidth(itemWidth);
                    });

                    $(".leftLst1").addClass("over");
                    $(".rightLst1").removeClass("over");

                });
            }


            //this function used to move the items
            function ResCarousel(e, el, s) {
                var leftBtn = ('.leftLst1');
                var rightBtn = ('.rightLst1');
                var translateXval = '';
                var divStyle = $(el + ' ' + itemsDiv).css('transform');
                var values = divStyle.match(/-?[\d\.]+/g);
                var xds = Math.abs(values[4]);
                if (e == 0) {
                    translateXval = parseInt(xds) - parseInt(itemWidth * s);
                    $(el + ' ' + rightBtn).removeClass("over");

                    if (translateXval <= itemWidth / 2) {
                        translateXval = 0;
                        $(el + ' ' + leftBtn).addClass("over");
                    }
                } else if (e == 1) {
                    var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                    translateXval = parseInt(xds) + parseInt(itemWidth * s);
                    $(el + ' ' + leftBtn).removeClass("over");

                    if (translateXval >= itemsCondition - itemWidth / 2) {
                        translateXval = itemsCondition;
                        $(el + ' ' + rightBtn).addClass("over");
                    }
                }
                $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
            }

            //It is used to get some elements from btn
            function click(ell, ee) {
                var Parent = "#" + $(ee).parent().attr("id");
                var slide = $(Parent).attr("data-slide");
                ResCarousel(ell, Parent, slide);
            }

        });
        //// End show product 

        /// demo
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                nav: true,
                items: 6,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });
            // $('.customNextBtn').click(function() {
            // owl.trigger('next.owl.carousel');
            // })
            // // Go to the previous item
            // $('.customPrevBtn').click(function() {
            // // With optional speed parameter
            // // Parameters has to be in square bracket '[]'
            // owl.trigger('prev.owl.carousel', [300]);
            // })

        });

        $(document).ready(function() {
            $(".buy").click(function() {
                var id = $(this).val()
                console.log(id)
                $.ajax({
                    url: './database/themgiohang.php',
                    type: 'GET',
                    data: {
                        'id': id,
                    },
                    success: function(data) {
                        console.log(data)
                        if (data == 0) {
                            swal({
                                title: "Thất bại!",
                                text: "Bạn cần đăng nhập để đặt hàng",
                                icon: "error",
                                button: "Đóng !",
                            });
                        } else if (data == 101010) {
                            swal({
                                title: "Thất bại!",
                                text: "Mặt hàng này đã hết hoăc trong giỏ hàng của bạn đã đặt hết số lượng hiện có",
                                icon: "error",
                                button: "Đóng !",
                            });
                        } else {
                            $('.qty').text('GIỎ HÀNG' + ' (' + data + ' )')
                            swal({
                                title: "Thành Công",
                                text: "Bạn đã đặt 1 sản phẩm vào giỏ hàng",
                                icon: "success",
                                button: "Đóng!",
                            })
                        }
                    }
                })
            })

        })
    </script>
</body>

</html>
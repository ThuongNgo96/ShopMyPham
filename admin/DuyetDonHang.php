<?php
require_once __DIR__ . "./../ImportFile/importFile.php";
?>
<?php
include("headAmin.php");
?>
<div class="container-fluid pt-48 pb-5 mt-4 ">
    <div class="row ">
        <?php include("leftAdmin.php") ?>
        <div class="col-md-10 bg-white  ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between pt-3" style=" height: 50px;">
                <div class=" ">
                    <h2>Duyệt Hóa Đơn</h2>
                </div>
                <div class=" d-flex">
                    <button class="btn btn-success"><i class="fas fa-plus-circle"></i> Create an a Bill</button>
                </div>
            </div>
            <hr>
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center" scope="col">Id</th>
                        <th class="text-center" scope="col">Tên người nhận</th>
                        <th class="text-center" scope="col">Địa chỉ</th>
                        <th class="text-center" scope="col">Số điện thoại</th>
                        <th class="text-center" scope="col">Ngày đặt</th>
                        <th class="text-center" scope="col">Tổng tiền</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM donhang WHERE MaTTDH = 'TT01' order by MaDH asc";
                    $bills = $db->fetchsql($sql);
                    foreach ($bills as $row) {
                    ?>
                        <tr class=" border">
                            <th scope="row"><?php echo $row['MaDH'] ?></th>
                            <td><?php echo $row['TenNguoiNhan'] ?></td>
                            <td><?php echo $row['DiaChi'] ?></td>
                            <td><?php echo $row['SDT'] ?></td>
                            <td><?php echo $row['NgayDat'] ?></td>
                            <td><?php echo number_format($row['TongTien']) . ' đ' ?></td>
                            <td class="d-flex">
                                <button value="<?php echo $row['MaDH'] ?>" class="duyet m-auto btn btn-warning">Duyệt </button>
                            </td>
                        </tr>
                    <?php }
                    ?>

            </table>
        </div>
    </div>
</div>
<?php
include("footerAdmin.php")
?>
<script>
    $(document).ready(function() {
        $(".duyet").click(function() {
            var id = $(this).val()
            console.log(id)
            $.ajax({
                url: './../database/xulyduyetdon.php',
                type: 'POST',
                data: {
                    'id': id,
                },
                success: function(data) {
                    console.log(data)
                    if (data == 1) {
                        swal({
                                title: "Thành Công",
                                text: "Bạn đã duyệt 1 đơn hàng",
                                icon: "success",
                                button: "Đóng!",
                            })
                            .then(function(willDelete) {
                                location.replace('./DuyetDonHang.php')
                            })
                    }

                }
            })
        })

    })
</script>
<?php
require_once __DIR__ . "./../ImportFile/importFile.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy Id đơn hàng bên Xử Lý Đơn
    $idDH = postInput('idDonHang');
    //Update mã tình trạng đơn hàng thành TT04( Đã duyệt đơn) trong bảng donhang
    $update = $db->update('donhang', array('MaTTDH' => 'TT03'), array('MaDH' => $idDH));
}
echo 1;

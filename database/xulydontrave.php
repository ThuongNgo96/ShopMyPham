<?php
require_once __DIR__ . "./../ImportFile/importFile.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy Id đơn hàng bên Xử Lý Đơn
    $idDH = postInput('idDonHang');
    //Update mã tình trạng đơn hàng thành TT05( Trả về) trong bảng donhang
    $update = $db->update('donhang', array('MaTTDH' => 'TT05'), array('MaDH' => $idDH));
    // Tìm các dòng đơn hàng từ  bảng chitietDB có id đơn hàng lấy từ XuLyDonTraVe
    $chitietDH = $db->fetchAllHoaDoninCTDH('chitietdh', $idDH);
    foreach ($chitietDH as $value) {
        // Tìm các sản phẩm bảng sanpham có Masp = Masp trong bảng chitietdonhang
        $sanpham = $db->fetchID('sanpham', $value['MaSP']);
        //Biến chứa số lượng sản phẩm được cộng lại cho bảng sanpham
        $CongSoLuong = $sanpham['SoLuongCon'] + $value['SoLuong'];
        //Update lại số lượng sản phẩm trong bảng sản phẩm
        $updateSoLuongSanPham = $db->update('sanpham', array('SoLuongCon' => $CongSoLuong), array('MaSP' => $value['MaSP']));
    }
}
echo 1;

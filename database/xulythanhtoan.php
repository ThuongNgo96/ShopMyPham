<?php
require_once __DIR__ . "./../ImportFile/importFile.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $product = $db->fetchAll('sanpham');
    foreach ($_SESSION['cart'] as $key => $value) {
        $product = $db->fetchID('sanpham',$key);
        $soluong = $product['SoLuongCon'] - $value['SoLuong'];
        $updateSoLuong= $db ->update("sanpham",array('SoLuongCon'=>$soluong), array('MaSP'=>$key));
    }
    $data = [
        'idTK' => postInput('id'),
        'MaTTDH' => postInput('status'),
        'MaPT' => postInput('mapt'),
        'TenNguoiNhan' => postInput('tennguoinhan'),
        'DiaChi' => postInput('diachi'),
        'SDT' => postInput('sdt'),
        'TongTien' => $_SESSION['sum'],
    ];
    $idHoaDon = $db->insert("donhang", $data);
    if ($idHoaDon > 0) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $data1 = [
                'MaDH' => $idHoaDon,
                'MaSP' => $key,
                'SoLuong' => $value['SoLuong'],
                'Dongia' => $value['DonGia'],
            ];
            $idCTHD = $db->insert("chitietdh", $data1);
        }
    }
    unset($_SESSION['cart']);
}
echo "<script>alert('Thanh toán thành công');location.href='../index.php'</script>";

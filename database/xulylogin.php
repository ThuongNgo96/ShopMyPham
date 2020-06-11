<?php

require_once __DIR__ . "./../ImportFile/importFile.php";
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['login'])) {
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        echo "<script>alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu');location.href='./../dangnhap.php'</script>";
        exit;
    }
    //Kiểm tra tên đăng nhập có tồn tại không
    $sql1 = "SELECT username, password FROM taikhoan WHERE username='$username'";
    $query = $db->query($sql1);
    if (mysqli_num_rows($query) == 0) {
        echo "<script>alert('Tên đăng nhập này không tồn tại ');location.href='../dangnhap.php'</script>";
        exit;
    }

    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "<script>alert('Nhập mật khẩu không đúng vui lòng nhập lại');location.href='../dangnhap.php'</script>";
        exit;
    }

    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    header('Location: ../index.php');
    die();
}

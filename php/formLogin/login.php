<?php
//Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
include('connect.php');
   
//Lấy dữ liệu nhập vào
$username = $_POST['username'];
$password = $_POST['password'];
   
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
   
//Kiểm tra tên đăng nhập có tồn tại không
$sql = "SELECT ten FROM aptech_php_23_04.data WHERE ten ='$username'";
$result = $conn->query($sql);

   
//Lấy mật khẩu trong database ra
while($row = $result->fetch_assoc()) {
    if ($result->num_rows > 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
        }
//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['email']) {
echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}
   
//Lưu tên đăng nhập
$_SESSION['ten'] = $username;
echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
die();
}
}
?>
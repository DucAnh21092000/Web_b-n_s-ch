<?php

  
// Kết nối cơ sở dữ liệu
//localhost là tên miền , root ten user , passwword để trống, tên databasedatabase
$conn = mysqli_connect('localhost', 'root', '', 'web_ban_sach') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
  
// Dùng isset để kiểm tra Form
if (isset($_POST['create']))
{
$fullname = isset($_POST['fullname']) ? mysql_escape_string($_POST['fullname']) : '';     
$username = isset($_POST['username']) ? mysql_escape_string($_POST['username']) : '';
$password = isset($_POST['password']) ? md5($_POST['password']) : '';
$email = isset($_POST['email']) ? mysql_escape_string($_POST['email']) : '';
$phonenumber= isset($_POST['phonenumber']) ? mysql_escape_string($_POST['phonenumber']) : '';

if($fullname==null || $username ==null || $password ==null ||$email == null || $phonenumber == null){
    echo "Bạn chưa điền đủ thông tin !";
}
else{
// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);
  
// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
  
// Sử dụng javascript để thông báo
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';
  
// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO member (fullname,username, password, phone, email) VALUES ('$fullname','$username','$password','$phonenumber','$email')";
  
if (mysqli_query($conn, $sql)){
echo"Chúc mừng bạn đã đăng ký thành công :"."</br>";     
echo "Tên đăng nhập: ".$_POST['fullname']."<br/>";
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";
echo "Số điện thoại: ".$_POST['phonenumber']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}}
?>
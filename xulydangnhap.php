<?php

  
// Kết nối cơ sở dữ liệu
// $conn = mysqli_connect('localhost', 'root', '', 'web_ban_sach') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

if(isset($_POST['login']))
{
    include 'connect_db.php'; //ket noi voi csdl bang file có sẵn :v
    
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    // kiểm tra tài khoản vừa nhập vào có đúng hay không 

    if(!$username || !$password){
        echo "Tài khoản , mật khẩu không chính xác hoặc không tồn tại !!";
        exit;       
    }
    // mã hóa password dùng md5
    $password = md5($password);
   // kiểm tra tk mk đã tồn tại trong csdl chưa
   
   $query=mysql_query("SELECT username , password FROM member WHERE username='$username'");
// hoac $query = mysqli_query("SELECT * FROM member WHERE username='$username' AND password='$password'");
 if(mysql_num_rows($query)==0){
     echo "Tài khoản không tồn tại ! Vui lòng kiểm tra lại ";    
 }
 
     // su dung mysql_fetch_array de doc du lieu trong sql 
  $row = mysql_fetch_array($query);

  if($password !=$row(['password'])) // doc du lieu thu cot password
  {
echo "Mật khẩu không chính xác ! . Vui lòng nhập lại";
  }
  // hiển thị username ng dùng sau khi đăng nhập thanh công
  $Session['username'] = $username;


echo "Xin chào <b>" .$username  . "! </b> . Chúc mừng bạn đã đăng nhập  thành công !"; 

 
}
?>
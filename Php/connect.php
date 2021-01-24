<?php
$servername = "localhost";
$database = "web_ban_sach";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn) {
   mysqli_query($conn,"SET NAMES 'utf8'");
// echo "Connected successfully"; // dong này em để test kết nối 
}
else{
    echo"Bạn đã kết nối thất bại !".mysqli_connect_error();
}
mysqli_close($conn);
?>
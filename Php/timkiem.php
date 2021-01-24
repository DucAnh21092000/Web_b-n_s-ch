<?php
include 'connect_db.php';
if(isset($_POST['timkiem']))  // Nếu người dùng submit form thì thực hiện
{
$key=addslashes($_POST['text-timkiem']); // Gán hàm addslashes để chống sql injection

if(empty($key)){
    echo "Bạn chưa nhập dữ liệu mời nhập lại!";
}
else{
    $query="select * from `product` where `name` OR `content `LIKE '%$key%'";
    $sql=mysql_query($query);

    $row=mysql_fetch_array($sql);

    if($row>0 && $key != "" ){
 echo "Đã tìm thấy sản phẩm : " ."</br>";
 echo " $num Kết quả trả về với từ khóa <b> $key </b>";
 echo '<table border="1" cellspacing="0" cellpadding="10">';
 while ($row = mysql_fetch_array($sql)) {
     echo '<tr>';
         echo "<td>{$row['name']}</td>";
         echo "<td>{$row['image']}</td>";
         echo "<td>{$row['price']}</td>";
         echo "<td>{$row['content']}</td>";
         echo "<td>{$row['create_time']}</td>";
         echo "<td>{$row['last_updated']}</td>";
     echo '</tr>';
 }
 echo '</table>';
} 
else {
 echo "Khong tim thay ket qua!";
}

    }
}

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Danh mục sản phẩm </title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            body{
                font-family: arial;
            }
            .container{
                width: 600px;
                margin: 0 auto;

            }
            h1{
                text-align: center;
            }
            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .product-item{
                float: left;
                width: 47%;
                
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                line-height: 26px;
            }
            .product-item label{
                font-weight: bold;
            }
            .product-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
            }
            .product-price{
                color: red;
                font-weight: bold;
            }
            .product-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .product-item img{
                max-width: 100%;
            }
            .product-item ul{
                margin: 0;
                padding: 0;
                border-right: 1px solid #ccc;
            }
            .product-item ul li{
                float: left;
                width: 33.3333%;
                list-style: none;
                text-align: center;
                border: 1px solid #ccc;
                border-right: 0;
                box-sizing: border-box;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            .buy-button{
                text-align: right;
                margin-top: 10px;
            }
            .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            }
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
        </style>
    </head>
    <body>
    <div class="main">
        <!-- TOP : bat dau -->
        <div class="top">
            <div class="languages">
                <div>Ngôn ngữ: </div>
                <a href="#"><img src="images/en.gif" alt="EN" /></a>
                <a href="#"><img src="images/de.gif" alt="DE" /></a>
            </div>
            <div class="search">
                <div class="search_text"><a href="#">Tìm kiếm</a></div>
                <input type="text" class="search_input" name="search" />
                <input type="image" src="images/search.gif" class="search_bt" />
            </div>
        </div>
        <!-- TOP : ket thuc -->

        <!-- HEADER : bat dau -->
        <div class="header">
            <div class="logo" id="logo"><img src="images/14.png" width="100%" alt="images" /></div>
        </div>
        <div class="clr"></div>
        <!-- HEADER : ket thuc -->

        <!-- bat dau menu -->
        <div class="content">
            <!-- Menu tab -->
            <div id="menu_tab">
                <div class="left_menu_corner"></div>
                <div class="left_menu_corner"></div>
                <ul class="menu">
                    <li><a href="./index.html" id="nav_hom">Trang chủ</a></li>
                    <li class="divider"></li>
                    <li><a href="./index.php" id="nav_pro">Sản phẩm</a></li>
                    <li class="divider"></li>
                    <li><a href="./register1.php" id="nav_acc">Đăng ký</a></li>
                    <li class="divider"></li>
                    <li><a href="./register.php" id="nav_sig">Đăng nhập</a></li>
                    <li class="divider"></li>

                    <li><a href="./contact.html" id="nav_con">Liên hệ</a></li>
                    <li class="divider"></li>
                    <li><a href="./about.html" id="nav_con">About</a></li>
                    <li class="divider"></li>
                    </li>
                </ul>
                <div class="right_menu_corner"></div>
            </div>

            <div class="navigation"> Sản phẩm: <span class="current">Home</span> </div>
            <!-- menu trai-->
            <div class="left_content">
                <!-- danh muc -->
                <div class="title_box">Categories</div>
                <ul class="left_menu">
                    <li class="odd"><a href="#">Kho sách giảm giá</a></li>
                    <li class="even"><a href="#">Sách bán chạy</a></li>
                    <li class="odd"><a href="#">Sách mới phát hành</a></li>
                    <li class="even"><a href="#">Sách sắp phát hành</a></li>
                    <li class="odd"><a href="#">Sách ngoại ngữ</a></li>
                    <li class="even"><a href="#">Sách kinh tế</a></li>
                    <li class="odd"><a href="#">Sách thiếu nhi</a></li>
                    <li class="even"><a href="#">Sách giáo khoa</a></li>
                    <li class="odd"><a href="#">Sách tự nhiên</a></li>
                    <li class="even"><a href="#">Sách khoa học</a></li>
                    <li class="odd"><a href="#">Sách kham thảo</a></li>
                    <li class="even"><a href="#">Sách tự nhiên- xã hội</a></li>
                    <li class="odd"><a href="#">Sách chuyên nghành</a></li>
                </ul>
                <!-- quang cao -->
                <div class="title_box">Bán chạy</div>
                <div class="border_box">
                    <div class="product_title"><a href="#">Cú Hích (Tái Bản 2017)</a></div>
                    <div class="product_image">
                        <a href="#"><img src="images/1.jpg" alt="Sách" width="100%" height="180" /></a>
                    </div>
                    <div class="product_price">
                        <span class="reduce">100.000đ</span>
                        <span class="price">80.000đ</span>
                    </div>
                </div>
                <!-- Newsletter -->
                <div class="title_box2">Gửi mail</div>
                <div class="border_box">
                    <input type="text" name="newsletter" class="newsletter_input" value="your email" />
                    <a href="#" class="join">Gửi</a>
                </div>
                <!-- Banner -->

            </div>

            <!-- noi dung chinh giua -->
            <div class="center_content" style="height:fit-content" >
            <!-- Dòng trên em để fit-content để độ dài của thẻ div tự tăng hoặc tự giảm khi số lượng san pham ben duoi thay doi theo y thíchthích-->
          
            <?php
        $search = isset($_GET['name']) ? $_GET['name'] : "";
        if ($search) {
            $where = "WHERE `name` LIKE '%" . $search . "%'";
        }
        include './connect_db.php';
        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 9; // chỉnh số 4 thành 1 số để danh sách sản phẩm hiện thị ra số lượng mong muốn 
        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
        $offset = ($current_page - 1) * $item_per_page;
        // neu bien search em viet ben tren khac rong thi se thuc thi cau lenh sql ben duoi
        //con khong se chay xuong esle de in ra tat ca danh sach san pham
        if ($search!=null) {
            $products = mysqli_query($con, "SELECT * FROM `product` WHERE `name` LIKE '%" . $search . "%' ORDER BY `id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
            $totalRecords = mysqli_query($con, "SELECT * FROM `product` WHERE `name` LIKE '%" . $search . "%'");
        } else {
            $products = mysqli_query($con, "SELECT * FROM `product` ORDER BY `id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
            $totalRecords = mysqli_query($con, "SELECT * FROM `product`");
        }
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        ?>
             
        <!-- Những dòng trong style là em căn chỉnh ở chrome rồi thêm luôn vào đây ko viết vào file css nữa -->
          <div id="wrapper-product" class="container">
            <h1 style="margin-top: 21px;text-align: center;margin-bottom: 18px;font-size: 18px;margin-bottom: 20px;">Danh sách sản phẩm</h1>
            <form id="product-search" method="GET">
                <label style="margin: 0px 0px 20px;font-size: 16px;">Tìm kiếm sản phẩm</label>
                <input type="text" value="<?=isset($_GET['name']) ? $_GET['name'] : ""?>" name="name" />
                <input type="submit" value="Tìm kiếm" />
            </form>
            <div class="product-items">
                <?php
                while ($row = mysqli_fetch_array($products)) /* mysqli_f.... lay du lieu tu bang khi ta thuc thi cay truy van  o dong 211*/
                
                {
                    ?>
                    <div class="product-item">
                        <div class="product-img">
                            <a href="detail.php?id=<?= $row['id'] ?>"><img width="300px;" height="320px;" src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" /></a>
                        </div>
                        <strong><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></strong><br/>
                        <label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/>
                        <p><?= $row['content'] ?></p>
                        <div class="buy-button">
                            <a href="./add_cart.php">Mua sản phẩm</a>
                        </div>
                    </div>
                <?php } ?>
                <?php
            if($row=mysqli_num_rows($product)==0) /* kiem tra so cot cua du lieu tra ve khi thuc hien cau truy van*/{
                ?>  
                <p style="color:red; font-size:12px;">Không tìm thấy sản phẩm mời bạn nhập lại !!</p>
          <?php  } ?>    
                

            <div class="clear-both"></div>
                <?php
                include './pagination.php';
                ?>
                <div class="clear-both"></div>
            </div>
        </div>
    </div>
    <!-- san pham -->
    <!-- noi dung ben phai -->
    <div class="right_content1">
        <!-- gio hang-->
        <div class="shopping_cart">
            <div class="cart_title">Giỏ hàng</div>
            <div class="cart_details">
                0 Sản phẩm<br />
                <span class="border_cart"></span> Tổng: <span class="price">0đ</span>
            </div>
            <div class="cart_icon">
                <a href="#" title="header=[Checkout] body=[&nbsp;] "><img src="images/shoppingcart.png" alt="" title="" width="48" height="48" border="0" /></a>
            </div>
        </div>
        <!-- sach moi -->
        <div class="title_box">Sách mới</div>
        <div class="border_box">
            <div class="product_title"><a href="#">Dù Thế Nào Cũng Phải Đi ( News )</a></div>
            <div class="product_image">
                <a href="#"><img src="images/11.jpg" alt="Sách" width="100%" height="180" /></a>
            </div>
            <div class="product_price">
                <span class="reduce">200.000đ</span>
                <span class="price">250.000đ</span>
            </div>
        </div>
        <!-- danh muc menu -->
        <div class="title_box2">Sách</div>
        <ul class="left_menu">
            <li class="odd"><a href="#">Kho sách giảm giá</a></li>
            <li class="even"><a href="#">Sách bán chạy</a></li>
            <li class="odd"><a href="#">Sách mới phát hành</a></li>
            <li class="even"><a href="#">Sách sắp phát hành</a></li>
            <li class="odd"><a href="#">Sách ngoại ngữ</a></li>
            <li class="even"><a href="#">Sách kinh tế</a></li>
        </ul>
        <!-- Banner -->
        <div class="banner_adds">
            <a href="#"><img src="images/bann1.jpg" alt="Banner" width="80%" /></a>
        </div>
        <!-- Lien hệ-->
        <div id="lienhe" style="width: 200px;>
            <b style="font-size: 16px; color: red;"> Liên hệ với chúng tôi </b>
        </div>
        <!-- nut goi dien thoai có animation-->
        <div id="phonecall">

            <div class="hotline-phone-ring-wrap">
                <div class="hotline-phone-ring">
                    <div class="hotline-phone-ring-circle"></div>
                    <div class="hotline-phone-ring-circle-fill"></div>
                    <div class="hotline-phone-ring-img-circle">
                        <a href="tel:0987654321" class="pps-btn-img">
                            <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
                        </a>
                    </div>
                </div>
                <div class="hotline-bar">
                    <a href="tel:0582842388">
                        <span class="text-hotline">0582.842.388</span>
                    </a>
                </div>
            </div>
        </div>
        <div id="Lienhefb">
            <b style="color:blue; font-size: 13px;">Facebook chúng tôi</b> </br>
            </br>
            <a style="color:blue; font-size: 13px;" href="https://www.facebook.com/profile.php?id=100011980785424">Nhấn vào đây để liên hệ với chúng tôi</a>
        </div>

    </div>
    <!-- CONTENT : END -->
    <div class="clr" style="margin-top:30px;"></div>
    <!-- FOOTER : START -->
    <div class="footer">
        <div class="left_footer">

        </div>

        <div class="center_footer">
            Thiết kế bởi Đức Anh <br />
            <a href="#"><img src="images/csscreme.jpg" alt="Image template" /></a><br />
            <img src="images/payment.gif" alt="Payment" />
        </div>

        <div class="right_footer">
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">sitemap</a>
            <a href="#">rss</a>
            <a href="#">contact us</a>
        </div>

    </div>

    <!-- FOOTER : END -->
    </div>
</body>
<!-- InstanceEnd -->

</html>
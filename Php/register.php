<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">
    <script type="text/javascript" src="js/boxOver.js"></script>
   
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
                <div class="title_box">Gửi mail</div>
                <div class="border_box">
                    <input type="text" name="newsletter" class="newsletter_input" value="your email" />
                    <a href="#" class="join">Gửi</a>
                </div>
                <!-- Banner -->
                <div class="banner_adds">
                    <a href="#"><img src="images/bann2.jpg" alt="Banner" /></a>
                </div>
            </div>

            <!-- noi dung chinh giua -->
            <div class="center_content">
                <div class="center_title_bar"> Đăng nhập</div>
                <div class="prod_box_big">
                    <div class="top_prod_box_big"></div>
                    <div class="center_prod_box_big">
                        <div class="contact_form">
                        <?php
                        if(session_id()==''){ @ob_start();
                        session_start();}  
        include './connect_db.php';
        $error = false;
        if (isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $result = mysqli_query($con, "Select `id`,`username`,`fullname` from `member` WHERE (`username` ='" . $_POST['username'] . "' AND `password` = md5('" . $_POST['password'] . "'))");
            if (!$result) {
                $error = mysqli_error($con);
            } else {
                $user = mysqli_fetch_assoc($result);
                $_SESSION['current_user'] = $user;
            }
            mysqli_close($con);
            if ($error !== false || $result->num_rows == 0) {
                ?>
                <div id="login-notify" class="box-content" style="    font-size: 19px; color: red; font-family: fangsong;">
                    <h1>Thông báo</h1>
                    <h4><?= !empty($error) ? $error : "Thông tin đăng nhập không chính xác" ?></h4>
                    <a href="./register.php">Quay lại</a>
                </div>
                <?php
                exit;
            }
        
            ?>
        <?php } ?>
        <?php if (empty($_SESSION['current_user'])) { ?>
            <div id="user_login" class="box-content">
            <form action="register.php" method="post">    
                        <div class="form_row">
                               
                                    <label class="contact"><strong> <i class="fas fa-users"></i>Tài khoản:</strong></label>
                                    <input type="text" class="contact_input"  name="username"/>
                            </div>

                            <div class="form_row">
                                <label class="contact"><strong><i class="fas fa-key"></i>     Mật khẩu:</strong></label>
                                <input type="password" class="contact_input" name="password" />
                            </div>
                            </br>
                            </br>
                            <div class="form-dn+doiMatKhau" style="display: flex; flex-direction:row">
                            <button style="width: 120px; height: 30px; margin-left: 126px;">
                                <i class="fas fa-check-circle"></i> 
                                       <input type="submit" name="login" value="Đăng nhập"> 
                                       
                                </button></div>
                            
                            </form>
                    
                        </div>
                        </br>
                      
                        <button style="margin-top: 10px;margin-left: 10px; background: rgb(93, 93, 248); height: 30px ; width: 260px; ">
                                <i class="fab fa-facebook-f " style="color: white; "></i>
                                <b style="color: white;  margin-left: 10px;">Đăng nhập với tài khoản Facebook</b>
                                </button>
                        </br>
                        <button style="margin-top: 10px;margin-left: 10px; background: #ef4c4c; height: 30px ; width: 260px; ">
                        <i class="fab fa-google" style="color: white; "> </i>
                        <b style="color: white;  margin-left: 10px;">Đăng nhập với tài khoản Google</b>
                        </button>
            </div>
            <?php
        } else {
            $currentUser = $_SESSION['current_user'];
            ?>
            <div id="login-notify" class="box-content" style="font-size: 20px; text-decoration: none;">
                Xin chào <?= $currentUser['fullname'] ?><br/>
                <a href="./edit.php">Đổi mật khẩu</a><br/>
                <a href="./logout.php">Đăng xuất</a></br>
                <a href="./index.php"> Đến danh mục sản phẩm </a>
            </div>
        <?php } ?>
                      
                    </div>
                </div>
                <div class="bottom_prod_box_big "></div>
            </div>
        </div>
    </div>
        <!-- noi dung ben phai -->
        <div class="right_content" >
            <!-- gio hang-->
            <div class="shopping_cart ">
                <div class="cart_title ">Giỏ hàng</div>
                <div class="cart_details ">
                    0 Sản phẩm<br />
                    <span class="border_cart "></span> Tổng: <span class="price ">0đ</span>
                </div>
                <div class="cart_icon ">
                    <a href="# " title="header=[Checkout] body=[&nbsp;] "><img src="images/shoppingcart.png " alt=" " title=" " width="48 " height="48 " border="0 " /></a>
                </div>
            </div>
            <!-- sach moi -->
            <div class="title_box ">Sách mới</div>
            <div class="border_box ">
                <div class="product_title "><a href="# ">Dù Thế Nào Cũng Phải Đi ( News )</a></div>
                <div class="product_image ">
                    <a href="# "><img src="images/11.jpg " alt="Sách " width="100% " height="180 " /></a>
                </div>
                <div class="product_price ">
                    <span class="reduce ">200.000đ</span>
                    <span class="price ">250.000đ</span>
                </div>
            </div>
            <!-- danh muc menu -->
            <div class="title_box2 ">Sách</div>
            <ul class="left_menu ">
                <li class="odd "><a href="# ">Kho sách giảm giá</a></li>
                <li class="even "><a href="# ">Sách bán chạy</a></li>
                <li class="odd "><a href="# ">Sách mới phát hành</a></li>
                <li class="even "><a href="# ">Sách sắp phát hành</a></li>
                <li class="odd "><a href="# ">Sách ngoại ngữ</a></li>
                <li class="even "><a href="# ">Sách kinh tế</a></li>
            </ul>
            <!-- Banner -->
            <div class="banner_adds ">
                <a href="# "><img src="images/bann1.jpg " alt="Banner " width="80% " /></a>
            </div>
            <!-- Lien hệ-->
            <div id="lienhe" style="width:200px;">
                <b style="font-size: 16px; color: red; "> Liên hệ với chúng tôi </b>
            </div>
            <!-- nut goi dien thoai có animation-->
            <div id="phonecall ">

                <div class="hotline-phone-ring-wrap ">
                    <div class="hotline-phone-ring ">
                        <div class="hotline-phone-ring-circle "></div>
                        <div class="hotline-phone-ring-circle-fill "></div>
                        <div class="hotline-phone-ring-img-circle ">
                            <a href="tel:0987654321 " class="pps-btn-img ">
                                <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png " alt="Gọi điện thoại " width="50 ">
                            </a>
                        </div>
                    </div>
                    <div class="hotline-bar ">
                        <a href="tel:0582842388 ">
                            <span class="text-hotline ">0582.842.388</span>
                        </a>
                    </div>
                </div>
            </div>
            <div id="Lienhefb" style="width: 250px; text-decoration: none;">
                <b style="color:blue; font-size: 13px; ">Facebook chúng tôi</b> </br>
                </br>
                <a style="color:blue; font-size: 13px;text-decoration: none; " href="https://www.facebook.com/profile.php?id=100011980785424 ">Nhấn vào đây để liên hệ với chúng tôi</a>
            </div>

        </div>
        <!-- CONTENT : END -->
        <div class="clr "></div>
        <!-- FOOTER : START -->
        <div class="footer ">
            <div class="left_footer ">
            </div>

            <div class="center_footer ">
                Thiết kế bởi Đức Anh <br />
                <a href="# "><img src="images/csscreme.jpg " alt="Image template " /></a><br />
                <img src="images/payment.gif " alt="Payment " />
            </div>
            <div class="right_footer ">
            </div>
        </div>
        <!-- FOOTER : END -->
    </div>
</body>

</html>
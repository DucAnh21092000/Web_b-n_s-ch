<?php session_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Web bán sách online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
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
            <?php
        include './connect_db.php';
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        $error = false;
        $success = false;
        if (isset($_GET['action'])) {

            function update_cart($add = false) {
                foreach ($_POST['quantity'] as $id => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else {
                        if ($add) {
                            $_SESSION["cart"][$id] += $quantity;
                        } else {
                            $_SESSION["cart"][$id] = $quantity;
                        }
                    }
                }
            }

            switch ($_GET['action']) {
                case "add":
                    update_cart(true);
                    header('Location: ./cart.php');
                    break;
                case "delete":
                    if (isset($_GET['id'])) {
                        unset($_SESSION["cart"][$_GET['id']]);
                    }
                    header('Location: ./cart.php');
                    break;
                case "submit":
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart();
                        header('Location: ./cart.php');
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        if (empty($_POST['name'])) {
                            $error = "Bạn chưa nhập tên của người nhận";
                        } elseif (empty($_POST['phone'])) {
                            $error = "Bạn chưa nhập số điện thoại người nhận";
                        } elseif (empty($_POST['address'])) {
                            $error = "Bạn chưa nhập địa chỉ người nhận";
                        } elseif (empty($_POST['quantity'])) {
                            $error = "Giỏ hàng rỗng";
                        }
                        if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                            $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                            $total = 0;
                            $orderProducts = array();
                            while ($row = mysqli_fetch_array($products)) {
                                $orderProducts[] = $row;
                                $total += $row['price'] * $_POST['quantity'][$row['id']];
                            }
                            $insertOrder = mysqli_query($con, "INSERT INTO `order` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['address'] . "', '" . $_POST['note'] . "', '" . $total . "', '" . time() . "', '" . time() . "');");
                            $orderID = $con->insert_id;
                            $insertString = "";
                            foreach ($orderProducts as $key => $product) {
                                $insertString .= "(NULL, '" . $orderID . "', '" . $product['id'] . "', '" . $_POST['quantity'][$product['id']] . "', '" . $product['price'] . "', '" . time() . "', '" . time() . "')";
                                if ($key != count($orderProducts) - 1) {
                                    $insertString .= ",";
                                }
                            }
                            $insertOrder = mysqli_query($con, "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES " . $insertString . ";");
                            $success = "Đặt hàng thành công";
                            unset($_SESSION['cart']);
                        }
                    }
                    break;
            }
        }
        if (!empty($_SESSION["cart"])) {
            $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
        }
//        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
//        $product = mysqli_fetch_assoc($result);
//        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
//        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
        ?>
        <div class="container">
            <?php if (!empty($error)) { ?> 
                <div id="notify-msg">
                    <?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
                </div>
            <?php } elseif (!empty($success)) { ?>
                <div id="notify-msg">
                    <?= $success ?>. <a href="index.php">Tiếp tục mua hàng</a>
                </div>
            <?php } else { ?>
                <a href="index.php">Trang chủ</a>
                <h1>Giỏ hàng</h1>
                <form id="cart-form" action="cart.php?action=submit" method="POST">
                    <table>
                       
                        <?php
                        if (!empty($products)) {
                            $total = 0;
                            $num = 1;
                            while ($row = mysqli_fetch_array($products)) {
                                ?>
                                <div style="display:flex-container;flex-direction:column-reverse;">
                                
                                    <div><b>STT :</b></div>
                                    <div class="product-number"><?= $num++; ?></div>
                                    <div><b>Tên sản phẩm :</b></div>
                                    <div class="product-name"><?= $row['name'] ?></div>
                                    <div><b>Hình ảnh sản phẩm :</b></div>
                                    <div class="product-img"><img src="<?= $row['image'] ?>" /></div>
                                    <div><b>Giá :</b></div>
                                    <div class="product-price"><?= number_format($row['price'], 0, ",", ".") ?></div>
                                    <div><b>Số lượng : </div>
                                    <div class="product-quantity"><input type="text" value="<?= $_SESSION["cart"][$row['id']] ?>" name="quantity[<?= $row['id'] ?>]" /></div>
                                    <div><b>Thành tiền : </b></div>
                                    <div class="total-money"><?= number_format($row['price'] * $_SESSION["cart"][$row['id']], 0, ",", ".") ?></div>
                                    <div class="product-delete"><a href="cart.php?action=delete&id=<?= $row['id'] ?>">Xóa</a></div>
                                </div>
                                <?php
                                $total += $row['price'] * $_SESSION["cart"][$row['id']];
                                $num++;
                            }
                            ?>
                            <tr id="row-total">
                            <td class="product-number">&nbsp;</td>
                                <td class="product-name">Tổng tiền</td>
                                <td class="product-img">&nbsp;</td>
                                <td class="product-price">&nbsp;</td>
                                <td class="product-quantity">&nbsp;</td>
                                <td class="total-money"><?= number_format($total, 0, ",", ".") ?></td>
                                <td class="product-delete">Xóa</td> 
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <div id="form-button">
                        <input type="submit" name="update_click" value="Cập nhật" />
                    </div>
                    <hr>
                    <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
                    <div><label>Điện thoại: </label><input type="text" value="" name="phone" /></div>
                    <div><label>Địa chỉ: </label><input type="text" value="" name="address" /></div>
                    <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea></div>
                    <input type="submit" name="order_click" value="Đặt hàng" />
                </form>
            <?php } ?>
            </div>
            </div>
        </div>
            <!-- noi dung ben phai -->
            <div class="right_content">
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
                <div id="lienhe">
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
                    <b style="color:blue; font-size: 13px;>Facebook chúng tôi</b> </br> </br>
                          <a href="https://www.facebook.com/profile.php?id=100011980785424" style=" color:blue; font-size: 13px;" >Nhấn vào đây để liên hệ với chúng tôi</a>
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


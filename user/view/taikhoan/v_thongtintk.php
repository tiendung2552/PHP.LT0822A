<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/css/fontawesome.css">
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/js/all.min.js">
    <link rel="stylesheet" href="./w3_band/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/taikhoan/thongtintk.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/repon_trangchu.css'>
</head>
<body>
<div id="headerr">
		<div class="logo">
        <a href="?controller=trangchu">
			<img src="images/logo/logo3.jpg">
            </a>
		</div>
        <div class="menu2">
        	<li><a href="?controller=spnu">Nữ</a>
        		
        	</li>
        	<li><a href="?controller=spnam">Nam</a>
        		
        	</li>
        	<li><a href="?controller=sptreem">Trẻ Em</a>
        		
        	</li>
        	<li><a href="">Sale</a>
        		
        	</li>
        	<li><a href="">Bộ Sưu Tập</a>
        		
        	</li>
        	<li><a href="">Thông Tin</a>
        		
        	</li>
        	<li><a href="">Tin Tức</a></li>
        </div>
        <div class="others">
        	<li><input placeholder="Tìm kiếm" type="text"> <i class="fas fa-search"></i></li>
        	<li> <a class="fa fa-paw" href=""></a>
				<div class="sub-action" style="display: block;">
                    <div class="top-action">
                        <a class="icon" href=""><h3>Trợ giúp</h3></a>
                    </div>
                    <ul>
                        <li><a href=""><i class="icon-ic_avatar-1"></i>Hotline</a></li>
                        <li><a href=""><i class="icon-ic_reload"></i>Live Chat</a></li>
                        <li><a href=""><i class="icon-ic_placeholder"></i>Messenger</a></li>
                        <li><a href=""><i class="icon-ic_headphones"></i>Email</a></li>
                        <li><a href=""><i class="icon-ic_hand"></i>Tra cứu đơn hàng</a></li>
                    </ul>
                </div>
			</li>
        	<li> <a class="fa fa-user" href=""></a>
				<div class="sub-action" style="display: block;">
                    <div class="top-action">
                        <a class="icon" href=""><h3>Tài khoản của tôi</h3></a>
                    </div>
                    <ul>
                        <li><a href="?controller=tttk"><i class="icon-ic_avatar-1"></i>Thông tin tài khoản</a></li>
                        <li><a href="?controller=quanlidh"><i class="icon-ic_reload"></i>Quản lý đơn hàng</a></li>
                        <li><a href="?controller=sodiachi"><i class="icon-ic_placeholder"></i>Sổ địa chỉ</a></li>
                        <li><a href=""><i class="icon-ic_headphones"></i>Hỏi đáp sản phẩm</a></li>
                        <li><a href=""><i class="icon-ic_hand"></i>Hỗ trợ - IVY</a></li>
                        <li><a href="?controller=logout"><i class="icon-logout"></i>Đăng xuất</a></li>
                    </ul>
                </div>
			</li>
            <?php 
            $totalQuantity = 0;
                if (isset($_SESSION['cartt'])) {
                    foreach ($_SESSION['cartt'] as $key => $value) {
                        if (isset($value['tonkho']) && is_numeric($value['tonkho'])) {
                            $totalQuantity += $value['tonkho'];
                        }
                    }
                }
                ?>
        	<li> <a class="fa fa-shopping-bag" href="?controller=giohang"><span><?php echo $totalQuantity ?></span></a></li>
        </div>
    </div>
	<section id="headerr-mb">
		<div class="logo">
			<img src="images/logo/logo3.jpg">
		</div>
        <div class="others">
        	
        	<li> <a class="fa fa-paw" href=""></a>
			<div class="sub-action" style="display: block;">
                    <div class="top-action">
                        <a class="icon" href=""><h3>Trợ giúp</h3></a>
                    </div>
                    <ul>
                        <li><a href=""><i class="icon-ic_avatar-1"></i>Hotline</a></li>
                        <li><a href=""><i class="icon-ic_reload"></i>Live Chat</a></li>
                        <li><a href=""><i class="icon-ic_placeholder"></i>Messenger</a></li>
                        <li><a href=""><i class="icon-ic_headphones"></i>Email</a></li>
                        <li><a href=""><i class="icon-ic_hand"></i>Tra cứu đơn hàng</a></li>
                    </ul>
            </div>
			</li>
        	<li> <a class="fa fa-user" href=""></a>
				<div class="sub-action" style="display: block;">
                    <div class="top-action">
                        <a class="icon" href=""><h3>Tài khoản của tôi</h3></a>
                    </div>
                    <ul>
                        <li><a href=""><i class="icon-ic_avatar-1"></i>Thông tin tài khoản</a></li>
                        <li><a href=""><i class="icon-ic_reload"></i>Quản lý đơn hàng</a></li>
                        <li><a href=""><i class="icon-ic_placeholder"></i>Sổ địa chỉ</a></li>
                        <li><a href=""><i class="icon-ic_headphones"></i>Hỏi đáp sản phẩm</a></li>
                        <li><a href=""><i class="icon-ic_hand"></i>Hỗ trợ - IVY</a></li>
                        <li><a href="?controller=logout"><i class="icon-logout"></i>Đăng xuất</a></li>
                    </ul>
                </div>
			</li>
            <?php 
        	$totalQuantity = 0;
                if (isset($_SESSION['cartt'])) {
                    foreach ($_SESSION['cartt'] as $key => $value) {
                        if (isset($value['tonkho']) && is_numeric($value['tonkho'])) {
                            $totalQuantity += $value['tonkho'];
                        }
                    }
                }
                ?>
        	<li> <a class="fa fa-shopping-bag" href="?controller=giohang"><span><?php echo $totalQuantity ?></span></a></li>
        </div>
        <div class="menu2">
        	<li><a href="">Nữ</a>
        		
        	</li>
        	<li><a href="">Nam</a>
        		
        	</li>
        	<li><a href="">Trẻ Em</a>
        		
        	</li>
        	<li><a href="">Sale</a>
        	
        	</li>
        	<li><a href="">Thông Tin</a>
        		
        	</li>
        	<li class="menu1"><a href="">Tin Tức</a>
			
			</li>
        </div>
     
    </i></div>
    </section>
    <main class="pc">
        <div class="head">
            <span>
                <p>Trang chủ -  Tài khoản của tôi</p>
            </span>
        </div>
        <section class="bodyy">
        <div class="bars"><i class="fa-solid fa-bars" onclick="bars()"></i></div>
        <DIV class="thanhquanli" id="bee">
            <nav class="menu">
                <div class="menu-toggle" >
                    <div class="name">
                        <i class="fa fa-user"></i>
                        <?php if (isset($_SESSION['ss_user'])) { ?>
                            <?php echo $_SESSION['ss_user'] ?>
                       <?php } ?>
                   </div>
                   <div class="grap">
                        <ul>
                            <li><a href="?controller=tttk">Thông tin tài khoản</a></li>
                            <li><a href="?controller=quanlidh">Quản lý đơn hàng</a></li>
                            <li><a href="?controller=sodiachi">Số địa chỉ</a></li>
                            <li><a href="">Hỏi đáp sản phẩm</a></li>
                            <li><a href="">Hỗ trợ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        
        </DIV>
        
        <DIV class="taikhoancuatoi">
        <form action="" method="post">
            <label for="" class="name"><h4 style="font-weight: bold;">TÀI KHOẢN CỦA TÔI</h4></label>
            <div class="right">
                <div class="bang1">
                <table style="width:100%;border: none;">
                    <tr class="b1">
                        <td> <label for="">Họ tên </label></td>
                        <td ><input class="input_text" type="text" class="form-control" class="ip" name="user" value="<?php echo $_SESSION['ss_user'] ?>"></td>
                    </tr>
                    <tr class="b1">
                        <td><label for="">Số điện thoại</label> </td>
                        <td ><input class="input_text" type="text" class="form-control" class="ip" name="sdt" value="<?php echo $_SESSION['ss_sdt'] ?>"></td>

                    </tr>
                    <tr class="b1">
                        <td><label for="">Email: </label></td>
                        <td ><input class="input_text" type="email" class="form-control" class="ip" name="diachi" value="<?php echo $_SESSION['ss_email'] ?>"></td>

                    </tr>
                    <tr class="b1">
                        <td><label for="">Giới tính:</label></td>
                        <td>
                        <span>
                            <span><label for=""><input type="radio" name="optradio" id="" value="Nam" class="gt">
                            Nam</label></span>
                           
                            <span><label for=""><input type="radio" name="optradio" id=""  value="Nữ" class="gt">
                            Nữ</label></span>
                            
                            <span><label for=""> <input type="radio" name="optradio" id="" value="Khác" class="gt">
                            Khác</label></span> 
                        </span>
                        </td>

                    </tr>

                    <tr>
                        <td colspan="2" class="nut"><button class="btn btn-dark cn" name="btn_upd">CẬP NHẬT</button>
                        <button class="dmk"> ĐỔI MẬT KHẨU</button></td> 
                    </tr>
                </table>
                </div>
                <div class="bang1-mb">
                    <ul>
                        <li>
                            <p>Họ tên</p>
                            <input class="input_text" type="text" class="form-control" class="ip" >
                        </li>
                        <li>
                            <p>Số điện thoại</p>
                            <td ><input class="input_text" type="text" class="form-control" class="ip" ></td>
                        </li>
                        <li>
                            <p>Email</p>
                            <td ><input class="input_text" type="email" class="form-control" class="ip" ></td>
                        </li>
                        
                      <li>
                        <button class="btn btn-dark cn" name="btn_upd">CẬP NHẬT</button>
                        <button class="dmk">ĐỔI MẬT KHẨU</button></td> 
                      </li>
                    </ul>
                    </form>
                </div>
                
                <div class="bang2">
                    <table class="b1" style="width: 100%; height: 100%;">
                        
                        <tr>
                            <th class="b2">Điểm chiết khấu</th>
                            <td class="b2">0</td>
                        </tr>
                        <tr>
                            <th class="b2">Chiết khấu</th>
                            <td class="b2">0%</td>
                        </tr>
                        <tr>
                            <th class="b2">Hạn thẻ</th>
                            <td class="b2">01/08/2024 </td>
                        </tr>
                       
                    </table>
                </div>
                
            </div>
        
    </section>
</main>
    
    <script>
        function bars() {
          var grap = document.getElementById("bee");
          if (grap.style.display == "none") {
            grap.style.display = "block";
          } else {
            grap.style.display = "none";
          }
        }
        </script>
</body>
</html>
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
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/taikhoan/quanlidh.css'>
    
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
        <div class="menu">
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
    <main>
        <div class="head">
            <span>
                <p>Trang chủ -  đơn hàng của tôi</p>
            </span>
        </div>
        <div class="bars"><i class="fa-solid fa-bars" onclick="bars()"></i></div>
        <DIV class="thanhquanli-mb" id="bee">
            <nav class="menu">
                <div class="menu-toggle" >
                    <div class="name"><i class="fa fa-user"></i>--//-username-//--
                   
                   </button></div>
                   <div class="grap">
                        <ul>
                            <li><a href="?controller = tttk">Thông tin tài khoản</a></li>
                            <li><a href="?controller = quanlidh">Quản lý đơn hàng</a></li>
                            <li><a href="?controller=sodiachi">Số địa chỉ</a></li>
                            <li><a href="hdsp.html">Hỏi đáp sản phẩm</a></li>
                            <li><a href="ht.html">Hỗ trợ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        
        </DIV>
        <section class="bodyy">
            <DIV class="thanhquanli" id="bee">
                <nav class="menu">
                    <div class="menu-toggle" >
                        <div class="name"><i class="fa fa-user"></i>
                        <?php if (isset($_SESSION['ss_user'])) { ?>
                            <?php echo $_SESSION['ss_user'] ?>
                       <?php } ?>
                       </button></div>
                       <div class="grap">
                            <ul>
                                <li><a href="?controller=tttk">Thông tin tài khoản</a></li>
                                <li><a href="?controller=quanlidh">Quản lý đơn hàng</a></li>
                                <li><a href="?controller=sodiachi">Số địa chỉ</a></li>
                                <li><a href="?controller=quanlidh">Hỏi đáp sản phẩm</a></li>
                                <li><a href="?controller=quanlidh">Hỗ trợ</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            
            </DIV>
        <DIV class="quanlidh">
            <Div>
                <div class="name"><label for="" style="font-weight: bold; margin-bottom: 2em; font-size: 18px; "><h4 style="font-weight: bold;">CHI TIẾT ĐƠN HÀNG</h4></label></div>
               
            </Div><br>
            <form action="" method="get">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">TÊN SẢN PHẨM</th>
                        <th class="text-center">ẢNH</th>
                        <th class="text-center">SỐ LƯỢNG</th>
                        <th class="text-center">ĐƠN GIÁ</th>
                        <th class="text-center">THÀNH TIỀN</th>
                        <th class="text-center">NGÀY NHẬN</th>
                       
                    </tr>
                </thead>
            
                <tbody>
               
                <?php foreach ($ct_donhang as $key => $value) { ?>
                    <tr>
                        
                        <td><?php echo $value['tensanpham'] ?></td>
                        <td><img src="../images/sanpham/<?php echo $value['img'] ?>" width="100px" alt=""></td>
                        <td><?php echo $value['soluongsp'] ?></td>
                        <td><?php echo $value['gia'] ?></td>
                        <td><?php echo $value['amount'] ?></td>
                        <td><?php echo $value['ngaynhan'] ?></td>
            
                    </tr>
                <?php } ?>
                    </tbody>
                
            </table>
            </form>
        </DIV>
    </main>
    
    <script>
        function bars() {
          var grap = document.getElementById("bee");
          if (grap.style.display === "none") {
            grap.style.display = "block";
          } else {
            grap.style.display = "none";
          }
        }
        </script>
</body>
</html>
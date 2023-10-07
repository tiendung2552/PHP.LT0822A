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
                <div class="name"><label for="" style="font-weight: bold; margin-bottom: 2em; "><h4 style="font-weight: bold;">QUẢN LÝ ĐƠN HÀNG</h4></label></div>
                <div class="ttdh"><label for="ttdh">Trạng thái đơn hàng:</label><br>
                <select  class="form-control" style="height: 3em;" name="" id="ttdh">
                    <option value="">Tất cả </option>
                    <option value="">Đặt hàng thành công</option>
                    <option value="">Đang xử lí</option>
                    <option value="">Chờ giao vận</option>
                    <option value="">Đã gửi</option>
                    <option value="">Đã nhận hàng</option>
                    <option value="">Đã hủy</option>
                    <option value="">Trả hàng</option>
    
                </select></div>
            </Div><br>
            <table>
                <thead>
                    <tr>
                        <th class="text-center">MÃ ĐƠN HÀNG</th>
                        <th class="text-center">TÊN KHÁCH HÀNG</th>
                        <th class="text-center">SỐ ĐIỆN THOẠI</th>
                        <th class="text-center">ĐỊA CHỈ</th>
                        <th class="text-center">TỔNG</th>
                        
                        <th colspan=3 class="text-center">TRẠNG THÁI</th>
                    </tr>
                </thead>
            
                <tbody>
               
                <?php foreach ($donhang as $key => $value) { ?>
                    <tr>
                        
                        <td><?php echo $value['id_donhang'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['sdt'] ?></td>
                        <td><?php echo $value['diachi'] ?></td>        
                        <td><?php echo $value['tong'] ?></td>         
                             
                        <td><?php echo $value['tinhtrang'] ?></td>   
                        <td><a onclick="return confirm('Bạn muốn hủy đơn này sao?');" href="?controller=xoadh&id=<?php echo $value['id_donhang'] ?>">Hủy đơn</a></td>
                        <td><a href="?controller=chitietdh&id=<?php echo $value['id_donhang'] ?>">Chi tiết</a></td>
            
                    </tr>
                <?php } ?>
                    </tbody>
                
            </table>
    
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
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sản phẩm nữ</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/center.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/conter.css'>
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/css/fontawesome.css">
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/js/all.min.js">
    <link rel="stylesheet" href="./w3_band/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/js/conter.js'>
</head>
<body>
	<!----------------------------------- headerr ------------------------------------>
	<div id="headerr">
		<div class="logo">
        <a href="?controller=trangchu">
			<img src="images/logo/logo3.jpg">
            </a>
		</div>
        <div class="menu">
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

    <section class="cartegory">
		<form action=""> 
			<div class="container">
				<div class="cartegory-top row">
					<p>Trang Chủ</p> <span>&#10230; </span> <p>Nữ</p> <span>&#10230; </span> <p>Hàng nữ mới về</p>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="cartegory-left">
						<ul>
							<li class="cartegory-left-li"><a href="#">Nữ</a>
                                <ul>
									<li><a href="">Hàng Nữ Mới Về</a></li>
									<li><a href="">Áo sơ mi</a></li>
									<li><a href="">Áo kiểu</a></li>
									<li><a href="">Quần Jean Nữ</a></li>
								</ul>
							</li>
							<li class="cartegory-left-li"><a href="#">Nam</a>
                                <ul>
									<li><a href="">Hàng Nam Mới Về</a></li>
									<li><a href="">Áo sơ mi</a></li>
									<li><a href="">Áo polo</a></li>
									<li><a href="">Quần Jean Nam</a></li>
								</ul>
							</li>
							<li class="cartegory-left-li"><a href="#">Trẻ Em</a>
                                <ul>
									<li><a href="">Hàng Trẻ Em Mới Về</a></li>
									<li><a href="">Áo sơ mi</a></li>
									<li><a href="">Áo polo</a></li>
									<li><a href="">Quần Sooc Trẻ Em</a></li>
								</ul>
                            </li>
							<li class="cartegory-left-li"><a href="#">Bộ Sưu Tập</a></li>
							<li class="cartegory-left-li"><a href="#">Siêu Sale Từ 23H-1H</a></li>
						</ul>
					</div>
					<div class="cartegory-right row">
						<div class="cartegory-right-top-item">
							<p>Hàng Nữ Mới Về</p>
						</div>
						<div class="cartegory-right-top-item">
							<button><span>Bộ Lọc</span><i class="fa-solid fa-sort-down"></i></button>
						</div>
						<div class="cartegory-right-top-item">
							<select name="" id="">
								<option value="">Sắp xếp</option>
								<option value="">Giá cao đến thấp</option>
								<option value="">Giá thấp đến cao</option>
							</select>
						</div>
						<!-- ---- sp ---- -->
                        <div class="cartegory-right-content-tille">
                            <div class="cartegory-right-content row">
                                <div class="cartegory-right-content-items">
                                    <a class="img" href="#"><img src="images/damnu/aodambe.jpg"></a>
                                    <a class="img-1" href="#"><img src="images/damnu/aodamluaxanh.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="" class="color-picker" data-id="10001">
                                                    <img src="images/color/001.png" alt="001" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="color-picker" data-id="10002">
                                                    <img src="images/color/016.png" alt="016" class="lazyy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="color-picker" data-id="10003">
                                                    <img src="images/color/026.png" alt="026" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ĐẦM PEPLUM DẬP LY</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp2 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/aonu/aosomi/aosomi.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/050.png" alt="050" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>SƠ MI HỌA TIẾT REN</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp3 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/damnu/aodamxoe.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/020.png" alt="020" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ĐẦM PEPLUM DẬP LY</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp4 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/aonu/aothun/aothunxanhtao.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/007.png" alt="007" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ÁO THUN FLOWERS</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp5 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/quannu/quanbaggy/quanbaggybe.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/049.png" alt="049" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>QUẦN BAGGY PHỐI TÚI LẬT</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp6 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/aonu/aosomi/aosomicroptop.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ÁO SƠ MI CROPTOP KIỂU XOẮN EO</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp7 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/damnu/aodamlua.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/050.png" alt="050" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ALMIRA DRESS - ĐẦM LỤA 2 LỚP</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp8 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/quannu/quanjeans/quanjeansbaggy.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/049.png" alt="049" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>QUẦN JEANS BAGGY</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">763.00<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">1.090.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp9 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/aonu/aokieu/aopeplumhong.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/013.png" alt="013" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ÁO PEPLUM XẺ TÀ</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">675.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">1.350.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp10 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/aonu/aosomi/aosomitencelbe.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/014.png" alt="014" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/016.png" alt="016" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ÁO SƠ MI TENCEL DÁNG OVERSIZE</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp11 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/aonu/aosomi/aosomixoaneo.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/014.png" alt="014" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/016.png" alt="016" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ÁO SƠ MI TENCEL DÁNG OVERSIZE</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                                <!-- sp12 -->
                                <div class="cartegory-right-content-items">
                                    <a href=""><img src="images/aonu/aokieu/aoluacamdo.jpg"></a>
                                    <div class="list-color">
                                        <ul class="row">
                                            <li class="checked">
                                                <a href="">
                                                    <img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/014.png" alt="014" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/color/016.png" alt="016" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cartegory-right-content-items-item">
                                        <a href=""><span><i class="fa-regular fa-heart"></i></span></a>
                                        <h1>ÁO SƠ MI TENCEL DÁNG OVERSIZE</h1> <br>
                                        <p style=" font-size: 13px; font-weight: bold; ">1.295.000<sup>đ</sup></p> <p style=" font-size: 11px;   text-decoration: line-through;">2.590.000<sup>đ</sup></p>
                                        <button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    </div>
                                </div>
                            </div>

                            <div class="cartegory-right-bottom row">
                                <div class="cartegory-right-bottom-items">
                                    <li>Hiện thị 1 <span>|</span> 12 Sản phẩm</li>
                                </div>
                                <div class="cartegory-right-bottom-items">
                                    <li><span>&#171; 
                                        </span> <button class="btn">1</button> <button class="typn">2</button> <span>&#187;</span>
                                    </li>
                                </div>
						    </div>
                        </div>
					</div>
				</div>
			</div>
		</form>
    </section>

    <!-------------------- app-container ----------------------------->
	<!--Footer-->
	<section class="footer">
    <div class="site-bottom">
        <div class="container">
            <div class="main-footer d-flex">
                <div class="left-footer">
                    <div class="top-left">
                        <div class="logo-footer">
                            <a href="">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/logo-footer.png" alt="logo-footer">
                            </a>
                        </div>
                        <a href="" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
                            <img src ="https://images.dmca.com/Badges/dmca_protected_16_120.png?ID=0cfdeac4-6e7f-4fca-941f-57a0a0962777" alt="DMCA.com Protection Status" />
                        </a>
                        <div class="logo-conthuong">
                            <a href="" target="_blank" >
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/img-congthuong.png" alt="img-congthuong">
                            </a>
                        </div>
                    </div>
                    <div class="content-left-ft content-ft">
                        <div class="info-left-ft">
                            <p>C&ocirc;ng ty Cổ phần Dự Kim với số đăng k&yacute; kinh doanh: 0105777650</p>						<p><strong>Địa chỉ đăng ký: </strong>Tổ d&acirc;n phố Th&aacute;p, P.Đại Mỗ, Q.Nam Từ Li&ecirc;m, TP.H&agrave; Nội, Việt Nam</p>						<p><strong>Số điện thoại: </strong>0243 205 2222/ 090 589 8683</p>						<p><strong>Email: </strong> cskh@ivy.com.vn</p>					</div>
                        <ul class="list-social">
                            <li>
                                <a href="" target="_blank">
                                    <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_fb.svg" alt="ic_fb">
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_gg.svg" alt="ic_gg">
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_instagram.svg" alt="ic_instagram" style="height: 30px;">
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
                                    <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_pinterest.svg" alt="ic_pinterest" style="height: 27px">
                                </a>
                            </li>
                            <li>
                                <a href="" target="_blank">
									<img src="https://pubcdn.ivymoda.com/ivy2/images/ic_ytb.svg" alt="ic_ytb">
                                </a>
                            </li>
                        </ul>
                        <div class="hotline">
                            <a href="tel:02466623434">Hotline: 0246 662 3434</a>
                        </div>
                    </div>
                </div>
                <div class="center-footer d-flex">
                    <div class="left-center-ft item-center-ft">
                        <p class="title-footer">Giới thiệu</p>
                        <ul>
                            <li>
                                <a href="">Về IVY moda</a>
                            </li>
                            <li>
                                <a href="" target="_blank" >Tuyển dụng</a>
                            </li>
                            <li>
                                <a href="">Hệ thống cửa hàng</a>
                            </li>
                        </ul>
                    </div>
                    <div class="main-center-ft item-center-ft">
                        <p class="title-footer">Dịch vụ khách hàng</p>
                        <ul>
                            <li>
                                <a href="">Chính sách điều khoản</a>
                            </li>
                            <li>
                                <a href="">Hướng dẫn mua hàng</a>
                            </li>
                            <li>
                                <a href="">Chính sách thanh toán</a>
                            </li>
                            <li>
                                <a href="">Chính sách đổi trả</a>
                            </li>
                            <li>
                                <a href="">Chính sách bảo hành</a>
                            </li>
                            <li>
                                <a href="">Chính sách giao nhận vận chuyển</a>
                            </li>
                            <li>
                                <a href="">Chính sách thẻ thành viên</a>
                            </li>
                            <li>
                                <a href="">Hệ thống cửa hàng</a>
                            </li>
                            <li>
                                <a href="">Q&A</a>
                            </li>
                        </ul>
                    </div>
                    <div class="right-center-ft item-center-ft">
                        <p class="title-footer">Liên hệ</p>
                        <ul>
                            <li>
                                <a href="tel:02466623434">Hotline</a>
                            </li>
                            <li>
                                <a href="">Email</a>
                            </li>
                            	<li>
									<a href="javascript:openCsChatBox();">Live Chat</a>
                            	</li>
                            <li>
                                <a href="" target="_blank">Messenger</a>
                            </li>
                            <li>
                                <a href="">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right-footer">
                    <div class="register-form">
                        <p class="title-footer">Nhận thông tin các chương trình của IVY moda</p>
                        <form id="frm_subscribe">
                            <input id="email_subscribe" type="text" name="email" placeholder="Nhập địa chỉ email" required="required">
                            <div class="btn-submit">
                                <input id="btn-submit" class="form-submit" value="Đăng ký" type="submit" />
                            </div>
                        </form>
                        <div id="subscribe_error"></div>
                    </div>
                    <div class="info-right-ft">
                        <p class="title-footer">Download App</p>
                        <ul>
                            <li>
                                <a id="app_ios" href="" class="link-white" target="_blank" title="Tải App IVYmoda trên App Store"> <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" class="img-fluid" alt=""> </a>
                            </li>
                            <li>
                                <a id="app_android" href="" class="link-white" target="_blank" title="Tải App IVYmoda trên Google Play"> <img src="https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" class="img-fluid" alt=""> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-bottom site-bottom-mb">
        <div class="container">
            <div class="main-footer">
                <div class="info-right-ft">
                    <p class="title-footer">Download App</p>
                    <ul>
                        <li>
                            <a href="" class="link-white" target="_blank" title="Tải App IVYmoda trên App Store"> <img src="https://pubcdn.ivymoda.com/ivy2/images/appstore.png" width="140" class="img-fluid" alt=""> </a>
                        </li>
                        <li>
                            <a href="" class="link-white" target="_blank" title="Tải App IVYmoda trên Google Play"> <img src="https://pubcdn.ivymoda.com/ivy2/images/googleplay.png" width="140" class="img-fluid" alt=""> </a>
                        </li>
                    </ul>
                </div>
                <div class="center-footer">
					<div class="left-center-ft item-center-ft item-ft-mb active">
                        <p class="title-footer">Giới thiệu 
                            <span onclick="showul()">
                                <svg id="chevron" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"/></svg>
                            </span>
                        </p>
                        
                        <ul style="display: block;" id="show-ul">
                                
                            <li> <a href=""> Về IVY moda </a> </li>
                            <li> <a href=""> Tuyển dụng </a> </li>
                            <li> <a href=""> Hệ thống cửa hàng </a> </li>
                        </ul>
                    </div>
                    <div class="main-center-ft item-center-ft item-ft-mb">
                        <p class="title-footer">Dịch vụ khách hàng
                            <span onclick="showul1()">
                                <svg id="chevron1" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                                </svg>
                            </span>
                        </p>
                        <ul style="display: none;" id="show-ul1">
                            <li> <a href="">Chính sách điều khoản</a> </li>
                            <li> <a href="">Hướng dẫn mua hàng</a> </li>
                            <li> <a href="">Chính sách thanh toán</a> </li>
                            <li> <a href="">Chính sách đổi trả</a> </li>
                            <li> <a href="">Chính sách bảo hành</a> </li>
                            <li> <a href="">Chính sách giao nhận vận chuyển</a> </li>
                            <li> <a href="">Chính sách thẻ thành viên</a> </li>
                            <li> <a href="">Hệ thống cửa hàng</a> </li>
                            <li> <a href="">Q&A</a> </li>
                        </ul>
                    </div>
                    <div class="right-center-ft item-center-ft item-ft-mb">
                        <p class="title-footer">Liên hệ
                            <span onclick="showul2()">
                                <svg id="chevron2" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                                    <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                                </svg>
							</span>
                        </p>
                        <ul id="show-ul2">
                            <li>
                                <a href="tel:02466623434">Hotline</a>
                            </li>
                            <li>
                                <a href="">Email</a>
                            </li>
                            <li>
                                <a href="">Live Chat</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="right-footer">
                    <div class="register-form">
                        <p class="title-footer">Nhận thông tin các chương trình của IVY moda</p>
                        <form id="frm_subscribe-mb">
                            <input id="email_subscribe-mb" type="text" name="email" placeholder="Nhập địa chỉ email của bạn" required="required">
                            <div class="btn-submit">
                                <input type="submit" id="btn-submit-mb" class="form-submit" value="Đăng ký">
                            </div>
                        </form>
                        <div id="subscribe_mobile_error"></div>
                    </div>
                </div>
                <div class="socials-ft">
                    <ul class="list-social">
                        <li>
                            <a href="" target="_blank">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_fb.svg" alt="ic_fb">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_gg.svg" alt="ic_gg">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_instagram.svg" alt="ic_instagram" style="height: 30px;">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_pinterest.svg" alt="ic_pinterest" style="height: 27px">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/ic_ytb.svg" alt="ic_ytb">
                            </a>
                        </li>
                    </ul>
                    <div class="hotline">
                        <a href="tel:02466623434">Hot online : 0246 662 3434</a>
                    </div>
                </div>
                <div class="left-footer">
					<div class="top-left">
                        <div class="logo-footer">
                            <a href="#">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/logo.png" alt="logo-footer">
                            </a>
                        </div>
                        <a href="" target="_blank" title="DMCA.com Protection Status" class="dmca-badge">
                            <img src ="https://images.dmca.com/Badges/dmca_protected_16_120.png?ID=0cfdeac4-6e7f-4fca-941f-57a0a0962777" alt="DMCA.com Protection Status" />
                        </a>
                        <div class="logo-conthuong">
                            <a href="">
                                <img src="https://pubcdn.ivymoda.com/ivy2/images/img-congthuong.png" alt="img-congthuong">
                            </a>
                        </div>
                    </div>
                    <div class="content-left-ft content-ft">
                        <div class="info-left-ft">
                            <p>C&ocirc;ng ty Cổ phần Dự Kim với số đăng k&yacute; kinh doanh: 0105777650</p>						<p><strong>Địa chỉ đăng ký: </strong>Tổ d&acirc;n phố Th&aacute;p, P.Đại Mỗ, Q.Nam Từ Li&ecirc;m, TP.H&agrave; Nội, Việt Nam</p>						<p><strong>Số điện thoại: </strong>0243 205 2222/ 090 589 8683</p>						<p><strong>Email: </strong>cskh@ivy.com.vn</p>					</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <footer id="footer" class="site-footer">
        <div class="container">
            <div class="coppy-right">©IVYmoda All rights reserved</div>
        </div>
        <!-- .container -->
    </footer>
</body>
	<script src="./w3_band/assets/js/center.js"></script>
    <script src="./w3_band/assets/js/color.js"></script>
</html>
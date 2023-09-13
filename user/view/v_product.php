<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>2002 Shop</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/conter.css'>
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/center.css'>
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/repon_trangchu.css'>
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/css/fontawesome.css">
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/js/all.min.js">
    <link rel="stylesheet" href="./w3_band/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/js/conter.js'>
	<link rel="stylesheet" type="text/css" href="./w3_band/assets/bootstrap-4.0.0-dist/css/bootstrap-grid.min.css">

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
                        <li><a href="?controller=stttk"><i class="icon-ic_avatar-1"></i>Thông tin tài khoản</a></li>
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

    <!-------------------------- product ---------------------------->
   	<section class="product">

   	  	<form action="" method="post" >
   	 		<div class="container">
	   	 		<div class="product-top row">
	                <p>Trang Chủ</p> <span>&#10230; </span> <p>Nữ</p> <span>&#10230; </span> <p>Hàng nữ mới về</p> <span>&#10230; </span> <p>ELLIE DRESS - ĐẦM REN SERONA</p>
	   	 		</div>
				<?php foreach ($product as $key => $value) { ?>
   	 			<div class="product-content row">
	   	 			<div class="product-content-left row">
	   	 				<div class="product-content-left-big-img">
	   	 					<img src="../images/sanpham/<?php echo $value['img']?>" alt="">
	   	 				</div>

	   	 			</div>

   	 				<div class="product-content-right">
	   	 				<!-- /// product-name //// -->
	   	 				<div class="product-content-right-product-name">
	   	 					<h1><?php echo $value['tensanpham'] ?></h1>
	   	 					<p> SKU: 45S2779 </p>
	   	 				</div>

	   	 				<!-- //// product-giá //// -->
	   	 				<div class="product-content-right-product-price">
	   	 					<p><?php echo $value['gia'] ?><sup>đ</sup></p>
	   	 				</div>

	   	 				<!-- /// product-color /// -->
	   	 				<!-- <div class="product-content-right-product-color">
	   	 					<p><span style="font-weight: bold;">Màu sắc</span>: Đen <span style="color: red;"> *</span></p>
	   	 					<div class="product-content-right-product-color-img">
	   	 						<img src="images/color/049.png" alt="049" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy">
	   	 					</div>
	   	 				</div> -->

	   	 				<!-- //// product-size //// -->
	   	 				<div class="product-content-right-product-size">
	   	 					<p style="font-weight: bold;">Size</p>
	   	 					<div class="size" name="size" >
	   	 						<span><input type="radio" name="size" value="M"></span><span id="cell">M :<?php echo $value['Id_size'] ?></span>
	   	 						<span><input type="radio" name="size" value="L"></span><span id="cell">L :<?php echo $value['Id_size'] ?></span>
	   	 						<span><input type="radio" name="size" value="XL"></span><span id="cell">XL :<?php echo $value['Id_size'] ?></span>
	   	 						<span><input type="radio" name="size" value="XXL"></span><span id="cell">XXL :<?php echo $value['Id_size']?></span>
	   	 					</div>
	   	 				</div>

	   	 				<!-- /// product-quantity /// -->
	   	 				<div class="quantity">
	   	 					<p style="font-weight: bold;">Số Lượng:</p>
								<input type="number" id="" name="sl" value="1" >
	   	 				</div>
	   	 				
	   	 				<p style="color: red;">Vui lòng chọn size</p>

	   	 				<!-- /// product-button /// -->
	   	 				<div class="product-content-right-product-button">
							<!-- <input type="submit" name="" value="Thêm">
							<button type="submit">THÊM VÀO GIỎ HÀNG</button>
							<button type="submit"><p>MUA HÀNG</p></button> -->
							<a href="?controller=addcart&id=<?php echo $value['id_sanpham'] ?>"><p>  THÊM VÀO GIỎ HÀNG</p></a>
	   	 					<a href="?controller=giohang"> <p><i class="fas fa-shopping-cart"></i> MUA HÀNG</p></a>
	   	 					<button> <i class="fa-regular fa-heart"></i> </button>
	   	 				</div>
						
	   	 				<!-- ///  product-icons /// -->
	   	 				<div class="product-content-right-product-icon">
	   	 					<div class="product-content-right-product-icon-item">
	   	 						<a href=""><i class="fas fa-phone-alt"></i> Hotline</a>
	   	 					</div>
	   	 						<!-- ******** -->
	   	 					<div class="product-content-right-product-icon-item">
	   	 						<a href=""><i class="far fa-comments"></i> Chat</a>
	   	 					</div>
	   	 						<!-- ******** -->
	   	 					<div class="product-content-right-product-icon-item">
								<a href=""><i class="far fa-envelope"></i> Mail</a>
	   	 					</div>
	   	 				</div>

	   	 				<!-- ///  product-QR /// -->
	   	 				<div class="product-content-right-product-QR">
	   	 					<img src="images/logo/maqr.jpg">
	   	 				</div>

	   	 				<!-- /// product-content-right-bottom /// -->
	   	 				<div class="product-content-right-bottom">
	   	 					<div class="product-content-right-bottom-top">
	   	 						&#8744;
	   	 					</div>

	   	 					<!-- /// content-big -->
	   	 					<div class="product-content-right-bottom-content-big">
	   	 						<!-- /// bottom-content-title /// -->
	   	 						<div class="product-content-right-bottom-content-title row">
	   	 							<div class="product-content-right-bottom-content-title-item gioithieu">
	   	 								<p>GIỚI THIỆU</p>
	   	 							</div>

	   	 							<!-- ******** -->
	   	 							<div class="product-content-right-bottom-content-title-item chitiet">
	   	 								<p>CHI TIẾT SẢN PHẨM</p>
	   	 							</div>

	   	 							<!-- ******** -->
	   	 							<div class="product-content-right-bottom-content-title-item baoquan">
	   	 								<p>BẢO QUẢN</p>
	   	 							</div>
	   	 						</div>
	   	 						<!-- /// bottom-content /// -->
	   	 						<div class="product-content-right-bottom-content">
	   	 								<!-- /// bottom-content-gioithieu /// -->
	   	 							<div class="product-content-right-bottom-content-gioithieu">
	   	 								Lên dáng mẫu đầm bán nguyệt nhẹ nhàng như nàng công chúa, Almira Dress nổi bật trong gam màu tươi sáng, sẵn sàng thể hiện vẻ đẹp ngọt ngào và lãng mạn. <br><br>	

										Đầm hai lớp, có độ dài qua gối, dáng bán nguyệt xếp li tạo độ xoè nhẹ và khi kế hợp cùng thiết kế cổ tròn tay bom đã giúp Almira Dress vừa che khuyết điểm tốt vừa tăng thêm phần dịu dàng, thanh cao. <br><br>

										Thiết kế được tạo nên trên nền chất liệu lụa mềm mại, mang đến cảm giác mặc thoải mái, thích hợp mọi thời tiết. 
	   	 							</div>
	   	 								<!-- /// bottom-content-chitiet /// -->
	   	 							<div class="product-content-right-bottom-content-chitiet">	
										<span style="font-weight: bold;">Dòng sản phẩm</span>	<span>Ladies</span> <br>
										<span style="font-weight: bold;">Nhóm sản phẩm</span>	  <span>Đầm</span> <br>
										<span style="font-weight: bold;">Cổ áo</span>			<span>Cổ tròn</span> <br>
										<span style="font-weight: bold;">Tay áo</span>			<span>Tay ngắn</span> <br>
										<span style="font-weight: bold;">Kiểu dáng</span>		<span>Đầm xòe</span> <br>
										<span style="font-weight: bold;">Độ dài</span>			<span>Qua gối</span> <br>
										<span style="font-weight: bold;">Họa tiết</span>			<span>Trơn</span> <br>
										<span style="font-weight: bold;">Chất liệu</span>		<span>Lụa</span>
	   	 							</div>	
	   	 								<!-- /// bottom-content-baoquan /// -->
	   	 							<div class="product-content-right-bottom-content-baoquan">
	   	 								Chi tiết bảo quản sản phẩm : <br><br>

										* Các sản phẩm thuộc dòng cao cấp (Senora) và áo khoác (dạ, tweed, lông, phao) chỉ giặt khô, tuyệt đối không giặt ướt. <br><br>

										* Vải dệt kim: sau khi giặt sản phẩm phải được phơi ngang tránh bai dãn. <br><br>

										* Vải voan, lụa, chiffon nên giặt bằng tay. <br><br>

										* Vải thô, tuytsi, kaki không có phối hay trang trí đá cườm thì có thể giặt máy. <br><br>

										* Vải thô, tuytsi, kaki có phối màu tường phản hay trang trí voan, lụa, đá cườm thì cần giặt tay. <br><br>

										* Đồ Jeans nên hạn chế giặt bằng máy giặt vì sẽ làm phai màu jeans. Nếu giặt thì nên lộn trái sản phẩm khi giặt, đóng khuy, kéo khóa, không nên giặt chung cùng đồ sáng màu, tránh dính màu vào các sản phẩm khác. <br><br>

										* Các sản phẩm cần được giặt ngay không ngâm tránh bị loang màu, phân biệt màu và loại vải để tránh trường hợp vải phai. Không nên giặt sản phẩm với xà phòng có chất tẩy mạnh, nên giặt cùng xà phòng pha loãng. <br><br>

										* Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ, vắt mức trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt. <br><br>

										* Nên phơi sản phẩm tại chỗ thoáng mát, tránh ánh nắng trực tiếp sẽ dễ bị phai bạc màu, nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn. <br><br>

										* Những chất vải 100% cotton, không nên phơi sản phẩm bằng mắc áo mà nên vắt ngang sản phẩm lên dây phơi để tránh tình trạng rạn vải. <br><br>

										* Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng, mát và không bị cháy, giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải. 
	   	 							</div>
	   	 						</div>
	   	 					</div>
	   	 				</div>
	   	 			</div>
   	 			</div>
					<?php } ?>
   	 		</div>
				</form>
   	</section>
   	 	<!----------------------- product-related ------------------------->
		<div class="product-related-title">
   			<p>Sản Phẩm Nổi Bật</p>
   		</div>
   	<section class="product-related ">
   		
   		<div class="product-contentn">
		   <?php $i = 0;
		    foreach ($data_sanpham as $key => $value) { if(++$i == 6)
				break;
		   ?>
   			<div class="product-content-iteam">
               <a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']  ?>"></a>
   				<h1><?php echo $value['tensanpham']; ?></h1>
   				<p><?php echo $value['gia'] ?><sup>đ</sup></p>
   			</div>

   		</div>
		<?php } ?>
   	</section>
	

<!-------------------- app-container ----------------------------->
	<!--Footer-->
    <section class="footer">
    <div class="site-bottom">
        <div class="containe">
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
                            <input id="email_subscribe" type="text" name="" placeholder="Nhập địa chỉ email" >
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
        <div class="containe">
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
                            <input id="email_subscribe-mb" type="text" name="" placeholder="Nhập địa chỉ email của bạn" >
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
	<script src="./w3_band/assets/js/channel.js"></script>
	
</html>
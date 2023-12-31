<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Trang chủ</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/conter.css'>
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/center.css'>
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/repon_trangchu.css'>
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/css/fontawesome.css">
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/js/all.min.js">
    <link rel="stylesheet" href="./w3_band/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/js/conter.js'>
	<!-- <link rel="stylesheet" media="mediatype and|not|only (expressions)" href="print.css"> -->
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
        
        	<li class="search">
                <form action="" method="get">
                <input type="hidden" name="controller" value="trangchu">
                <input id="btn-search" name="keyword" placeholder="Tìm kiếm" type="search" aria-label="Search" >
                <button type="submit" class="fas fa-search"></button>
                <!-- <input id="btn-search" class="btn btn-default"  type="submit" value="Tìm Kiếm"> -->
                </form>
            </li>
            
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
	<!------------------------- slider ---------------------->
    <section id="Slider">
        
		<div class="aspect-ratio-169">
        <?php foreach ($banner as $key => $value) { ?>
			<img src="../images/slider/<?php echo $value['img_banner'] ?>">
         <?php } ?>
        </div>
       
		<div class="dot-container">
			<div class="dot active"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
			<div class="dot"></div>
            <div class="dot"></div>
		</div>
	</section>
	<div class="search-mb"><input  placeholder="Tìm kiếm" type="text"> <i class="fas fa-search"></i></div>
	<!------------------- slider-all -------------->
	<section class="slider-all">
		<!------------------- slider-product-one -------------->	
		<section class="slider-product-one">
			<div class="container">
				<div class="slider-product-one-flex">
					<!-- slider-connect-table-one -->
					<div class="slider-connect-table-one">
						<h3> Danh Mục Sản Phẩm </h3>
					</div>
					<div class="slider-connect-table-one-title row">
						<div class="slider-connect-table-one-title-items danhmucnu">
							<a href="#"> <li>Danh Mục Nữ</li> </a>
						</div>
							<!-- *********  -->
						<div class="slider-connect-table-one-title-items danhmucnam">
							<a href="#"> <li>Danh Mục Nam</li> </a>
						</div>
							<!-- ********** -->
						<div class="slider-connect-table-one-title-items danhmuctreem">
							<a href="#"> <li>Danh Mục Trẻ Em</li> </a>
						</div>
					</div>
					
					<div class="slider-product-one-conter">
						<div class="slider-product-one-conter-title">
							<h2>Săn sale mỗi ngày</h2>
						</div>
						<div class="slider-product-one-conter-content">
							<div class="slider-product-one-conter-items-contes">
							
							
								<div class="slider-product-one-conter-items">
								<?php $i = 0;
								 foreach ($data_sanphamnu as $key => $value)
                                    { if(++$i == 6)
                                        break;  ?>
								 
									<div class="slider-product-one-conter-item sp1">
										<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-text">
											<a href="" class="color-sp1"><img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1> 
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											 <p1><?php echo $value['gia'] ?><sup>đ</sup></p1> 
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"></a></button>
                                    		</div>
										</div>
									</div>
									<?php } ?>
								</div>
								
								<!-- ****** -->
								<div class="slider-product-one-conter-items">
								<?php $i = 0;
								 foreach ($data_sanphamnu1 as $key => $value)
								 { if(++$i == 6)
									break;  ?>
								 
									<div class="slider-product-one-conter-item sp1">
										<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-text">
											<a href="" class="color-sp1"><img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1> 
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											 <p1><?php echo $value['gia'] ?><sup>đ</sup></p1> 
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    		</div>
										</div>
									</div>
									<?php } ?>
								</div>
								<!-- ****** -->
								<div class="slider-product-one-conter-items">
								<?php $i = 0;
								 foreach ($data_sanphamnu2 as $key => $value)
								 { if(++$i == 6)
									break;  ?>
								 
									<div class="slider-product-one-conter-item sp1">
										<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-text">
											<a href="" class="color-sp1"><img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1>  
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											 <p1><?php echo $value['gia'] ?><sup>đ</sup></p1>
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    		</div>
										</div>
									</div>
									<?php } ?>
								</div>
									
							</div>
							
							<div class="slider-product-one-conter-btn">
								<i class="fas fa-chevron-left fas-fa-chevron-left-two"></i>
								<i class="fas fa-chevron-right fas-fa-chevron-right-two"></i>
							</div>
						</div>
					</div>
						
					<!------------------ sp-nam -------------------->
					<div class="slider-product-one-conter-flex">
						<div class="slider-product-one-conter-title-flex">
							<h2>Săn sale mỗi ngày</h2>
						</div>
						<div class="slider-product-one-conter-content-flex">
							<div class="slider-product-one-conter-items-contes-flex">
							
								<div class="slider-product-one-conter-items-flex">
								<?php $i = 0;
								 foreach ($data_sanphamnam as $key => $value)
								 { if(++$i == 6)
									break;  ?>
									<div class="slider-product-one-conter-item-flex sp1">
										<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-text-flex">
										<a href="" class="color-sp1"><img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1> 
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											<p1><?php echo $value['gia'] ?><sup>đ</sup></p1> 
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    		</div>
										</div>
										
									</div>
									<?php } ?>
								</div>
									
								<!-- ****** -->
								<div class="slider-product-one-conter-items-flex">
								<?php $i = 0;
								 foreach ($data_sanphamnam1 as $key => $value)
								 { if(++$i == 6)
									break;  ?>
									<div class="slider-product-one-conter-item-flex sp1">
										<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-text-flex">
										<a href="" class="color-sp1"><img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1> 
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											<p1><?php echo $value['gia'] ?><sup>đ</sup></p1> 
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    		</div>
										</div>
									
									</div>
									<?php } ?>
								</div>
									
								<!-- ****** -->
								<div class="slider-product-one-conter-items-flex">
								<?php $i = 0;
								 foreach ($data_sanphamnam2 as $key => $value)
								 { if(++$i == 6)
									break;  ?>
									<div class="slider-product-one-conter-item-flex sp1">
										<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-text-flex">
										<a href="" class="color-sp1"><img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1> 
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											<p1><?php echo $value['gia'] ?><sup>đ</sup></p1> 
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    		</div>
										</div>
										
									</div>
									<?php } ?>
								</div>
							</div>
							
							<div class="slider-product-one-conter-btn-flex">
								<i class="fas fa-chevron-left down-left"></i>
								<i class="fas fa-chevron-right down-right"></i>
							</div>
						</div>
					</div>

					<!---------------------- sp-chil ------------------->
					<div class="slider-product-one-conter-toom">
						<div class="slider-product-one-conter-title-toom">
							<h2>Săn sale mỗi ngày</h2>
						</div>
						<div class="slider-product-one-conter-content-toom">
							<div class="slider-product-one-conter-items-contes-toom">
								<!-- ****** -->
								<div class="slider-product-one-conter-items-toom">
								<?php $i = 0;
								 foreach ($data_sanphamtreem as $key => $value)
								 { if(++$i == 6)
									break;  ?>
									<div class="slider-product-one-conter-item-toom sp1">
										<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-text-toom">
										<a href="" class="color-sp1"><img src="images/color/001.png" alt="001" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1> 
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											<p1><?php echo $value['gia'] ?><sup>đ</sup></p1> 
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    		</div>
										</div>
									</div>
									<?php } ?>
								</div>
						</div>
					</div>
					
			</div>
		</section>
		<!------------------- slider-product-content-live -------------->
		<section class="slider-product-content-live">
			<div class="container">
				<div class="slider-product-content-live-one">
					<h5>Sản Phẩm Nổi Bật</h5>
				</div> 
				<div class="slider-product-content-live-icons">
					<div class="slider-product-content-live-icons-tel">
                                <?php foreach ($data_sanpham as $key => $value) { ?>
							<div class="slider-product-one-conter-items-one">
								<a href="?controller=product&id=<?php echo $value['id_sanpham'] ?>"><img src="../images/sanpham/<?php echo $value['img']?>"</a>
										<div class="slider-product-one-conter-item-tel">
											<a href=""><img src="images/color/004.png" alt="004" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><img src="images/color/026.png" alt="026" style=" width: 20px; height: 20px; border-radius: 50%;" class="lazy"></a>
											<a href=""><span><i class="fa-regular fa-heart"></i></span></a>
											<h1><?php echo $value['tensanpham'] ?></h1>
                                            <p>Tồn kho:<?php echo $value['tonkho'] ?></p>
											<div class="price">
											<p1><?php echo $value['gia'] ?><sup>đ</sup></p1> 
											<button><a style=" color: #F0FFFF;" class="fa fa-shopping-bag" href=""></a></button>
                                    		</div>
										</div>
                            </div>
                            
						    <?php }	?>
					</div>
                    
				</div>
                
			</div>
		</div>
		</section>
        
	</section>
            <div class="phantrang">
                <?php 
                    if (isset($total_pages)) {
                        for ($i = 1; $i <= min($total_pages, 10); $i++) {
                            if ($i == $first_page) {
                                echo "<a href='?controller=trangchu&first_page=$i'>$i</a>";
                            }else{
                                echo "<a href='?controller=trangchu&first_page=$i'>$i</a>";
                            }
                        }  
                    }
                ?>
                <!-- <?php if ($total_pages >= 5) { ?>
                    <button id="load-button">......Xem thêm</button>
                    <button style="display:none" id="hide-button">Ẩn đi</button>
                <?php } ?> -->
            </div>         
    
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
    </footer>
</body>
<!-- <script>
   // Phân trang khi trang quá 5 sản phẩm ấn xem thêm
   document.addEventListener("DOMContentLoaded", function () {
        var loadMoreButton = document.getElementById("load-button"); // Lấy nút "Xem thêm"
        var hideButton = document.getElementById("hide-button"); // Lấy nút "Ẩn đi"
        var itemsPerPage = <?php echo $items_page; ?>; // Số lượng mục hiển thị trên mỗi trang
        var currentPage = <?php echo $first_page; ?>; // Trang hiện tại
        var totalPages = <?php echo $total_pages; ?>; // Tổng số trang

        
        
        loadMoreButton.addEventListener("click", function () {
            if (currentPage < totalPages) {
              
                currentPage++; // Tăng số trang hiện tại lên
                
                if (currentPage >= 10) {
                    loadMoreButton.style.display = "none"; // Ẩn nút "Xem thêm" sau khi hiển thị đủ 10 trang
                    hideButton.style.display = "block"; // Hiển thị nút "Ẩn đi"
                }
            }
        });

        hideButton.addEventListener("click", function () {
            loadMoreButton.style.display = "block"; // Hiển thị lại nút "Xem thêm"
            hideButton.style.display = "none"; // Ẩn nút "Ẩn đi"
        });
    });
</script> -->
	<script src="./w3_band/assets/js/conter.js"></script>
	<script src="./w3_band/assets/js/channel.js"></script>
	<script src="./w3_band/assets/js/tabble.js"></script>
</html>
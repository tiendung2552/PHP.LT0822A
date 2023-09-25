<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Giỏ Hàng | BDA</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/giohang/paymentt.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/center.css'>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/repon_trangchu.css'>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
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
    <section class="body">
        <div class="container">
            <div class="car-top-wrap">
                <div class="cart-top">
                    <div class="cart-top-cart cart-top-item">
                            <i class="fa fa-shopping-cart" style="font-size:24px"></i>
                    </div>
                    <div class="cart-top-address cart-top-item">
                        <i class="fa fa-map-marker" style="font-size:24px"></i>
                    </div>
                    <div class="cart-top-payment cart-top-item">
                            <i class="fa fa-credit-card-alt" style="font-size:24px"></i>
                    </div>
                </div>
            </div>
        </div>
   <div class="container">
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <p class="modal-title">Chọn địa chỉ</p>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <div class="block-border change-address mt-3 border-success">
                <table>
                    <input type="hidden" class="hidden" name="address_id" value="890757" checked="checked" />
                    <tr>
                        <td><h4>Dinh Ba<span>(Cơ quan)</span></h4></td>
                        <td><button>Mặc định</button></td>
                    </tr>
                    <tr>
                        <td> <p>Điện thoại:<span>0395566099</span></p></td>
                    </tr>
                    <tr>
                        <td><p>Địa chỉ:<span>Quảng Yên, Hà An, Quảng Yên, Quảng Ninh</span></p></td>
                    </tr>
                    
                </table>
                
            </div>
          </div>
          
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Quay lại</button>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
   <section class="cart">
        <form action="" method="post">
   <div class="containe">
        <div class="cart-content">
           
            <div class="cart-content-left">
            <h3> Địa chỉ giao hàng</h3>
            <span class="address"><button>Default</button></span> 
            <?php  
            if (isset($_SESSION['ss_user'])){ ?>
            <p class="tt-kh"><span>Tên người nhận: </span><input type="text" name="user" value="<?php echo $_SESSION['ss_user'] ?>"></p>
           
            <p  class="tt-kh"><span>Điện thoại: </span><input type="text" name="sdt" value="<?php echo  $_SESSION['ss_sdt'] ?>"></p>

            <p class="tt-kh"><span>Địa chỉ: </span><input type="text" name="diachi" value="<?php echo $_SESSION['ss_diachi'] ?>"></p>

            <p class="tt-kh"><span>Email: </span><input type="text" name="email" value="<?php echo $_SESSION['ss_email'] ?>"></p>
            
            <p class="tt_checkbox">Ghi chú: </p><textarea name="note"  cols="100" rows="5" placeholder="Có thể bỏ qua ghi chú nếu bạn không có gì viết"></textarea> 
            <?php }  ?>
           
            </div>
            <?php
             $totalQuantity = 0;
             if (isset($_SESSION['cartt'])) {
                 foreach ($_SESSION['cartt'] as $key => $value) {
                     if (isset($value['tonkho']) && is_numeric($value['tonkho'])) {
                         $totalQuantity += $value['tonkho'];
                     }
                 }
             }
            $amount1 =0;
            if (isset($_SESSION['cartt'])) {
                foreach ($_SESSION['cartt'] as $key => $value) {
                $amount = $value['tonkho'] * $value['gia'];
                $amount1 += $amount; 
            }
                }?>
            <div class="cart-content-right">
                <h3>Tổng tiền giỏ hàng</h3>
                <div class="span">
                <span class="span-left">Tổng sản phẩm</span><span class="span-right"><?php echo $totalQuantity ?></span><br>
                </div>
                <div class="span">
                <span class="span-left">Tổng tiền hàng</span><span class="span-right"><?php echo $amount1 ?></span><br>
                </div>
                <div class="span">
                <span class="span-left">Thành tiền</span><span class="span-right"><?php echo $amount1 ?></span><br>
                </div>
               
            <div class="cart-content-right-text">
                <p>(!!!)Miễn đổi trả đối với sản phẩm đồng giá / sale trên 50%</p>
            </div>
           
            </div>
        </div>
    </div>
   
   </section>
    
   

		
		<div class="col-12 col-2xl-5">
			<h3 class="checkout-title">Phương thức giao hàng</h3>
			<div class="block-border">
			<!-- hien tai chi lam phuong thuc giao nhanh -->
				<label class="ds__item">
                    <input type="hidden" id="ngaynhan" name="ngaynhan" value="">
					<input id="shipping_method_1" class="ds__item__input" type="radio" name="shipping_method" value="1" checked />
						<span class="ds__item__label">Chuyển phát nhanh
							<span class="delivery-time">
								<p>Thời gian giao hàng dự kiến: <span class="time"  name="ngaynhan"><i id="days"></i><i id="dates"></i></span></p>
							</span>
						</span>
				</label>
			</div>
			<div class="pt-4">
				<h4 class="checkout-title1">
				Bạn có muốn nhận hoá đơn VAT không ?
				
				<label class="toggle-switch form-switch">
					<input type="checkbox" style="display: none;">
					<span class="slider" onclick="showinp()"></span>
				</label>
				</h4>
				   
					
				   
				<div id="show-inp" style="display: none;" class="ds__item__contact-info pt-0 order_vat_form ">
					<div class="form-group">
						<input type="text" name="order_vat_email" class="form-control" placeholder="Nhập email" value="" />
					</div>
					<div class="form-group">
						<input type="text" name="order_vat_company_name" class="form-control" placeholder="Nhập tên doanh nghiệp" value="" />
					</div>
					<div class="form-group">
						<input type="text" name="order_vat_tax_code" class="form-control" placeholder="Nhập mã số thuế" value="" />
					</div>
					<div class="form-group">
						<input type="text" name="order_vat_address" class="form-control" placeholder="Nhập địa chỉ" value="" />
					</div>
				</div>
			</div>
		</div>
		<div class="checkout-payment">
		
		<div class="block-border">
			<h5 class="checkout-title">Phương thức thanh toán</h5>
			<p>Mọi giao dịch đều được bảo mật và mã hóa. Thông tin thẻ tín dụng sẽ không bao giờ được lưu lại.</p>
				<div class="checkout-payment__options">
					<label class="ds__item">
						<input class="ds__item__input" type="radio" name="payment_method" id="payment_method_1" value="Thanh toán bằng thẻ tín dụng"  />
						<span class="ds__item__label">
							Thanh toán bằng thẻ tín dụng
						</span>
						<span style="margin-left: 3px">
							<img src="https://pubcdn.ivymoda.com/ivy2/images/1.png" class="">
						</span>
					</label><br>
					<label class="ds__item">
						<input class="ds__item__input" type="radio" name="payment_method" id="payment_method_2" value="Thanh toán bằng thẻ ATM"  />
						<span class="ds__item__label">
							Thanh toán bằng thẻ ATM
							<span>( Hỗ trợ thanh toán online hơn 38 ngân hàng phổ biến Việt Nam. )</span>
						</span>
					</label><br>
					<label class="ds__item">
						<input class="ds__item__input" type="radio" name="payment_method" id="payment_method_5" value="Thanh toán bằng Momo"  />
						<span class="ds__item__label">
							Thanh toán bằng Momo
						</span>
					</label><br>
					<label class="ds__item">
						<input class="ds__item__input" type="radio" name="payment_method" id="payment_method_3" value="Thanh toán khi giao hàng" checked />
						<span class="ds__item__label">
							Thanh toán khi giao hàng
						</span>
					</label>
			   </div>
		</div>
       
	</section>
    <div class="cart-content-right-button">
               <button name="btn_payment" >Hoàn Thành</button>
        </div>
        </form>
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
    <!-- site-footer -->
    <script>
        // time
    window.onload = setInterval(clock,1000);
    function clock(){
    var d = new Date();
    var date = d.getDate() + 3;
    var month = d.getMonth();
    var montharr =["Tháng 1","Tháng 2","tháng 3","Tháng 4","Tháng 5","Tháng 6",
                   "Tháng 7","Tháng 8","Tháng 9","Tháng 10","tháng 11","Tháng 12"];
    month=montharr[month];

    var year = d.getFullYear();
    var day = d.getDay() + 3;
    var dayarr =["Chủ Nhật","Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7"];
    if (day > 6) {
        day = day - 7;
    }
    day=dayarr[day];

    document.getElementById("days").innerHTML=day;
    document.getElementById("dates").innerHTML=date+" "+month+" "+year;

    var ngayNhan = document.getElementById("dates").textContent;
    
    document.getElementById("ngaynhan").value = ngayNhan;
}
    </script>
    <script src="./w3_band/assets/js/chanel.js"></script>
    <script src="./w3_band/assets/js/center.js"></script>
</body>
</html>
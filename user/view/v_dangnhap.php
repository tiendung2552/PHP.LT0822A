<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/dangnhap.css'>
	<link rel='stylesheet' type='text/css' media='screen' href='./w3_band/assets/css/center.css'>
</head>
<body>

	</section>
    <div class="container">
        <div class="text-center">
            <h3>Đăng Nhập</h3>
        </div>

        <div class="row">
            <div>
                <p>Thông tin khách hàng</p>
                <!-- Các phần tử khác như đã định nghĩa trong mã gốc -->
                <form action="" method="post">
                <div class="form-group">
                                <label for="sdt">Điện thoại:<span style='color:red'>*</span></label><br>
                                <input type="text" name='phone' id='sdt' class="form-control"placeholder='Điện thoại...'>
                </div>
                <?php if (isset($loi['phone'])) { ?>
                    <span style="color: red; " ><?php echo $loi['phone']; ?></span>
                <?php } ?> 
                <div class="form-group">
                                <label>Mật khẩu:<span style="color: red">*</span></label>
                                <input class="form-control" type="password" value="" name="pass" placeholder="Mật khẩu..." aria-autocomplete="list">
                </div>
                <?php if (isset($loi['pass'])) { ?>
                                    <span style="color: red; " ><?php echo $loi['pass']; ?></span>
                                <?php } ?> 
                <div class="form-group">
                                <label>Nhập lại mật khẩu:<span style="color: red">*</span></label>
                                <input class="form-control" type="password" value="" name="repass" placeholder="Nhập lại mật khẩu...">
                </div>
                <?php if (isset($loi['repass'])) { ?>
                                    <span style="color: red;" ><?php echo $loi['repass']; ?></span>
                                <?php } ?> 

                    <div class="help">
                    <a href="">Quên mật khẩu</a>
                    <a href="?controller=sign">Chưa có tài khoản</a>
                    </div>
                   
                    <button id="bnt_register" 
                    class="btn btn--large" 
                    type="submit" name="btn_login">Đăng Nhập</button>
                    
                </div>
                </form>
        </div>
    </div>


    
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
    <!-- Bổ sung các thẻ meta để tạo Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</body>
</html>

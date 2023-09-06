<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/login.css"> 
</head>
<body>
    <section class="container">
        <div class="img-background-top">
            <a class="text-demo1" href="index-goc.html"> Trang chủ </a>
            <a class="text-demo2" href="#"> Hỗ Trợ </a>
            <a class="text-demo3" href="#"> Thông tin trang </a>
            <p class="icon-user">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
            </svg>
            </p>
            <b class="name">Đăng Nhập</b>
        </div>
        <div class="body">
                <div class="background-left">      
                        <a class="text1" href="#">Thông tin nhân viên</a>
                        <a class="text1" href="#">Thông tin khách hàng</a>
                        <a class="text1" href="#">Thông tin sản phẩm</a>
                        <a class="text1" href="#">Thông tin đơn hàng</a>
                </div>
                <div class="background-right">
                    <div class="background-right-table">
                        <h1>ĐĂNG NHẬP ĐỂ KHÁM PHÁ</h1>
                        <div class="background-right-table-small">  
                            <form action="" method="post">
                            <ul>
                                <li><span class="span-left">Username:</span> <span class="span-right"><input type="text" name="user"></span></li>
                                <?php if (isset($loi['user'])) { ?>
                                    <span style="color: red; margin:30px 0px 0px 370px" ><?php echo $loi['user']; ?></span>
                                <?php } ?> 
                                <li><span class="span-left1">Password:</span> <span class="span-right1"><input type="text" name="pass"></span></li>
                                <?php if (isset($loi['pass'])) { ?>
                                    <span style="color: red;margin:30px 0px 0px 370px "><?php echo $loi['pass']; ?></span>
                                <?php } ?>
                            </ul> 
                            <button name="btn_admin">Đăng Nhập</button>
                            </form>     
                            
                        </div>
                    </div>
                </div>
        </div>
    </section>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/Nhanvien/themnv.css">
</head>
<body>
    <section class="container">
        <div class="img-background-top">
           <a class="text-demo1" href="?page=trangchu"> Trang chủ </a>
            <a class="text-demo2" href="?page=help"> Hỗ Trợ </a>
            <a class="text-demo3" href="?page=information"> Thông tin trang </a>
            <p class="icon-user">
            <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
            </svg>
            </p>
            <b class="name"><?php if(isset($_SESSION['ss_admin'])) { ?> 
                <?php echo $_SESSION['ss_admin']['full_name'] ?>
                <?php } ?> </b>
        </div>
        <div class="body">
            <div class="background-right">
                <div class="background-right-table">
                    <h1>THÊM NHÂN VIÊN</h1>
                    <div class="background-right-table-small">  
                        <form action="" method="post">
                            <?php foreach ($user as $key => $value) { ?>
                            <ul class="ul-head">
                                <ul  class="ul-left">
                                    <li><span class="span-left">Username:</span> <span class="span-right"><input type="text" name="user"></span></li>
                                    <li><span class="span-left">Password:</span> <span class="span-right"><input type="password" name="pass"></span></li>
                                    <li><span class="span-left">Full_name:</span> <span class="span-right"><input type="text" name="full_name" ></span></li>
                                </ul>
                                <ul class="ul-right">
                                    
                                    <li><span class="span-left">Phone_number:</span> <span class="span-right"><input type="text" name="phone" ></span></li>
                                    <li><span class="span-left">Lv:</span> <span class="span-right"><input type="text" name="lv" ></span></li>
                                </ul>
                            </ul>
                            <button name="btn_them">Thêm</button></a>
                            <a href="?pge=DsNhanVien" class="come-back"><button>Quay lại</button></a>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
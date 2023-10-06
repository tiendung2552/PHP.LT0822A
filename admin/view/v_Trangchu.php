<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/trangchu.css"> 
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/css/fontawesome.css">
    <link rel="stylesheet" href="./w3_band/assets/fontawesome/fontss/js/all.min.js">
    <link rel="stylesheet" href="./w3_band/assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <div class="background-left">      
                        <a class="text1" href="?page=DsNhanVien"><i class="fa-solid fa-clipboard-user"></i>Nhân viên</a>
                        <a class="text1" href="?page=QuanlyKh"><i class="fa-solid fa-circle-user"></i></i>Khách hàng</a>
                        <a class="text1" href="?page=DsSanPham"><i class="fa-solid fa-shirt"></i>Sản phẩm</a>
                        <a class="text1" href="?page=QuanlyDh"><i class="fa-solid fa-receipt"></i>Đơn hàng</a>
                        <a class="text1" href="?page=logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>Đăng xuất</a>
                </div>
                <div class="background-right">
                    <div class="background-right-table">
                        <h1>RẤT HÂN HẠNH ĐƯỢC PHỤC VỤ</h1>
                        <div class="background-right-table-small">  
                            <ul>
                                <li class="text-head">CHÀO MỪNG ĐẾN MỚI TRANG ADMIN</li>
                                <li class="text-head">Trang Quản Lý Bán Hàng BDA</li>
                                <li class="text-body">Trang được tạo bởi 3 lập trình viên xuất sắc</li>
                                <li class="text-body">Mỗi người với những kỹ năng làm việc rất năng suất</li>
                                <li class="text-body">Đã được chứng nhận là những học viên tốt nhất</li>
                            </ul>      
                        </div>
                    </div>
                </div>
        </div>
    </section>
</body>
</html>
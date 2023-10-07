<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/Donhang/donhang.css">
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
                    <a class="text1 a4" href="?page=QuanlyDh">Thông tin đơn hàng</a>
            </div>
            <div class="background-right">
                <div class="background-right-table">
                    <h1>DANH SÁCH ĐƠN HÀNG</h1>
                    <form action="" method="get">
                    <div class="search">
                    <input type="hidden" name="page" value="QuanlyDh">
                    <input name="keyword" placeholder="Tìm kiếm" type="search" aria-label="Search" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>"> 
                    <input id="btn-search" class="btn btn-default" class="btn-sear" type="submit" value="Tìm Kiếm">
                    </div>
                    
                    <div class="background-right-table-small">  
                    
                            <table>
                                <thead>
                                    <tr>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Khách Hàng</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Tổng Giá</th>
                                    <th>Tình Trạng</th>
                                    <th colspan="2">Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_donhang as $key => $value) { ?>
                                
                                    <tr>
                                        <td><?php echo $value['id_donhang'] ?></td>
                                        <td><?php echo $value['name'] ?></td>
                                        <td><?php echo $value['sdt'] ?></td>
                                        <td><?php echo $value['tong'] ?></td>
                                        <td><?php echo $value['tinhtrang'] ?>
                                        <td colspan="2">
                                        <a  href="?page=suadh&id=<?php echo $value['id_donhang'] ?>">
                                            <i style="color: black;"class="fa-solid fa-gear"></i></a>
                                        <a  href="?page=ct_donhang&id=<?php echo $value['id_donhang'] ?>">
                                            <i style="color: black;" class="fa-solid fa-circle-info"></i></a>
                                        <a href="?page=xoadh&id=<?php echo $value['id_donhang'] ?>" onclick="return confirm('Bạn muốn xóa đơn hàng của khách?');">
                                            <i style="color: black;" class="fa-solid fa-trash"></i></a>
                                        <a  style="color: black;" href="?page=duyet&id=<?php echo $value['id_donhang'] ?>" >Duyệt</a>
                                        </td>
                                        
                                    </tr>
                                   <?php } ?>
                                </tbody>
                            </table>
                            
                            
                    </div>
                    </form>
                    <a href="?page=themdh" class="more-staff"><button>Thêm Đơn Hàng</button></a>
                    <a href="?page=trangchu" class="come-back"><button>Quay lại</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
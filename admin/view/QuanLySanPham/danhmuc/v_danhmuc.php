<!DOCTYPE html>
<html>
<head>
    <meta charset='utf8mb4_unicode_ci'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/Sanpham/danhmuc.css">
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
                    <a class="text1 a1" href="?page=banner">Ảnh chạy banner</a>
                    <a class="text1 a2" href="?page=danhmuc">Thông tin danh mục</a>
                    <a class="text1 a3" href="?page=DsSanPham">Thông tin sản phẩm</a>
            </div>
            <div class="background-right">
                <div class="background-right-table">
                    <h1>DANH SÁCH SẢN PHẨM</h1>
                    <form action="" method="get">
                    <div class="search">
                    <input type="hidden" name="page" value="DsSanPham">
                    <input name="keyword" name="keyword1" placeholder="Tìm kiếm" type="search" aria-label="Search" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>"> 
                    <input id="btn-search" class="btn btn-default" class="btn-sear" type="submit" value="Tìm Kiếm">
                    </div>
                    </form>
                    <div class="background-right-table-small">  
                            <table>
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Danh mục</th>
                                        <th colspan="2">Setting</th>
                                    </tr>
                                </thead>
                               
                                    <?php
                                    foreach ($data_danhmuc as $key => $value) { ?>
                                     <tbody>
                                    <tr>
                                        <td><?php echo $value['id_danhmuc']?></td>
                                        <td><?php echo $value['danhmuc'] ?></td>
                                    
                                        <td class="btn">
                                            <a href="?page=Suasp&id=<?php echo $value['id_sanpham'] ?>"><i class="fa-solid fa-gear"></i></a>
                                            <a onclick="return confirm('Xóa sản phẩm này?');" href="?page=Xoasp&id=<?php echo $value['id_sanpham'] ?>"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                              </tbody>
                              <?php } ?>
                            </table>
                            
                           
                          
                    </div>
                        <a href="?page=Themsp" class="more-staff" ><button>Thêm</button></a>
                        <a href="?page=trangchu" class="come-back"><button>Quay lại</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
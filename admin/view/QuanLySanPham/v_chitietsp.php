<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/sanpham/ct_sanpham.css">
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
                    <h1>CHI TIẾT ĐƠN HÀNG</h1>
                    <div class="background-right-table-small">  
                        <form action="" method="get">
                            <table >
                                <thead>
                                    <tr>
                                        <th>Xuất xứ</th>
                                        <th>id_sanpham</th>
                                        <th>Ngày tạo</th>
                                        <th>Người tạo</th>
                                        <th>Loại sản phẩm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    <?php foreach ( $ct_sanpham as $key => $value) { ?>
                                        <input type="hidden" name="id" value="<?php echo $value['id_sanpham']?>">
                                    <tr>
                                        <td><?php echo $value['xuatxu'] ?></td>
                                        <td><?php echo $ct_danhmuc[0]['danhmuc'] ?></td>
                                        <td><?php echo $value['ngaytao'] ?></td>
                                        <td><?php echo $value['nguoitao'] ?></td>
                                        <td><?php echo $value['loaisanpham'] ?></td>
                                    </tr>
                                    
                                </tbody>
                                <?php } ?>
                            </table>                   
                          </form>
                          <a href="?page=DsSanPham" class="come-back"><button>Quay lại</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
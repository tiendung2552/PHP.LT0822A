<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/Donhang/themdh.css">
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
            
            <div class="background-right">
                <div class="background-right-table">
                    <h1>SỬA ĐƠN HÀNG</h1>
                    <form action="" method="post">
                    <div class="background-right-table-small">  
                        <?php foreach ($donhang as $key => $value) { ?>
            
                        <table>
                            <tr>
                            <td class="left"> <span class="span-left">Khách Hàng:   </span> <span class="span-right"><input type="text" name="name" value="<?php echo $value['name'] ?>"></span></td>
                            <td class="right"> <span class="span-left">Thanh Toán:   </span> <span class="span-right"><input type="text" name="payment" value="<?php echo $value['payment'] ?>"></span></td>
                            <td class="left"><span class="span-left">Sỉze: </span> <span class="span-right"><input type="text" name="size" value="<?php echo $value['size'] ?>"></span></td>
                            </tr>
                        
                            <tr>
                            <td class="left"> <span class="span-left">Email:   </span> <span class="span-right"><input type="text" name="email" value="<?php echo $value['email'] ?>"></span></td>
                            <td class="right"><span class="span-left">ID Sản Phẩm:     </span> <span class="span-right"><input type="text" name="id_sp" value="<?php echo $value['id_sanpham'] ?>"></span></td>
                            <td class="left"> <span class="span-left">Ghi Chú:   </span> <span class="span-right"><input type="text" name="note" value="<?php echo $value['ghichu'] ?>"></span></td>
                            </tr>

                            <tr>
                            <td class="left"> <span class="span-left">Số Điện Thoại:   </span> <span class="span-right"><input type="text" name="sdt" value="<?php echo $value['sdt'] ?>" ></span></td>
                            <td class="right"><span class="span-left">Số Lượng Sản Phẩm: </span> <span class="span-right"><input type="text" name="sl" value="<?php echo $value['soluongsp'] ?>"></span></td>

                            </tr>

                            <tr>
                            <td class="left"> <span class="span-left">Địa Chỉ:   </span> <span class="span-right"><input type="text" name="diachi"  value="<?php echo $value['diachi'] ?>"></span></td>
                            <td class="right"><span class="span-left">Ngày nhận: </span> <span class="span-right"><input type="text" name="ngaynhan"  value="<?php echo $value['ngaynhan'] ?>"></span></td>
                           
                            </tr>
                            <tr>
                                <td style="color: red; margin:30px 0px 0px 370px;text-align: center;" colspan="3">
                                <?php if (isset($loi)) { ?>
                                    <?php echo $loi; ?>
                                <?php } ?>
                                </td> 
                            </tr>
                        </table>
                        <input type="submit" class="more-staff" name="btn_upd" value="Sửa Đơn Hàng">
                          <?php }  ?>
                            
                    </div>
                    
                    </form>
                    <a href="?page=trangchu" class="come-back"><button>Quay lại</button></a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
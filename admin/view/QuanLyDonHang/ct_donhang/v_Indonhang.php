<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/Donhang/indonhang.css">

</head>
<body>

<form action="" method="post">
<?php foreach ($data_indonhang as $key => $value) { ?>
<div class="body">
        
            <div class="thongtin" style="vertical-align: top">
                <div class="colLeft">
                    <h1><img src="../images/logo/logo3.jpg" width="150px" alt=""></h1>
                    <p style="height: 20pt;"><b>Hotline: 0395566099</b></p>
                    <p style="height: 20pt;"><b>Email: baokyeu12345@gmail.com</b></p>
		 			<p style="height: 20pt;"><b>Địa chỉ shop:</b> Số A, Đường A, Huyện A, Quận A, Thành Phố A </p>		
                    
                    
                </div>
                <div class="colcentre">
                <h2><b>Thông tin người nhận</b></h2> 

                    <p><b>Họ và Tên:</b> <?php echo $value['name'] ?></p>

                    <p><b>Số điện thoại:</b> <?php echo $value['sdt'] ?></p>

                    <p><b>Email:</b> <?php echo $value['email'] ?></p>

                    <p><b>Địa chỉ nhận hàng: </b><?php echo $value['diachi'] ?></p>
                </div>
                <div class="colright">
                    <p>Ngày đặt hàng: <?php echo $value['ngaydat'] ?></p>
                    <p>Mã đơn hàng: <?php echo $value['id_donhang'] ?></p>
                    <p class="payments"><b>Phương thức thanh toán</b></p>
                    <p><?php echo $value['payment'] ?></p>
                    <p><strong>Phương thức vận chuyển</strong></p>
		 			<p>Vận chuyển nhanh 24/7</p>
                </div>
            </div>
            <table class="listItem" border="1" cellspacing="0" cellpadding="0">
                <thead>
                    <tr style="white-space: nowrap;">
                        <th>Tên sản phẩm</th>
                        <th>Size</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                
                <tbody>
                
                    <tr>
                        <td>
                            <?php echo $value['tensanpham'] ?>
                        </td>
                        <td><?php echo $value['size'] ?></td>
                        <td><?php echo $value['soluongsp'] ?></td>
                        <td><?php echo $value['gia'] ?></td>
                        <td><?php echo $value['amount'] ?></td>
                    </tr>
                   
                </tbody>
                
            </table>
            <div class="checkOutRight">
                <ul>
                    <li><b>Phí vận chuyển: miễn phí giao hàng<sup>đ</sup></b></li>
                    <li><b>Tổng tiền: <span><?php echo $value['tong'] ?> <sup>đ</sup></span></b></li>
        
                </ul>    
            </div>
           <img src="../images/logo/qr.png" alt="" width="100px">
</div>
<?php } ?>
<a href="?page=In&id=<?php echo $value['id_sanpham'] ?>" onclick="return confirm('Bạn muốn in đơn hàng này');">In Đơn Hàng</a>
</form>

<a href="?page=trangchu">Về trang chủ</a>
</body>
</html>
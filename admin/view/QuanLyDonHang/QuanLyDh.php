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
                <?php echo $_SESSION['ss_admin'] ?>
                <?php } ?> </b>
        </div>
        <div class="body">
            <div class="background-left">
                  <a class="text1 a1" href="?page=DsNhanVien">Thông tin nhân viên</a>
                    <a class="text1 a2" href="?page=QuanlyKh">Thông tin khách hàng</a>
                    <a class="text1 a3" href="?page=DsSanPham">Thông tin sản phẩm</a>
                    <a class="text1 a4" href="?page=QuanlyDh">Thông tin đơn hàng</a>
            </div>
            <div class="background-right">
                <div class="background-right-table">
                    <h1>DANH SÁCH ĐƠN HÀNG</h1>
                    <div class="search">
                    <input  placeholder="Tìm kiếm" type="text"> <i class="fas fa-search"></i></div>
                    <div class="background-right-table-small">  
                        <form action="" method="post">
                            <table >
                                <thead>
                                    <tr>
                                    <th>ID</th>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Tên Khách Hàng</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Set</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="?page=ct_donhang">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="Ct-donhang.html">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="Ct-donhang.html">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="Ct-donhang.html">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="Ct-donhang.html">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="Ct-donhang.html">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="Ct-donhang.html">Chi tiết</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>23145</td>
                                        <td>Trung Tu Quoc</td>
                                        <td>0395566099</td>
                                        <td>Trung Kính - Quang Hoa - Hà Nội </td>
                                        <td><a href="Ct-donhang.html">Chi tiết</a></td>
                                    </tr>
                                </tbody>
                            </table>
                          </form>
                          <a href="?page=trangchu" class="come-back"><button>Quay lại</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
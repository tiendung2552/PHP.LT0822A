<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/Sanpham/themsp.css">
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
            <div class="background-right">
                <div class="background-right-table">
                    <h1>THÊM SẢN PHẨM</h1>
                    <div class="background-right-table-small">  
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?php echo $value['id_sanpham'] ?>">
                            <table>
                                <tr>
                                    <th colspan=2>
                                    <span class="span-right">
                                        <input class="right1" type="file" name="img" id="image-input" onchange="chooseFile(this)" 
                                            accept="image/*">
                                        <img alt="" id="image" width="100px" height="100px" src="../images/sanpham/<?php echo $value['img'] ?>">
                                    </span>
                                    </th>
                                    
                                </tr>
                                <tr>
                                    <td class="left"><span class="span-left">Tên Sản Phẩm: </span> <span class="span-right"><input type="text" name="tensanpham" placeholder="tên sản phẩm"></span></td>
                                    <td class="right"><span  class="span-left">Xuất Xứ:</span> <span class="span-right"><input type="text" name="xuatxu" placeholder="Xuất xứ sản phẩm"></span></td>
                                </tr>
                                <tr>
                                    <td class="left"> <span class="span-left">Đơn Giá:   </span> <span class="span-right"><input type="text" name="gia" placeholder="Xuất xứ sản phẩm"></span></td>
                                    <td class="right"><span class="span-left">Id danh mục:  </span> <span class="span-right"><input type="text" name="id_danhmuc" placeholder="id"></span></td>
                                </tr>
                                <tr>
                                    <td class="left"><span class="span-left">Trang Thái:   </span> <span class="span-right"><input type="text" name="trangthai" placeholder="Xuất xứ sản phẩm"></span></td>
                                    <td class="right"><span class="span-left">Người Tạo:    </span> <span class="span-right"><input type="text" name="nguoitao" placeholder="Xuất xứ sản phẩm"></span></td>
                                </tr>
                                <tr>
                                    <td class="left"><span class="span-left">Tồn Kho:      </span> <span class="span-right"><input type="text" name="tonkho" placeholder="Xuất xứ sản phẩm"></span></td>
                                    <td class="right"><span class="span-left">Loại sản phẩm:</span> <span class="span-right"><input type="text" name="loaisanpham" placeholder="Xuất xứ sản phẩm"></span></td>
                                </tr>
                                <tr class="bottom" ;>
                                    <td colspan=2><button class="more-staff" name="btn_them">Thêm</button>
                                    <a href="?page=DsSanPham" class="come-back"><button>Quay lại</button></a></td>
                                </tr>
                            </table>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById("image-input").addEventListener("change", function(event) {
        var selectedImage = document.getElementById("image");
        var selectedFile = event.target.files[0];

        if (selectedFile) {
            var reader = new FileReader();

            reader.onload = function(e) {
                selectedImage.src = e.target.result;
            }

            reader.readAsDataURL(selectedFile);
        } else {
            selectedImage.src = "#"; // Đặt nguồn ảnh về một giá trị mặc định nếu không có hình ảnh được chọn
        }
    });

    </script>
</body>
</html>
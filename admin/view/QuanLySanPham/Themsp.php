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
            <b class="name">Vu Dinh Ba</b>
        </div>
        <div class="body">
            <div class="background-right">
                <div class="background-right-table">
                    <h1>THÊM SẢN PHẨM</h1>
                    <div class="background-right-table-small">  
                        <form action="" method="post">
                            <ul class="ul_left">
                                <li class="li-left">
                                    <span class="span-right">
                                        <input class="right1" type="file" name="user" id="image-input" onchange="chooseFile(this)" 
                                            accept="image/*">
                                        <img src="#" alt="" id="image" width="100px" height="100px">
                                    </span>
                                </li>
                                <li class="left1"><span class="span-left">Tên Sản Phẩm:</span> <span class="span-right"><input type="text" name="pass"></span></li>
                                <li><span class="span-left">Đơn Giá:</span> <span class="span-right"><input type="text" name="full_name" ></span></li>
                                <li><span class="span-left">Trang Thái:</span> <span class="span-right"><input type="text" name="lv"></span></li>
                                <li><span class="span-left">Tồn Kho:</span> <span class="span-right"><input type="text" name="lv"></span></li>
                            </ul>
                            <ul class="ul_right">
                                <li class="right1"><span class="span-left">Xuất Xứ:</span> <span class="span-right"><input type="text" name="lv"></span></li>
                                <li class="right"><span class="span-left">Hãng:</span> <span class="span-right"><input type="text" name="lv"></span></li>
                                <li class="right"><span class="span-left">Id danh mục:</span> <span class="span-right"><input type="text" name="lv"></span></li>
                                <li class="right"><span class="span-left">Ngày Tạo:</span> <span class="span-right"><input type="text" name="lv"></span></li>
                                <li class="right"><span class="span-left">Người Tạo:</span> <span class="span-right"><input type="text" name="lv"></span></li>
                            </ul>
                        </form>
                        <a href="?page=DsSanPham" class="more-staff" ><button>Thêm</button></a>
                        <a href="?page=DsSanPham" class="come-back"><button>Quay lại</button></a>
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
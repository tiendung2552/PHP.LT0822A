<!DOCTYPE html>
<html>
<head>
    <meta charset='utf8mb4_unicode_ci'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="asset/css/attributes.css">
    <link rel="stylesheet" href="asset/css/Sanpham/add_danhmuc.css">
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
                    <form action="" method="post">
                    
                    <div class="background-right-table-small">  
                            <table>
                            <thead>
                                    <tr>
                                        <th>Danh Mục</th>
                                    </tr>
                                </thead>
                               
                                    <?php
                                    foreach ($data_danhmuc as $key => $value) { ?>
                                     <tbody>
                                    <tr>
                                        <input type="hidden" name="id" value="<?php echo $value['id_danhmuc'] ?>">
                                        <td><input type="text" name="danhmuc" value="<?php echo $value['danhmuc'] ?>"></td>
                                        
                                    </tr>
                                    <tr>
                                    <td class="btn">
                                            <button name="up_danhmuc">Sửa</button>
                                        </td>
                                    </tr>
                              </tbody>
                              <?php } ?>
                            </table>
                            
                           
                          
                    </div>
                    </form>
                          <a href="?page=danhmuc" class="come-back"><button>Quay lại</button></a>
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
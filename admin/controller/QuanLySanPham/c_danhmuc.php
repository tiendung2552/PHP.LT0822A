<?php;
if(isset($_SESSION['ss_admin'])){
    $data_danhmuc = $db -> get('danhmuc',array());
    $user = $db -> get('nhanvien', array());
        if ($user[0]['lv']==1) {
            if(isset($_POST['add_danhmuc'])){
                $danhmuc = $_POST['danhmuc'];

                $loi = array();
                if($danhmuc == ''){

                $loi['danhmuc'] = 'không được để trống thông tin';
                }
                
                if(!$loi){
                    $db->insert('sanpham', array(
                        'danhmuc'=>$danhmuc ));
                
                    if(!$loi){
                        header('location: ?page=DsSanPham');
                    }

                }
            }
        }else{
            echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
            window.history.back();</script>';
        }
}else{
    header('location: ?page=login')
}
    include "view/QuanLySanPham/v_danhmuc.php";
?>
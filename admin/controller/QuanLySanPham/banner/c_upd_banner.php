<?php
if(isset($_SESSION['ss_admin'])){
    
    $user=$db->get('nhanvien', array());
    if ($user[0]['lv']==1 ) {
    $id = $_GET['id'];
    $banner = $db -> get('banner', array('id_banner' => $id));
    //sửa banner
    if(isset($_POST['upd_banner'])){
        $name_banner = $_POST['name_banner'];

        $image = $_FILES['img']['name'];
        $image_temp=$_FILES['img']['tmp_name'];
        // var_dump($image);
        // die;
    if($image_temp != "")   
    {
        move_uploaded_file($image_temp, "../images/slider/$image" ); 
        $db->update('banner', array(
            'name_banner'=>$name_banner,
            'img_banner'=>$image,
            
        ),
        array('id_banner' => $id));  
       
    }else{
            $db->update('banner', array(
            'name_banner'=>$name_banner,
            'img_banner'=>$image,
                
            ),
            array('id_banner' => $id));  
    }
 
    header('location: ?page=banner');
}
    }else{
        echo '<script type="text/javascript">alert("Bạn không có quyền để thêm");
        window.history.back();</script>';
    }
}else{
    header('location: ?page=login');
}
include "view/QuanLySanPham/banner/v_suabanner.php";
?>
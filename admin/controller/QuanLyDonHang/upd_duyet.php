 <?php 
  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    $data_donhang = $db->get('donhang', array('id_donhang' => $id));
   
    if(isset($_POST['upd'])){
        echo "eee";
        die;
        $tinhtrang = 'Đã duyệt';
        
        $db -> update('donhang', array(
            'tinhtrang' => $tinhtrang
        ),
        array('id_donhang' => $id)
       
    );
   
    header('?page=QuanlyDh');
    }
}
?>
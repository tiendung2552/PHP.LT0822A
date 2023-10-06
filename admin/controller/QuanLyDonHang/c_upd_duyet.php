 <?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $tinhtrang = $db ->get('donhang', array('id_donhang' => $id));
        $tinhtrang_up = null;
        foreach ($tinhtrang as $key => $value) {
            $tinhtrang_up = $value['id_tinhtrang'];
        }
        // var_dump($tinhtrang_up);
        // die;
                if($tinhtrang_up == 1){
                    $db -> update('donhang', array(
                        'id_tinhtrang' => 2
                    ),
                    array('id_donhang' => $id)
                    );
                    // print_r('echo');
                    // die;
                }else if($tinhtrang_up == 2){
                    $db -> update('donhang', array(
                        'id_tinhtrang' => 3
                    ),
                    array('id_donhang' => $id)
                    );
        
                }else if($tinhtrang_up == 3){
                    $db -> update('donhang', array(
                        'id_tinhtrang' => 4
                    ),
                    array('id_donhang' => $id)
                    );
        
                }else if($tinhtrang_up == 4){
                    $db -> update('donhang', array(
                        'id_tinhtrang' => 5
                    ),
                    array('id_donhang' => $id)  
                    );  
                }else{
                echo"lỗi tình trạng";
                }
                header('location: ?page=QuanlyDh');
            }
        
    

?>
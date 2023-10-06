<?php 

class database {
    protected $conn = null; 
    protected $localhost = 'localhost'; 
    protected $user = 'root'; 
    protected $pass = ''; 
    protected $dtbname = 'ivymoda'; 

    public function __construct()
    {

        $this->connect();
    }

    public function connect()
    {
        $this->conn = new mysqli($this->localhost, $this->user, $this->pass, $this->dtbname);
        mysqli_set_charset($this->conn,'UTF8');
        if (!$this->conn ){
            echo "Kết nối thất bại";
            exit();
        }
    }

    
    public function get($table,$condition=array()){
        $sql = "SELECT * FROM $table";

        if(!empty($condition)){
            $sql .= " WHERE";
            foreach ($condition as $key => $value) {
                # code...
                $sql.= " $key = '$value' AND";
            }
            $sql = trim($sql, "AND");
        };
        
        $query = mysqli_query($this->conn,$sql);

        $ketqua = array();
        if($query){
            while($row = mysqli_fetch_assoc($query)){
                $ketqua[] = $row;
            }
        }
        return $ketqua;
    }
    //Hàm lấy dữ liệu theo điều kiện like
		public function get_join($table,$table1,$table2,$table3, $col1, $col2, $condition=array())
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * FROM $table 
            JOIN $table1 ON $table1.$col1 = $table.$col1
            JOIN $table2 ON $table2.$col2 = $table3.$col2";
			//Bước 2 : Cộng chuỗi phần điều kiện LIKE
            if(!empty($condition)){
                $sql .= " WHERE";
                foreach ($condition as $key => $value) {
                    # code...
                    $sql.= " $key = '$value' AND";
                }
                $sql = trim($sql, "AND");
            };
			//Bước 3: Chạy câu lệnh
			$query = mysqli_query($this->conn,$sql);
			//Bước 4: Khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên cho vào mảng đó
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[] = $row;
				}
			}
			//Bước 5: Cho hàm trả về giá trị 
			return $result;
		}
        //Hàm lấy dữ liệu theo điều kiện like
		public function get_join_4($table,$table1,$table4,$table2,$table5,$table3,$table6, $col1, $col2,$col3, $table7, $col4, $value)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * FROM $table 
            JOIN $table1 ON $table1.$col1 = $table4.$col1
            JOIN $table2 ON $table2.$col2 = $table5.$col2
            JOIN $table3 ON $table3.$col3 = $table6.$col3
            
            WHERE $table7.$col4 = $value ";
            
			//Bước 3: Chạy câu lệnh
			$query = mysqli_query($this->conn,$sql);
			//Bước 4: Khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên cho vào mảng đó
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[] = $row;
				}
			}
			//Bước 5: Cho hàm trả về giá trị 
			return $result;
		}
        public function get_like_like($table,$columns,$value)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * from $table ";
			// Bước 2: Chuyển danh sách cột thành một mảng (nếu nó không phải là một mảng)
            if (!is_array($columns)) {
                $columns = [$columns];
            }
        
            // Bước 3: Tạo mảng cho phần điều kiện LIKE cho mỗi cột
            $conditions = [];
            foreach ($columns as $column) {
                $conditions[] = "$column LIKE '%$value%'";
            }
        
            // Bước 4: Kết hợp các điều kiện bằng toán tử OR
            $sql .= "WHERE " . implode(" OR ", $conditions);
			//Bước 5: Chạy câu lệnh
			$query = mysqli_query($this->conn,$sql);
			//Bước 6: Khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên cho vào mảng đó
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[] = $row;
				}
			}
			//Bước 5: Cho hàm trả về giá trị 
			return $result;
		}
        public function get_join_like($table, $table1, $table2,$table3, $col1, $col2 ,$columns, $value)
        {
            // Bước 1: Khởi tạo cấu trúc câu lệnh truy vấn
            $sql = "SELECT * FROM $table 
            JOIN $table1 ON $table1.$col1 = $table.$col1
            JOIN $table2 ON $table2.$col2 = $table3.$col2";
            // WHERE $table3.$col3 = $table4.$col4";
            // JOIN $table3 ON $table3.$col3 = $table1.$col3
            // Bước 2: Tạo mảng cho phần điều kiện LIKE cho mỗi cột
            
            $conditions = [];

            if (!is_array($columns)) {
                $columns = [$columns];
            }

            foreach ($columns as $column) {
                $conditions[] = "$table1.$column LIKE '%$value%'";
            }

            // Bước 3: Kết hợp các điều kiện bằng toán tử OR
            $sql .= " WHERE " . implode(" OR ", $conditions);

            // Bước 4: Chạy câu lệnh
            $query = mysqli_query($this->conn, $sql);

            // Bước 5: Khởi tạo một biến mảng để chứa kết quả
            $result = array();

            if ($query) {
                // Bước 6: Lặp qua kết quả truy vấn và thêm vào mảng kết quả
                while ($row = mysqli_fetch_assoc($query)) {
                    $result[] = $row;
                }
            } else {
                echo "Lỗi truy vấn: " . mysqli_error($this->conn);
            }

            // Bước 7: Trả về kết quả
            return $result;
        }
    public function insert($table, $data=array()){
        $keys = array_keys($data);
        $column = implode(",", $keys);
        $value_str ='';
        foreach ($data as $key => $value) {
           $value_str .= "'$value',";
        }
        $value_str = trim($value_str, ",");
        $sql = "INSERT INTO $table ($column) VALUES ($value_str)";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }
    public function update( $table, $fields = array(), $id = array() ){
        $set = '';
        
        foreach($fields as $key => $value ) {
            $set .= "$key='$value',";
        }
        $set = trim($set, ",");
        $sql = "UPDATE $table SET $set";
        if(!empty($id)){
            $sql.= "WHERE";
            foreach ($id as $key => $value) {
                $sql.= " $key = '$value'AND";
            }
            $sql = trim($sql, "AND");
        }; 
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }
    public function delete($table, $id=array()) {
        $sql = " DELETE FROM $table";
        if(!empty($id)){
            $sql.= " WHERE";
            foreach ($id as $key => $value) {
                    $sql.= " $key = '$value'AND";
                }
                $sql = trim($sql, "AND");
            }; 
        $query = mysqli_query($this->conn,$sql);
        return $query;
    }   
     // Trả về ID của bản ghi mới nhất
     function insert_id()
     {
     // Lấy kết nối đến cơ sở dữ liệu
     return $this->conn->insert_id;
     }
    
}
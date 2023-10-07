<?php 
    class database{
        protected $conn = null;
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $dbname = 'ivymoda';

        // tạo phương thức kết nối
        public function __construct(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            mysqli_set_charset($this->conn,'UTF8');
            if(!$this->conn){
                echo "kết nối thất bại";
                exit();
            }
        }

        public function get($table,$condition=array()){
            $sql = "SELECT * FROM $table";
    
            if(!empty($condition)){
                $sql .= " WHERE";
                foreach ($condition as $key => $value) {
                    # code...
                    $sql .= " $key = '$value' AND";
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
       
        public function get_like($table,$column ,$value)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * from $table ";
			//Bước 2 : Cộng chuỗi phần điều kiện LIKE
			$sql .= "WHERE $column LIKE '%$value%'";
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
        public function get_join_2($table,$table1,$table2, $col1, $table3, $col2, $value)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * FROM $table 
            JOIN $table1 ON $table1.$col1 = $table2.$col1
            
            WHERE $table3.$col2 = $value ";
            
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
        public function get_join_3($table,$table1,$table3,$table2,$table4, $col1, $col2, $table6, $col3, $value)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * FROM $table 
            JOIN $table1 ON $table1.$col1 = $table3.$col1
            JOIN $table2 ON $table2.$col2 = $table4.$col2
            
            WHERE $table6.$col3 = $value ";
            
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
        public function get_join_like($table, $table1, $table2, $table3,$table4,$table5, $col1, $col2, $col3 ,$table6 ,$columns, $value)
        {
            // Bước 1: Khởi tạo cấu trúc câu lệnh truy vấn
            $sql = "SELECT * FROM $table 
                    JOIN $table1 ON $table1.$col1 = $table.$col1
                    JOIN $table2 ON $table2.$col2 = $table4.$col2
                    JOIN $table3 ON $table3.$col3 = $table5.$col3";
                    // JOIN $table4 ON $table4.$col4 = $table2.$col4";

            // Bước 3: Kết hợp các điều kiện bằng toán tử OR
            $sql .= " WHERE $table6.$columns = $value " ;

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
        public function get_limit($table, $condition=array(), $limit)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * FROM $table";
			//Bước 2: Kiểm tra xem có điều kiện không và cộng chuỗi tương ứng 
			if (!empty($condition)) {
				$sql.=" WHERE";
				foreach ($condition as $key => $value) {
					$sql.= " $key = '$value' AND";
				}
				$sql = trim($sql, "AND");
			}
			//Bước 3: cộng chuỗi có thêm điều kiện limit vào
			$sql .= " LIMIT $limit";
			//Bước 4: Chạy câu lệnh
			$query = mysqli_query($this->conn,$sql);
			//Bước 5: Khởi tạo 1 biến mảng và lặp hết dữ liệu lấy được từ câu truy vấn ở trên cho vào mảng đó
			$result = array();
			if ($query) {
				while ($row = mysqli_fetch_assoc($query)) {
					$result[] = $row;
				}
			}
			//Bước 6: Cho hàm trả về giá trị 
			return $result;
		}
        // Thêm dữ liệu mới vào bảng
        public function insert($table, $data=array())
            {
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
        // Xóa dữ liệu từ bảng
            public function delete($table,$condition=array())
            {
                $sql = " DELETE FROM $table WHERE ";
                foreach ($condition as $key => $value) {
                    $sql.= "$key = '$value' AND";
                }
                $sql = trim($sql,'AND');
                $query = mysqli_query($this->conn,$sql);
                return $query;
            }
        // Cập nhật dữ liệu vào bảng
            public function update($table,$data=array(),$condition=array()) {
			$str = '';
			foreach ($data as $key => $value) {
				$str .="$key = '$value',"; 
			}
			$str = trim($str,",");
			$sql = "UPDATE $table SET $str WHERE ";
			foreach ($condition as $key => $value) {
				$sql.= "$key = '$value' AND";
			}
			$sql = trim($sql,'AND');
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
?>
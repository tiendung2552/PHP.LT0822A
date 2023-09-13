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
       
        public function get_like($table, $column, $value){
            $sql = "SELECT * FROM $table WHERE $column LIKE '%$value%'";
            $query = mysqli_query($this->conn, $sql);
            $ketqua = array();
            if ($query) {
                while ($row = mysqli_fetch_assoc($query)){
                    $ketqua[] = $row;
                }
            }
            return $ketqua;
        }
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
            public function get_like_like1($table,$table1,$table2,$col1,$col2, $condition_column, $condition_value)
            {	
                //Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
                $sql = "SELECT * from $table 
                        JOIN $table1 ON $table1.$col1 = $table.$col1
                        JOIN $table2 ON $table2.$col2 = $table1.$col2";
                //Bước 2 : Cộng chuỗi phần điều kiện LIKE
                $sql .= " WHERE $table2.$condition_column = '$condition_value'";
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
            function insert_id()
            {
            // Lấy kết nối đến cơ sở dữ liệu
            return $this->conn->insert_id;
            
            // Trả về ID của bản ghi mới nhất
            
            }
    }
?>
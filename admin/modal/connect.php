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
		public function get_like($table,$column,$value)
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
        public function get_like_like($table,$column,$value)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * from $table ";
			//Bước 2 : Cộng chuỗi phần điều kiện LIKE
			$sql .= "WHERE $column = '$value'";
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
        public function get_like_like1($table,$table1,$column,$col1,$value)
		{	
			//Bước 1 : Khởi tạo cấu trúc câu lệnh truy vấn
			$sql = "SELECT * from $table 
                    JOIN $table1 ON $table1.$col1 = $table.$col1";
			//Bước 2 : Cộng chuỗi phần điều kiện LIKE
			$sql .= " WHERE ($table1.$column = '$value')";
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
    
    
}
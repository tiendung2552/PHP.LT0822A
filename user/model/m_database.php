<?php 
    class database{
        protected $conn = null;
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $dbname = 'pro_banhang';

        // tạo phương thức kết nối
        public function __construct(){
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
            if(!$this->conn){
                echo "kết nối thất bại";
                exit();
            }
        }

        public function get($table, $condition=array()){
            // khoi tao cau lenh lay du lieu sql
            $sql = "SELECT * FROM $table";

            if (!empty($condition)){
                $sql.=" WHERE";
                foreach($condition as $key => $value){
                    $sql = " $key = '$value' AND";
                }
                $sql = trim($sql, "AND");
            }
            // thuc hien cau lenh
            $query = mysqli_query($this->conn, $sql);
            $ketqua = array();
            if ($query){
                while($row = mysqli_fetch_assoc($query)){
                    $ketqua[] = $row;
                }
            } return $ketqua;

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

            public function delete($table, $id) {
                $sql = "DELETE FROM $table WHERE id = $id"; 
                $query = mysqli_query($this->conn, $sql);
                return $query;
            }
            public function update($table,$data=array(),$id) {
                $keys = array_keys($data);
                $column = implode(",", $keys);
                $value_str ='';
                foreach ($data as $key => $value) {
                $value_str .= "'$value',";
                }
                $value_str = trim($value_str, ",");
                $sql="UPDATE $table SET $value_str WHERE id=$id";
            }


    }
?>
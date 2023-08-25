<?php
    class database{

        protected $conn = null;
        protected $localhost = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $dtbname = 'pro_banhang';

        public function __construct(){
            $this -> connect();
        }

        public function connect(){
            $this->conn = new mysqli($this->localhost, $this->user, $this->pass, $this->dtbname);
            if (!$this->conn) {
                echo "Connect null";
                exit;
            }
        }
        

    }

?>
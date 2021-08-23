<?php

    require_once("new_config.php");

    class Database {

        public $connection;
        public $db;

        function __construct() {

            $this->db = $this->open_db_connection();

        }

        public function open_db_connection() {

            //$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
            
            $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); //new mysqli is a object!

            if ($this->connection->connect_errno) { //connect_errno is a built in function, return error code

                die("Database connection failed badly!" . $this->connection->connect_error); //connect_error is a built in function, description of connection error

            }

            return $this->connection;

        }

        public function query($sql) {

            $result = $this->db->query($sql);

            $this->confirm_query($result);

            return $result;

        }

        private function confirm_query($result) {

            if (!$result) {

                die("Query Failed!" . $this->db->error);

            }

        }

        public function escape_string($string) {

            return $this->db->real_escape_string($string);   

        }

        public function the_insert_id () {

            return $this->db->insert_id;;

        }

    }

    $database = new Database();

?>
    

    
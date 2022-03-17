<?php
    class Database {
        // DB Params
        private $host = 'acw2033ndw0at1t7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
        private $db_name = 'tueyckuise9dw275';
        private $username = 'eo68a6id9wtlsplo';
        private $password = 'i4k1jzulk4j4d4qu';
        private $conn;

        // DB Connect
        public function connect() {
            $this -> conn = null;

            try {
                $this -> conn = new PDO('mysql:host=' . $this -> host . ';dbname=' . $this -> db_name,
                $this -> username, $this -> password);
                $this -> conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo 'Connection Error: ' . $e -> getMessage();
            }

            return $this -> conn;
        }
    }
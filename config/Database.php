<?php 
    class Database {
        protected $conn;

        public function connect() {
            // instead of $this->conn = null;
            if ($this->conn) {
                //connection already exists, return it
                return $this->conn; 
            } else {
                $hostname = 'localhost';
                $database = 'world';
                $username = 'root';
                //$password = 'pa55word';
                $dsn = "mysql:host={$hostname};dbname={$database}";

                try {
                    $this->conn = new PDO($dsn, $username); //$password
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $this->conn;
                } catch (PDOException $e) {
                    $error_message = 'Database Error: ';
                    $error_message .= $e->getMessage();
                    echo $error_message;
                    exit('Unable to connect to the database');
                }
            }
        }
    }
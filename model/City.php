<?php 
    class City {
        private $conn; 
        private $table = 'city';

        // Only using $name in this example
        public $id;
        public $name;
        public $countryCode;
        public $district;
        public $population;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function read() {
            $query = "SELECT * FROM {$this->table} WHERE Name LIKE :name ORDER BY Population DESC";
            
            $stmt = $this->conn->prepare($query);

            $stmt->bindValue(':name', "%$this->name%");

            $stmt->execute();
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();

            return $results;
        }
    }
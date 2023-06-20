<?php
    class Connect
    {
        public $server;
        public $user;
        public $password;
        public $dbName;

        public function __construct()
        {
            $this -> server = "vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
            $this -> user = "f0e1o44if5g6yjm9";
            $this -> password = "v7eb276hj3fo1fp5";
            $this -> dbName = "kn1tyhhse6f0llmq";
            // $this -> server = "localhost";
            // $this -> user = "root";
            // $this -> password = "";
            // $this -> dbName = "shop";

        }
        //Option 1: use mySQL (no condition)
        function connectToMySQL():mysqli
        {
            $conn_my = new mysqli($this->server,$this->user,$this->password,$this->dbName);
            if($conn_my->connect_error)
            {
                die("Failed".$conn_my->connect_error);
            }
            else{
                //echo "Connect!!!";
                // echo "<br>";
            }
            return $conn_my;
        }

        //Option 1: use PDO  (exist condition)
        function connectToPDO():PDO
        {
            try
            {
                $conn_pdo = new PDO
                ("mysql:host=$this->server;dbname=$this->dbName",$this->user,$this->password);
                $conn_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connect to PDO";
            }
            catch(PDOException $e)
            {
                die("Failed $e");
            }
            return $conn_pdo;
        }
    }



?>